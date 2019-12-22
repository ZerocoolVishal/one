<?php 

    use yii\helpers\Html;

    $languages = app\models\Languages::find()->all();
?>

<div class="row mt-0 text-center bg-success">
    <?php foreach ($languages as $language) : ?>
    <div class="col">
        
        <?= Html::a($language->name, ['site/movies', 'lang' => $language->name], 
        $options = [
            'class' => 'btn btn-lg btn-dark btn-block',
            'style' => 'margin-top: 10px; margin-bottom: 10px;'
        ]) ?>
    </div>
    <?php endforeach; ?>
</div>