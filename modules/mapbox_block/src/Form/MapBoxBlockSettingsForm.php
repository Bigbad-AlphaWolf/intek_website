<?php

namespace Drupal\mapbox_block\Form;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\key\KeyRepository;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Settings form for Mapbox block.
 *
 * @package Drupal\mapbox_block\Form
 */
class MapBoxBlockSettingsForm extends ConfigFormBase {

  /**
   * The key repository object.
   *
   * @var \Drupal\key\KeyRepository
   */
  protected $keyRepository;

  /**
   * Constructor.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   Config factory object.
   * @param \Drupal\key\KeyRepository $keyRepository
   *   Key repository object.
   */
  public function __construct(ConfigFactoryInterface $config_factory, KeyRepository $keyRepository) {
    parent::__construct($config_factory);
    $this->keyRepository = $keyRepository;
  }

  /**
   * Service injection.
   *
   * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
   *   Container object.
   *
   * @return static
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory'),
      $container->get('key.repository')
    );
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'mapbox_block.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'mapbox_block_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('mapbox_block.settings');

    $form['settings'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Mapbox Block settings'),
    ];

    $form['settings']['mapbox_token_name'] = [
      '#type' => 'key_select',
      '#title' => $this->t('Mapbox token'),
      '#description' => $this->t('Access token to use Mapbox.'),
      '#empty_option' => $this->t('- Select Key -'),
      '#default_value' => $config->get('mapbox_token_name'),
      '#key_filters' => ['type' => 'authentication'],
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);
    $this->config('mapbox_block.settings')
      ->set('mapbox_token_name', $form_state->getValue('mapbox_token_name'))
      ->save();
  }

}
