<?php

namespace app\controllers;
use app\models\Provider;
use app\controllers\Yaya;


class ProviderController extends YayaController
{
    public $modelClass = 'app\models\Provider';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGetActive()
    {
        $result = Provider::find()
            ->where(['is_active' => 1])
            ->one();
        return $result;
    }

}
