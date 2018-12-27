<?php
/**
 * Created by PhpStorm.
 * User: vishal
 * Date: 6/10/18
 * Time: 11:13 PM
 */

use yii\helpers\Html;

?>

<div class="row text-center mt-0 <?= (isset($class))? $class : '' ?>" style="padding: 60px">
    <h1>Search 🔍</h1>
    <?= Html::beginForm(['site/movies'], 'get', ['style' => 'width: 100%']) ?>
        <div class="input-group mb-3">
            <?= Html::input('text', 'search', null, [
                'class' => 'form-control p-4', 
                'placeholder' => 'Movies & Series', 
                'aria-describedby' => 'search-btn',
                'required' => 'true'
                ]) ?>
            <div class="input-group-append">
                <?= Html::input('submit', 'submit', null , [
                    'class' => 'btn btn-lg btn-success',
                    'id' => 'search-btn'
                ]) ?>
            </div>
        </div>
    <?= Html::endForm() ?>
</div>