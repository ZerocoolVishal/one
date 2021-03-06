<?php

namespace app\controllers;

use app\models\ContentTags;
use app\models\Links;
use Yii;
use app\models\Content;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\Link;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MoviesController implements the CRUD actions for Content model.
 */
class MoviesController extends Controller
{
    public function beforeAction($action)
    {
        if(Yii::$app->user->isGuest) {
            return false;
        }

        return true;
    }


    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Content models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Content::find(),
            'pagination' => [
                'pageSize' => 5,
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Content model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {

        $dataProvider = new ActiveDataProvider([
            'query' => Links::find()->where(['content' => $id]),
        ]);

        return $this->render('view', [
            'model' => $this->findModel($id),
            'dataProvider' => $dataProvider
        ]);
    }

    /**
     * Creates a new Content model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Content();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Content model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Content model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        //Delete all Links
        $links = Links::find()->where(['content' => $id])->all();
        foreach ($links as $link) {
            $link->delete();
        }
        //Delete all Tags
        $conant_tags = ContentTags::find()->where(['content' => $id])->all();
        foreach ($conant_tags as $conant_tag) {
            $conant_tag->delete();
        }
        //Delete the Content
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Content model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Content the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Content::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Creates a new Links model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateLink()
    {

        $id = Yii::$app->request->get('id');

        $model = new Links();

        $model->content = $id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->content]);
        }

        return $this->render('../links/create', [
            'model' => $model,
        ]);
    }


    /**
     * Deletes an existing Links model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDeleteLink($id)
    {
        $link = Links::find()->where(['id' => $id])->one();
        $content = $link->content;
        $link->delete();

        return $this->redirect(['view', 'id' => $content]);
    }
}
