<?php

use app\models\Content;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Links */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="links-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->dropDownList([ 'Trailer' => 'Trailer', 'Download' => 'Download', '720p' => '720p', '1080p' => '1080p', 'UHD' => 'UHD', '4K' => '4K', 'Coming Soon' => 'Coming Soon', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->dropDownList(ArrayHelper::map(Content::find()->all(), 'id', 'title'), ['disabled' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
