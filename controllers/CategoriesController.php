<?php


namespace app\controllers;


use yii\filters\ContentNegotiator;
use yii\rest\ActiveController;
use yii\web\Response;

class CategoriesController extends ActiveController
{
    public $modelClass = 'app\models\Categories';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator'] = [
            'class' => ContentNegotiator::className(),
            'formats' => [
                'application/json' => Response::FORMAT_JSON
            ]

        ];

        return $behaviors;
    }

}