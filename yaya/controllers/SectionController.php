<?php

namespace app\controllers;

class SectionController extends \yii\rest\ActiveController
{
    public $modelClass = 'app\models\Section';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
