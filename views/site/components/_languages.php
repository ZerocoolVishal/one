<?php 

    use yii\helpers\Html;

    $languages = app\models\Languages::find()->all();
?>

<div class="container">
    <div class="row mt-0 justify-content-md-center bg-secondary p-3">
        <?php foreach ($languages as $language) : ?>
            <div class="col col-md-2">

                <?= Html::a($language->name, ['site/movies', 'lang' => $language->name],
                    $options = [
                        'class' => 'btn btn-lg btn-dark btn-block',
                        'style' => 'margin-top: 10px; margin-bottom: 10px;'
                    ]) ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
