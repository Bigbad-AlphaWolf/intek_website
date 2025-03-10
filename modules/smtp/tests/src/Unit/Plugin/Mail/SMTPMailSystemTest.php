<?php

namespace Drupal\Tests\smtp\Unit\Plugin\Mail;

use Prophecy\PhpUnit\ProphecyTrait;
use Drupal\Component\Utility\EmailValidator;
use Drupal\Component\Utility\EmailValidatorInterface;
use Drupal\Core\File\FileSystem;
use Drupal\Core\File\MimeType\MimeTypeGuesser;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;
use Drupal\Core\Logger\LoggerChannelInterface;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\Core\Session\AccountProxy;
use Drupal\Core\StringTranslation\TranslationInterface;
use Drupal\smtp\Plugin\Mail\SMTPMailSystem;
use Drupal\Tests\UnitTestCase;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;
use Prophecy\Argument;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Validate requirements for SMTPMailSystem.
 *
 * @group SMTP
 */
class SMTPMailSystemTest extends UnitTestCase {

  use ProphecyTrait;
  /**
   * The email validator.
   *
   * @var \Drupal\Component\Utility\EmailValidatorInterface
   */
  protected $emailValidator;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    $this->mockConfigFactory = $this->getConfigFactoryStub([
      'smtp.settings' => [
        'smtp_timeout' => 30,
        'smtp_reroute_address' => '',
      ],
      'system.site' => ['name' => 'Mock site name', 'mail' => 'noreply@testmock.mock'],
    ]);
    $this->mockConfigFactoryRerouted = $this->getConfigFactoryStub([
      'smtp.settings' => [
        'smtp_reroute_address' => 'blackhole@galaxy.com',
      ],
    ]);

    $this->mockLogger = $this->prophesize(LoggerChannelFactoryInterface::class);
    $this->mockLogger->get('smtp')->willReturn($this->prophesize(LoggerChannelInterface::class));
    $this->mockMessenger = $this->prophesize(MessengerInterface::class);
    $this->mockCurrentUser = $this->prophesize(AccountProxy::class);
    $this->mockFileSystem = $this->prophesize(FileSystem::class);
    $this->mimeTypeGuesser = $this->prophesize(MimeTypeGuesser::class);

    $mockContainer = $this->mockContainer = $this->prophesize(ContainerInterface::class);
    $mockContainer->get('config.factory')->willReturn($this->mockConfigFactory);
    $mockContainer->get('logger.factory')->willReturn($this->mockLogger->reveal());
    $mockContainer->get('messenger')->willReturn($this->mockMessenger->reveal());
    $mockContainer->get('current_user')->willReturn($this->mockCurrentUser->reveal());
    $mockContainer->get('file_system')->willReturn($this->mockFileSystem->reveal());
    $mockContainer->get('file.mime_type.guesser')->willReturn($this->mimeTypeGuesser->reveal());

    $mockStringTranslation = $this->prophesize(TranslationInterface::class);
    $mockStringTranslation->translate(Argument::any())->willReturnArgument(0);
    $mockStringTranslation->translate(Argument::any(), Argument::any())->willReturnArgument(0);
    $mockStringTranslation->translateString(Argument::any())->willReturn('.');
    $mockContainer->get('string_translation')->willReturn($mockStringTranslation->reveal());

    // Email validator.
    $this->emailValidator = new EmailValidator();
    $mockContainer->get('email.validator')->willReturn($this->emailValidator);
    \Drupal::setContainer($this->mockContainer->reveal());
  }

  /**
   * Provides scenarios for getComponents().
   */
  public function getComponentsProvider() {
    return [
      [
        // Input.
        'name@example.com',
        // Expected.
        [
          'name' => '',
          'email' => 'name@example.com',
        ],
      ],
      [
        ' name@example.com',
        [
          'name' => '',
          'input' => 'name@example.com',
          'email' => 'name@example.com',
        ],
      ],
      [
        'name@example.com ',
        [
          'name' => '',
          'input' => 'name@example.com',
          'email' => 'name@example.com',
        ],
      ],
      [
        'some name <address@example.com>',
        [
          'name' => 'some name',
          'email' => 'address@example.com',
        ],
      ],
      [
        '"some name" <address@example.com>',
        [
          'name' => 'some name',
          'email' => 'address@example.com',
        ],
      ],
      [
        '<address@example.com>',
        [
          'name' => '',
          'email' => 'address@example.com',
        ],
      ],
    ];
  }

  /**
   * Test getComponents().
   *
   * @dataProvider getComponentsProvider
   */
  public function testGetComponents($input, $expected) {
    $mailSystem = new SMTPMailSystemTestHelper([], '', [], $this->mockLogger->reveal(), $this->mockMessenger->reveal(), $this->emailValidator, $this->mockConfigFactory, $this->mockCurrentUser->reveal(), $this->mockFileSystem->reveal(), $this->mimeTypeGuesser->reveal());

    $ret = $mailSystem->publicGetComponents($input);

    if (!empty($expected['input'])) {
      $this->assertEquals($expected['input'], $ret['input']);
    }
    else {
      $this->assertEquals($input, $ret['input']);
    }

    $this->assertEquals($expected['name'], $ret['name']);
    $this->assertEquals($expected['email'], $ret['email']);
  }

  /**
   * Test applyRerouting().
   */
  public function testApplyRerouting() {
    $mailSystemRerouted = new SMTPMailSystemTestHelper([], '', [], $this->mockLogger->reveal(), $this->mockMessenger->reveal(), $this->emailValidator, $this->mockConfigFactoryRerouted, $this->mockCurrentUser->reveal(), $this->mockFileSystem->reveal(), $this->mimeTypeGuesser->reveal());
    $to = 'abc@example.com';
    $headers = [
      'some' => 'header',
      'cc' => 'xyz@example.com',
      'bcc' => 'ttt@example.com',
    ];
    list($new_to, $new_headers) = $mailSystemRerouted->publicApplyRerouting($to, $headers);
    $this->assertEquals($new_to, 'blackhole@galaxy.com', 'to address is set to the reroute address.');
    $this->assertEquals($new_headers, ['some' => 'header'], 'bcc and cc headers are unset when rerouting.');

    $mailSystemNotRerouted = new SMTPMailSystemTestHelper([], '', [], $this->mockLogger->reveal(), $this->mockMessenger->reveal(), $this->emailValidator, $this->mockConfigFactory, $this->mockCurrentUser->reveal(), $this->mockFileSystem->reveal(), $this->mimeTypeGuesser->reveal());
    $to = 'abc@example.com';
    $headers = [
      'some' => 'header',
      'cc' => 'xyz@example.com',
      'bcc' => 'ttt@example.com',
    ];
    list($new_to, $new_headers) = $mailSystemNotRerouted->publicApplyRerouting($to, $headers);
    $this->assertEquals($new_to, $to, 'original to address is preserved when not rerouting.');
    $this->assertEquals($new_headers, $headers, 'bcc and cc headers are preserved when not rerouting.');
  }

  /**
   * Provides scenarios for testMailValidator().
   */
  public function mailValidatorProvider() {
    $emailValidatorPhpMailerDefault = new EmailValidatorPhpMailerDefault();
    $emailValidatorDrupal = new EmailValidator();
    return [
      'Without umlauts, PHPMailer default validator, no exception' => [
        'test@drupal.org',
        'PhpUnit Localhost <phpunit@localhost.com>',
        $emailValidatorPhpMailerDefault,
        NULL,
      ],
      'With umlauts in local part, PHPMailer default validator, exception' => [
        'testmüller@drupal.org',
        'PhpUnit Localhost <phpunit@localhost.com>',
        $emailValidatorPhpMailerDefault,
        PHPMailerException::class,
      ],
      'With umlauts in domain part, PHPMailer default validator, exception' => [
        'test@müllertest.de',
        'PhpUnit Localhost <phpunit@localhost.com>',
        $emailValidatorPhpMailerDefault,
        PHPMailerException::class,
      ],
      'Without top-level domain in domain part, PHPMailer default validator, exception' => [
        'test@drupal',
        'PhpUnit Localhost <phpunit@localhost.com>',
        $emailValidatorPhpMailerDefault,
        PHPMailerException::class,
      ],
      'Without umlauts, Drupal mail validator, no exception' => [
        'test@drupal.org',
        'PhpUnit Localhost <phpunit@localhost.com>',
        $emailValidatorDrupal,
        NULL,
      ],
      'With umlauts in local part, Drupal mail validator, no exception' => [
        'testmüller@drupal.org',
        'PhpUnit Localhost <phpunit@localhost.com>',
        $emailValidatorDrupal,
        NULL,
      ],
      'With umlauts in domain part, Drupal mail validator, no exception' => [
        'test@müllertest.de',
        'PhpUnit Localhost <phpunit@localhost.com>',
        $emailValidatorDrupal,
        NULL,
      ],
      'Without top-level domain in domain part, Drupal mail validator, no exception' => [
        'test@drupal',
        'PhpUnit Localhost <phpunit@localhost.com>',
        $emailValidatorDrupal,
        NULL,
      ],
    ];
  }

  /**
   * Test mail() with focus on the mail validator.
   *
   * @dataProvider mailValidatorProvider
   */
  public function testMailValidator(string $to, string $from, EmailValidatorInterface $validator, $exception) {
    $this->emailValidator = $validator;

    $mailSystem = new SMTPMailSystemTestHelper(
      [],
      '',
      [],
      $this->mockLogger->reveal(),
      $this->mockMessenger->reveal(),
      $validator,
      $this->mockConfigFactory,
      $this->mockCurrentUser->reveal(),
      $this->mockFileSystem->reveal(),
      $this->mimeTypeGuesser->reveal()
    );
    $message = [
      'to' => $to,
      'from' => $from,
      'body' => 'Some test content for testMailValidatorDrupal',
      'headers' => [
        'content-type' => 'text/plain',
      ],
      'subject' => 'testMailValidatorDrupal',
    ];

    if (isset($exception)) {
      $this->expectException($exception);
    }
    // Call function.
    $result = $mailSystem->mail($message);

    // More important than the result is that no exception was thrown, if
    // $exception is unset.
    self::assertTrue($result);
  }

  /**
   * Test mail() with missing header value.
   */
  public function testMailHeader() {
    $mailSystem = new SMTPMailSystemTestHelper(
      [],
      '',
      [],
      $this->mockLogger->reveal(),
      $this->mockMessenger->reveal(),
      new EmailValidatorPhpMailerDefault(),
      $this->mockConfigFactory,
      $this->mockCurrentUser->reveal(),
      $this->mockFileSystem->reveal(),
      $this->mimeTypeGuesser->reveal()
    );

    $message = [
      'to' => 'test@drupal.org',
      'from' => 'PhpUnit Localhost <phpunit@localhost.com>',
      'body' => 'Some test content for testMailHeaderDrupal',
      'headers' => [
        'content-type' => 'text/plain',
        'from' => 'test@drupal.org',
        'reply-to' => 'test@drupal.org',
        'cc' => '',
        'bcc' => '',
      ],
      'subject' => 'testMailHeaderDrupal',
    ];

    // Call function.
    $result = $mailSystem->mail($message);

    self::assertTrue($result);
  }

}

/**
 * Test helper for SMTPMailSystemTest.
 */
class SMTPMailSystemTestHelper extends SMTPMailSystem {

  /**
   * Exposes getComponents for testing.
   */
  public function publicGetComponents($input) {
    return $this->getComponents($input);
  }

  /**
   * Dummy of smtpMailerSend.
   */
  public function smtpMailerSend($mailerArr) {
    return TRUE;
  }

  /**
   * Exposes applyRerouting() for testing.
   */
  public function publicApplyRerouting($to, array $headers) {
    return $this->applyRerouting($to, $headers);
  }

}

/**
 * An adaptor class wrapping the default PHPMailer validator.
 */
class EmailValidatorPhpMailerDefault implements EmailValidatorInterface {

  /**
   * {@inheritdoc}
   *
   * This function validates in same way the PHPMailer class does in its
   * default behavior.
   */
  public function isValid($email) {
    PHPMailer::$validator = 'php';
    return PHPMailer::validateAddress($email);
  }

}
