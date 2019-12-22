<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Links */

$this->title = 'Update Links: ' . $model->name;
?>
<div class="links-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
