<?php
/**
* Created by PhpStorm.
* User: vishal
* Date: 5/10/18
* Time: 10:12 PM
*/

use yii\helpers\Html;
use app\models\Message;

$message = new Message();
?>

<div style="margin-top: 50px">
    <h1>Wanna watch a movie or series but not available ? 🤔</h1>
    <p  class="text-muted">Drop a message and we will make it available ASAP !! 😊
        Or drop a message if you wanna give us a feedback..
    </p>
    <?= Html::beginForm(['site/feed-back'], 'post') ?>
        <div class="form-group">
            <label for="email">Email address (Optional)</label>
            <!--<input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">-->
            <?= Html::input('email', 'email', null, [
                'id' => 'email',
                'class' => 'form-control',
                'placeholder' => 'name@example.com'
            ]) ?>
        </div>
        <div class="form-group">
            <label for="message">which movie or series u wanna see ?</label>
            <?= Html::textArea('message', null, [
                'id' => 'message',
                'class' => 'form-control',
                'required' => true,    
                'row' => '3'
            ]) ?>
        </div>
        <?= Html::submitButton('Send Message', ['class' => 'btn btn-outline-primary']) ?>
    <?= Html::endForm() ?>
</div>
