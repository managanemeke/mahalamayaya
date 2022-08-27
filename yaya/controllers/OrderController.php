<?php

namespace app\controllers;

class OrderController extends \yii\rest\ActiveController
{
    public $modelClass = 'app\models\Order';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
