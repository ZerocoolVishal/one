<?php

namespace app\controllers;

use app\models\Category;
use app\models\Content;
use app\models\Links;
use app\models\Message;
use app\models\Tags;
use Yii;
use yii\data\Pagination;
use yii\db\Query;
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
        elseif(isset($req['lang'])) {
            $data['movies'] = Content::find()->where(['language' => $req['lang']])->all();
        }
        elseif(isset($req['category'])) {
            $category = Category::find()->where(['name' => $req['category']])->one();
            if($category) {
                $data['movies'] = $category->contents;
            }
            else {
                $data['movies'] = Content::find()->all();
            }
        }
        elseif(isset($req['tag'])) {
            $res = (new Query())
                ->select(['id'])
                ->from('content')
                ->limit(3)
                ->all();

            echo "<pre>";
            print_r($res);
            echo "</pre>";
            return;
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

    public function actionClicks()
    {
        $req = Yii::$app->request->post();
        if(isset($req['url'])) {
            $link = Links::find()->where(['url' => urldecode($req['url'])])->one();
            if($link) {
                $link->clicks += 1;
                $res = $link->save();
                echo urldecode($req['url'])." $res";
            }
        }
    }

    public function actionDemo()
    {
        $query = Content::find();
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $models = $query->offset($pages->offset)
            ->limit(3)
            ->all();

        return $this->render('demo', [
            'models' => $models,
            'pages' => $pages,
        ]);
    }

    public function actionTest()
    {
        return $this->render('components/demo', ['name' => 'Vishal']);
    }
}
