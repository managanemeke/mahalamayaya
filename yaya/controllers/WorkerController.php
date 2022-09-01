<?php

namespace app\controllers;

use app\models\Worker;
use app\controllers\Yaya;


class WorkerController extends YayaController
{
    public $modelClass = 'app\models\Worker';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
