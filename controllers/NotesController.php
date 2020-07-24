<?php


namespace app\controllers;


use yii\filters\ContentNegotiator;
use yii\web\Response;

class NotesController extends \yii\rest\ActiveController
{

    public $modelClass = 'app\models\Notes';

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