<?php

namespace app\controllers;

use app\models\Message;
use app\models\LoginForm;
use app\models\Content;
use Yii;

class AdminController extends \yii\web\Controller
{
    public function actionIndex()
    {   

        if(!Yii::$app->user->isGuest) {
            $offset = 0;
            $page = 0;
            $limit = 10;

            $req = \Yii::$app->request->get();

            if (isset($req['page'])) {
                $page = $req['page'];
                $offset = $page * $limit;
            }

            $messages = Message::find()->orderBy(['timestamp' => SORT_DESC]);
            $count = ceil($messages->count() / $limit);
            $messages = $messages->offset($offset)->limit($limit);

            return $this->render('index', [
                'messages' => $messages->all(),
                'count' => $count,
                'page' => $page,
            ]);
        }

        return $this->redirect(['admin/login']);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['admin/']);
        }
        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionStats()
    {
        $size = 20;
        $offset = 0;
        $page = 0;

        $req = Yii::$app->request->get();
        if(isset($req['page'])) {
            $page = $req['page'];
        }

        $contents = Content::find()->offset($offset)
                                ->limit($size)
                                ->orderBy(['timestamp' => SORT_DESC])
                                ->all();

        return $this->render('stats', [
            'contents' => $contents,
            'count' => ceil(count($contents) / $size),
            'page' => $page
        ]);
    }
}
