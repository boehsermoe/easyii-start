<?php

namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    use \yii\easyii\modules\content\api\controllers\ContentController;

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
}
