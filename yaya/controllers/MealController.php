<?php

namespace app\controllers;

class MealController extends \yii\rest\ActiveController
{
    public $modelClass = 'app\models\Meal';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
