<?php

namespace Drupal\mapbox_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Extension\ModuleHandler;
use Drupal\Core\Cache\CacheableMetadata;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\key\KeyRepository;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Mapbox Block.
 *
 * @Block(
 *   id          = "mapbox_map",
 *   admin_label = @Translation("Mapbox Map"),
 *   category    = @Translation("Mapbox"),
 * )
 */
class MapBoxBlock extends BlockBase implements ContainerFactoryPluginInterface, BlockPluginInterface {

  /**
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * @var \Drupal\Core\Extension\ModuleHandler
   */
  protected $moduleHandler;

  /**
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * The key repository object.
   *
   * @var \Drupal\key\KeyRepository
   */
  protected $keyRepository;

  /**
   * MapBoxBlock constructor.
   *
   * @param array $configuration
   * @param $plugin_id
   * @param $plugin_definition
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   * @param \Drupal\Core\Extension\ModuleHandler $module_handler
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   * @param \Drupal\key\KeyRepository $key_repository
   *   Key repository object.
   */
  public function __construct(
    array                      $configuration,
                               $plugin_id,
                               $plugin_definition,
    ConfigFactoryInterface     $config_factory,
    ModuleHandler              $module_handler,
    EntityTypeManagerInterface $entity_type_manager,
    KeyRepository              $key_repository
  ) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->configFactory = $config_factory;
    $this->moduleHandler = $module_handler;
    $this->entityTypeManager = $entity_type_manager;
    $this->keyRepository = $key_repository;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('config.factory'),
      $container->get('module_handler'),
      $container->get('entity_type.manager'),
      $container->get('key.repository')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
        'map_id' => 'map',
        'map_style' => 'streets-v11',
        'map_custom_style' => '',
        'map_center_lat' => '',
        'map_center_lng' => '',
        'map_zoom' => 8,
        'map_markers' => [],
        'map_total_markers' => 5,
        'map_marker_color' => '',
        'disabled_zoom_scroll' => FALSE,
        'show_controls' => FALSE,
        'cooperative_gestures' => FALSE,
      ] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);
    $config = $this->getConfiguration();

    $form['mapbox'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Mapbox'),
    ];

    $form['mapbox']['map_id'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Map container id'),
      '#description' => $this->t('Element id to render the Mapbox map on.'),
      '#required' => TRUE,
      '#default_value' => $config['map_id'],
      '#size' => 15,
    ];

    $mapbox_styles = [
      'streets-v11' => $this->t('Streets'),
      'outdoors-v11' => $this->t('Outdoors'),
      'light-v10' => $this->t('Light'),
      'dark-v10' => $this->t('Dark'),
      'satellite-v9' => $this->t('Satellite'),
      'satellite-streets-v11' => $this->t('Satellite Streets'),
      'navigation-day-v1' => $this->t('Navigation Day'),
      'navigation-night-v1' => $this->t('Navigation Night'),
    ];
    $form['mapbox']['map_style'] = [
      '#type' => 'select',
      '#title' => $this->t('Map style'),
      '#options' => $mapbox_styles,
      '#empty_option' => $this->t('Select map style'),
      '#required' => TRUE,
      '#default_value' => $config['map_style'],
    ];

    $form['mapbox']['map_custom_style'] = [
      '#type' => 'textfield',
      '#field_prefix' => 'mapbox://',
      '#title' => $this->t('Map custom style'),
      '#description' => $this->t('Use custom mapbox style created in Mapbox.'),
      '#default_value' => $config['map_custom_style'],
      '#size' => 30,
    ];

    $form['mapbox']['map_center'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Map center'),
    ];
    $form['mapbox']['map_center']['map_center_lat'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Map center latitude'),
      '#description' => $this->t('Map center latitude coordinate.'),
      '#required' => TRUE,
      '#default_value' => $config['map_center_lat'],
      '#size' => 20,
    ];
    $form['mapbox']['map_center']['map_center_lng'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Map center longitude'),
      '#description' => $this->t('Map center longitude coordinate.'),
      '#required' => TRUE,
      '#default_value' => $config['map_center_lng'],
      '#size' => 20,
    ];

    $form['mapbox']['map_center']['map_zoom'] = [
      '#type' => 'select',
      '#options' => range(0, 16),
      '#title' => $this->t('Map zoom'),
      '#default_value' => $config['map_zoom'],
      '#required' => TRUE,
    ];

    $form['mapbox']['settings'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Mapbox settings'),
    ];

    $form['mapbox']['settings']['disable_zoom_scroll'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Disable zoom scroll'),
      '#default_value' => !empty($config['disable_zoom_scroll']) ? $config['disable_zoom_scroll'] : FALSE,
    ];

    $form['mapbox']['settings']['show_controls'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Show controls'),
      '#default_value' => !empty($config['show_controls']) ? $config['show_controls'] : FALSE,
    ];

    $form['mapbox']['settings']['cooperative_gestures'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Cooperative gestures'),
      '#default_value' => !empty($config['cooperative_gestures']) ? $config['cooperative_gestures'] : FALSE,
    ];

    $markers = $config['map_markers'];
    $num_markers = $config['map_total_markers'];
    if (empty($num_markers)) {
      $num_markers = count($config['map_markers']);
    }

    $form['mapbox']['map_markers'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Static map markers'),
      '#prefix' => '<div id="mapbox-markers-wrapper">',
      '#suffix' => '</div>',
    ];

    $form['mapbox']['map_markers']['total'] = [
      '#type' => 'select',
      '#options' => range(0, 50),
      '#title' => $this->t('Total number of static map markers'),
      '#description' => $this->t('Sets number of markers and fields to show. Save to generate input fields.'),
      '#default_value' => !empty($config['map_total_markers']) ? $config['map_total_markers'] : 5,
      '#required' => TRUE,
    ];

    $form['mapbox']['map_markers']['markers'] = [
      '#type' => 'table',
      '#header' => [
        $this->t('Label'),
        $this->t('Latitude'),
        $this->t('Longitude'),
        $this->t('Weight'),
      ],
      '#tabledrag' => [
        [
          'action' => 'order',
          'relationship' => 'sibling',
          'group' => 'table-sort-weight',
        ],
      ],
    ];

    for ($marker = 0; $marker < $num_markers; $marker++) {

      $form['mapbox']['map_markers']['markers'][$marker]['#attributes']['class'][] = 'draggable';
      $form['mapbox']['map_markers']['markers'][$marker]['#weight'] = !empty($markers[$marker]['weight']) ? $markers[$marker]['weight'] : $marker;

      $form['mapbox']['map_markers']['markers'][$marker]['label'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Label'),
        '#title_display' => 'invisible',
        '#size' => 30,
        '#default_value' => !empty($markers[$marker]['label']) ? $markers[$marker]['label'] : '',
      ];

      $form['mapbox']['map_markers']['markers'][$marker]['lat'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Latitude'),
        '#title_display' => 'invisible',
        '#default_value' => !empty($markers[$marker]['lat']) ? $markers[$marker]['lat'] : '',
        '#size' => 20,
      ];

      $form['mapbox']['map_markers']['markers'][$marker]['lng'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Longitude'),
        '#title_display' => 'invisible',
        '#default_value' => !empty($markers[$marker]['lng']) ? $markers[$marker]['lng'] : '',
        '#size' => 20,
      ];

      // TableDrag: Weight column element.
      $form['mapbox']['map_markers']['markers'][$marker]['weight'] = [
        '#type' => 'weight',
        '#title' => $this->t('Weight for Marker'),
        '#title_display' => 'invisible',
        '#default_value' => !empty($markers[$marker]['weight']) ? $markers[$marker]['weight'] : $marker,
        // Classify the weight element for #tabledrag.
        '#attributes' => ['class' => ['table-sort-weight']],
      ];
    }

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    parent::blockSubmit($form, $form_state);
    $values = $form_state->getValues();

    $this->configuration['map_id'] = $values['mapbox']['map_id'];

    $this->configuration['map_style'] = $values['mapbox']['map_style'];
    $this->configuration['map_custom_style'] = $values['mapbox']['map_custom_style'];

    $this->configuration['map_center_lat'] = $values['mapbox']['map_center']['map_center_lat'];
    $this->configuration['map_center_lng'] = $values['mapbox']['map_center']['map_center_lng'];
    $this->configuration['map_zoom'] = $values['mapbox']['map_center']['map_zoom'];

    $this->configuration['map_total_markers'] = $values['mapbox']['map_markers']['total'];
    if ($this->configuration['map_total_markers'] == 0) {
      $this->configuration['map_markers'] = [];
    }
    else {
      $this->configuration['map_markers'] = $values['mapbox']['map_markers']['markers'];
    }

    $this->configuration['disable_zoom_scroll'] = $values['mapbox']['settings']['disable_zoom_scroll'];
    $this->configuration['show_controls'] = $values['mapbox']['settings']['show_controls'];
    $this->configuration['cooperative_gestures'] = $values['mapbox']['settings']['cooperative_gestures'];
  }

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    $mapbox_settings = $this->configFactory->get('mapbox_block.settings');
    $total_markers = $this->configuration['map_total_markers'];

    $markers = !empty($this->configuration['map_markers']) ? $this->configuration['map_markers'] : [];
    $mapbox_markers = NULL;
    if ($total_markers > 0) {
      $mapbox_markers['type'] = 'FeatureCollection';
      $mapbox_markers['features'] = [];
      foreach ($markers as $marker) {
        $mapbox_markers['features'][] = [
          'geometry' => [
            'type' => 'Point',
            'coordinates' => [
              (float) $marker['lng'],
              (float) $marker['lat'],
            ],
          ],
          'type' => "Feature",
          'properties' => [
            'name' => (string) $this->t($marker['label']),
          ],
        ];
      }
    }

    $build = [
      '#theme' => 'mapbox',
      '#map_id' => $this->configuration['map_id'],
    ];

    // Attach library.
    $build['#attached']['library'][] = 'mapbox_block/mapbox_block';

    // Set access token.
    $build['#attached']['drupalSettings']['mapbox_block'] = [
      'access_token' => $this->keyRepository->getKey($mapbox_settings->get('mapbox_token_name'))
        ->getKeyValue(),
    ];

    // Build up options.
    $mapbox_options = [
      'style' => !empty($this->configuration['map_style']) ? 'mapbox://styles/mapbox/' . $this->configuration['map_style'] : 'mapbox://',
      'container' => $this->configuration['map_id'],
      'zoom' => $this->configuration['map_zoom'],
      'center' => [
        $this->configuration['map_center_lng'],
        $this->configuration['map_center_lat'],
      ],
      'cooperativeGestures' => $this->configuration['cooperative_gestures'],
    ];

    // Pass along mapbox block configuration.
    $build['#attached']['drupalSettings']['mapbox_block']['maps'][$this->configuration['map_id']] = [
      'options' => $mapbox_options,
      'settings' => [
        'disable_zoom_scroll' => $this->configuration['disable_zoom_scroll'],
        'language' => \Drupal::languageManager()->getCurrentLanguage()->getId(),
      ],
      'markers' => $mapbox_markers,
    ];

    $cacheableMetadata = new CacheableMetadata();
    $cacheableMetadata->addCacheableDependency($this->configuration);
    $cacheableMetadata->addCacheableDependency($mapbox_settings);
    $cacheableMetadata->applyTo($build);

    return $build;
  }

}
