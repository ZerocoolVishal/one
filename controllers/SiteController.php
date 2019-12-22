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
use app\models\ContactForm;
use app\models\Languages;
use yii\data\Sort;

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
        $size = 12;
        $offset = 0;
        $page = 0;

        $req = Yii::$app->request->get();

        $query = Content::find();

        if(isset($req['search'])) {
            $query = $query->andWhere(['title' => trim($req['search'])]);
        }

        if(isset($req['lang'])) {
            $language = Languages::find()->where(['name' => $req['lang']])->one();
            if($language) $query = $query->andWhere(['language_id' => $language->id]);
        }

        if(isset($req['category'])) {
            $category = Category::find()->where(['name' => $req['category']])->one();
            if($category) {
                $query = $query->andWhere(['category' => $category->id]);
            }
        }
        //@TODO: Implement this part properly 
        if(isset($req['tag'])) {

            $tag = $req['tag'];

            $query = Content::find()->from('content c')
                    ->innerJoin('contentTags ct', 'c.id = ct.content')
                    ->innerJoin('tags t', 'ct.tag = c.id')
                    ->where(['t.name' => $tag]);
            
        }

        if(isset($req['page'])) {
            $page = $req['page'];
            $offset = (int) $page * $size;
        }

        $count = ceil($query->count() / $size);

        $movies = $query->offset($offset)
                        ->limit($size)
                        ->orderBy(['launchYear' => SORT_DESC])
                        ->all();

        return $this->render('movies', [
            'movies' => $movies,
            'page' => $page,
            'count' => $count
        ]);
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

    public function actionFeedBack()
    {
        $message = new Message();
        //$req = Yii::$app->request->post();
        $req = ['Message' => Yii::$app->request->post()];
        if($message->load($req)) {
            if($message->validate()) {
                $message->save();
                return $this->render('thankyou');
            }
        }
        return "Message Not send";
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
