<?php

namespace app\controllers;

class WorkerController extends \yii\rest\ActiveController
{
    public $modelClass = 'app\models\Worker';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
