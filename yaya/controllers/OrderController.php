<?php

namespace app\controllers;

use app\models\Order;
use app\controllers\Yaya;


class OrderController extends YayaController
{
    public $modelClass = 'app\models\Order';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
