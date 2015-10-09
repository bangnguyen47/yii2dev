<?php

namespace app\modules\web\controllers;

use app\modules\web\components\WebController;

class DefaultController extends WebController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
