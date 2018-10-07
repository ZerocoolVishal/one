<?php

namespace app\controllers;

use app\models\Content;
use app\models\Message;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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
        return $this->render('index');
    }

    public function actionMovies()
    {
        $req = Yii::$app->request->get();
        if(isset($req['search'])) {
            $data['movies'] = Content::find()->where(['title' => $req['search']])->all();
        }
        else {
            $data['movies'] = Content::find()->all();
        }
        return $this->render('movies', $data);
    }

    public function actionSearch()
    {
        return $this->render('search');
    }

    public function actionMessage()
    {
        $req = Yii::$app->request->get();
        if(isset($req['message'])) {

            $message = new Message();
            $message->email = $req['email'];
            $message->message = $req['message'];
            $res = $message->save();
            if($res) {
                echo "Thank You !! 😊🤩";
            }
            else {
                echo "Due to some problem your message was not able to send !!";
            }
        }
    }
}
