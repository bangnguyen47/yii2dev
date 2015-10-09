<?php

namespace app\assets;

use yii\web\AssetBundle;

class WebAsset extends AssetBundle
{
    public $basePath = '@web/themes/web';
    public $baseUrl = '@web/themes/web';
    public $css = [
        'assets/css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
