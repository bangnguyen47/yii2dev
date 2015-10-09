<?php

namespace app\modules\web;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\web\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
        \Yii::$app->view->theme = new \yii\base\Theme([
            'basePath' => '@web/themes/web',
            'baseUrl' => '@web/themes/web',
            'pathMap' => ['@app/modules/web/views' => '@web/themes/web/views'],
        ]);
    }
}
