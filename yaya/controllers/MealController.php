<?php

namespace app\controllers;
use app\models\Meal;
use app\controllers\Yaya;
//

class MealController extends YayaController
{
    public $modelClass = 'app\models\Meal';

    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionFind($section_id)
    {
        $result = Meal::find()
            ->where(['section_id' => $section_id])
            ->all();
        return $result;
    }

}
