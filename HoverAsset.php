<?php
/**
 * @license Copyright 2017 Thomas Varghese, MIT License
 * see https://github.com/numbervine/yii2-hover/blob/master/LICENSE
 */
namespace numbervine\hover;

use yii\web\AssetBundle;

class HoverAsset extends AssetBundle
{
  public $sourcePath = '@vendor/bower/hover/';

  public $css = [
    'css/hover-min.css'
  ];
}
