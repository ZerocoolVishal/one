<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->title = 'Update Content: ' . $model->title;
?>

<?= $this->render('../admin/components/_navbar') ?>

<div class="content-update p-5 shadow">

    <h1 class="text-center mb-5"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
