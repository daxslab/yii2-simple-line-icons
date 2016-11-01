<?php

namespace mimicreative\assets;

class SimpleLineIconsAsset extends \yii\web\AssetBundle {
  
  /**
  * @inherit
  */
  public $sourcePath = '@bower/simple-line-icons';
  
  /**
  * @inherit
  */
  public $css = [
    'css/simple-line-icons.css',
  ];
  
  /**
  * Initializes the bundle.
  * Set publish options to copy only necessary files (in this case css and font folders)
  */
  public function init() {
    parent::init();

    $this->publishOptions['beforeCopy'] = function ($from, $to) {
      return preg_match('%(/|\\\\)(fonts|css)%', $from);
    };
  }
}

