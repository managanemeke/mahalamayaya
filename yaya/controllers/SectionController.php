<?php

namespace app\controllers;
use app\models\Section;
use app\controllers\Yaya;

class SectionController extends YayaController
{
    public $modelClass = 'app\models\Section';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionFind($provider_id)
    {
        $result = Section::find()
            ->where(['provider_id' => $provider_id])
            ->all();
        return $result;
    }

}
