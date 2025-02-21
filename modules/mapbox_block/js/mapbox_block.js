(function ($, Drupal, debounce, settings) {
  Drupal.behaviors.mapbox_block = {
    attach: function (context, drupalSettings) {
      // Make sure specific settings exist and access token is set.
      if (drupalSettings.mapbox_block && drupalSettings.mapbox_block.access_token) {

        // Make sure mapboxgl is loaded on the page.
        if (mapboxgl) {

          // No map support.
          if (!mapboxgl.supported()) {
            return;
          }

          // Set access token.
          mapboxgl.accessToken = drupalSettings.mapbox_block.access_token;

          // Fix map/canvas size.
          let mapbox = context.querySelectorAll('.c-mapbox');
          if (mapbox) {
            function mapboxLayoutFix() {
              window.dispatchEvent(new Event('resize'));
            }
            let viewportChange = debounce(mapboxLayoutFix, 10);
            setTimeout(mapboxLayoutFix, 1000);
            window.addEventListener('scroll', viewportChange);
          }

          // Loop over mapbox blocks via selector.
          $('.c-mapbox', context).once('mapbox_block').each(function () {

            let mapId = $(this).attr('id');
            if (!mapId || !drupalSettings.mapbox_block.maps[mapId]) {
              return;
            }

            let mapData = drupalSettings.mapbox_block.maps[mapId]
            let map = new mapboxgl.Map(mapData.options);

            // Disable zoom scroll.
            if (mapData.settings.disable_zoom_scroll) {
              map.scrollZoom.disable();
            }

            // Show controls.
            if (mapData.settings.show_controls) {
              map.addControl(new mapboxgl.NavigationControl());
            }

            // Markers.
            if (mapData.markers) {
              map.on("load", function () {
                map.addLayer({
                  "id": "points",
                  "type": "symbol",
                  "source": {
                    "type": "geojson",
                    "data": mapData.markers
                  },
                  "layout": {
                    "icon-image": "marker-15",
                    "text-field": "{name}",
                    "text-font": ["DIN Offc Pro Medium", "Arial Unicode MS Bold"],
                    "text-offset": [0, 0.6],
                    "text-anchor": "top"
                  }
                });
              });
            }
          });
        }
      }
    },
    detach: function (context) {
    }
  };
})(jQuery, Drupal, Drupal.debounce, drupalSettings);
