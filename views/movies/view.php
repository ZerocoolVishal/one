<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->title = $model->title;
?>

<?= $this->render('../admin/components/_navbar') ?>

<div class="content-view p-5 shadow">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            [
                    'attribute' => 'image',
                    'format' => 'html',
                    'value' => function($data) {
                        return Html::img($data['image'], ['width' => '100px']);
                    }
            ],
            'title',
            'description',
            'date',
            [
                    'attribute' => 'category',
                    'format' => 'html',
                    'value' => function($data) {
                        return $data['category0']->name;
                    }
            ],
            [
                    'attribute' => 'language_id',
                    'format' => 'html',
                    'value' => function($data) {
                        return $data['language']->name;
                    },
            ],
            'launchYear',
            'timestamp',
        ],
    ]) ?>

</div>
