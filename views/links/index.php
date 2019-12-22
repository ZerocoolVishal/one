<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Links';
?>
<div class="links-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Links', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'url:url',
            'content',
            'clicks',
            [
                    'class' => 'yii\grid\ActionColumn',
                    'buttons' => [
                            'view' => function ($url, $model) {
                                return Html::a('View', ['links/view', 'id' => $model->id], ['class' => 'btn btn-sm btn-primary']);
                            },
                            'update' => function ($url, $model) {
                                return Html::a('Update', ['links/update', 'id' => $model->id], ['class' => 'btn btn-sm btn-success']);
                            },
                            'delete' => function ($url, $model) {
                                return Html::a('Delete', ['links/delete', 'id' => $model->id], ['class' => 'btn btn-sm btn-danger', 'data' => ['confirm' => 'Are you sure you want to delete this link ?', 'method' => 'post']]);
                            }
                    ]
            ],
        ],
    ]); ?>
</div>
