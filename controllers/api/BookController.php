<?php

namespace app\controllers\api;

use yii\rest\Controller;
use Yii;
use app\models\Book;

class BookController extends Controller
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::class,
            'cors' => [
                'Origin' => ['*'],
                'Access-Control-Allow-Methods' => ['GET', 'POST'],
                'Access-Control-Allow-Headers' => ['*'],
            ],
        ];

        return $behaviors;
    }

    public function actionIndex()
    {
        return Book::find()->all();
    }

    public function actionCreate()
    {
        $model = new Book();
        $model->load(Yii::$app->request->post(), '');

        if ($model->save()) {
            return $model;
        }

        Yii::$app->response->statusCode = 400;
        return $model->errors;
    }
}