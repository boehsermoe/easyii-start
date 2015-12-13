<?php

namespace app\controllers;

use yii\easyii\modules\content\behaviors\ContentController;
use yii\web\Controller;

class SiteController extends Controller
{
    use ContentController;

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionHome()
    {
        if ($this->content == null) {
            throw new \yii\web\NotFoundHttpException(\Yii::t('easyii', 'Not found'));
        }

        return $this->renderContentView();
    }
}