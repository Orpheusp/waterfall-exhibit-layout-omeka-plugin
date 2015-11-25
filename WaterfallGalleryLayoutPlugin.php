<?php
  class WaterfallGalleryLayoutPlugin extends Omeka_Plugin_AbstractPlugin {
    protected $_filters = array('exhibit_layouts');

    public function filterExhibitLayouts($layouts) {
      $layouts['waterfall_gallery'] = array(
        'name' => 'Waterfall Gallery',
        'description' => 'A waterfall-like exhibit gallery layout.'
      );
      return $layouts;
    }
  }
?>
