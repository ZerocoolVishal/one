<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contents';

$this->registerCss("
    .pagination li {
        color: black;
        padding: 10px;
        margin-right: 10px;
        margin-left; 10px;
    }
    
    .pagination a {
        color: black;
        
    }
    
    .active a {
        font-weight:bold;
    }
");
?>
<?= $this->render('../admin/components/_navbar') ?>

<div class="content-index mt-4">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Content', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'image',
                'format' => 'html',
                'value' => function ($data) {
                    return Html::img($data['image'],
                        ['width' => '70px']);
                },
            ],
            'title',
            'description',
            'date',
            //'category',
            //'language_id',
            //'launchYear',
            'timestamp',

            [
                    'class' => 'yii\grid\ActionColumn',
                    'buttons' => [
                            'view' => function($url, $model) {
                                return Html::a('View', ['movies/view', 'id' => $model->id]);
                            },
                            'update' => function($url, $model) {
                                return Html::a('Update', ['movies/update', 'id' => $model->id]);
                            },
                            'delete' => function($url, $model) {
                                return Html::a('Delete', ['movies/delete', 'id' => $model->id], [
                                        'data' => [
                                            'confirm' => 'Are you sure you want to delete this item?',
                                            'method' => 'post',
                                        ],]);
                            }
                    ]
            ],
        ],
    ]); ?>
</div>
