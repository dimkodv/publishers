<?php

namespace app\assets;

use yii\web\AssetBundle;

class OwlCarouselAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        'plugins/owl/owl.carousel.min.js',
    ];
    public $css = [
        'plugins/owl/owl.carousel.min.css',
    ];
    public $depends = [
        'app\assets\AppAsset'
    ];
}
