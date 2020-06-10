<?php

namespace daxslab\assets;

class SimpleLineIconsAsset extends \yii\web\AssetBundle {
  
  /**
  * @inherit
  */
  public $sourcePath = '@npm/simple-line-icons';
  
  /**
  * @inherit
  */
  public $css = [
    'css/simple-line-icons.css',
  ];
}

