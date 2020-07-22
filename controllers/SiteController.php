<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Page;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = Page::findOne(['title' => 'index']);

        return $this->render('index', compact('model'));
    }
    
    public function actionOurCompany()    
    {
        $model = Page::findOne(['title' => 'our company']);

        return $this->render('our-company');
    }

    public function actionService()
    {
        $model = Page::findOne(['title' => 'service']);

        return $this->render('service');
    }

    public function actionContact()
    {
        $model = Page::findOne(['title' => 'contact']);    

        return $this->render('contact');
    }
}
