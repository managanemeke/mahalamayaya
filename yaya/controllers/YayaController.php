<?php

namespace app\controllers;
//
use yii\filters\Cors;


class YayaController extends \yii\rest\ActiveController
{
    public $enableCsrfValidation = false;

    private $_verbs = ['GET','POST','PATCH','PUT','DELETE'];
    
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['corsFilter'] = [
            'class' => Cors::class,
            'cors' => [
                'Origin' => ['*'],
                'Access-Control-Request-Method' => $this->_verbs,
                'Access-Control-Allow-Headers' => ['content-type'],
                'Access-Control-Request-Headers' => ['*'],
            ],
        ];

        return $behaviors;
    }

}
