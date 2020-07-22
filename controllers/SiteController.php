<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Page;
use app\models\ContactForm;

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
        $page = Page::findOne(['title' => 'index']);
        $blocks = $page->getExistingBlock();

        return $this->render('index', compact('page', 'blocks'));
    }
    
    public function actionOurCompany()    
    {
        $page = Page::findOne(['title' => 'our company']);

        return $this->render('our-company', compact('page'));
    }

    public function actionService()
    {
        $page = Page::findOne(['title' => 'service']);

        return $this->render('service', compact('page'));
    }

    public function actionContact()
    {
        $page = Page::findOne(['title' => 'contact']);    

        return $this->render('contact', compact('page'));
    }

    public function actionMail()
    {
        $page = Page::findOne(['title' => 'contact']); 
        $contactForm = new ContactForm();

        if (Yii::$app->request->isPost) {
            if ($contactForm->load(Yii::$app->request->post())) {
                $contactForm->contact('');
            }
        }

        return $this->redirect(['contact', compact('page', 'contactForm')]);
    }
}
