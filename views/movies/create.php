<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->title = 'Create Content';
?>

<?= $this->render('../admin/components/_navbar') ?>

<div class="content-create shadow p-5 rounded">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
