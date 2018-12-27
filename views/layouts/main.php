<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= Url::to('@web/images/icons/icon-512x512.png') ?>" type="image/gif">
    <link rel="manifest" href="manifest.json">
    <?= Html::csrfMetaTags() ?>
    <title> <?= Yii::$app->name ?> : <?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <header>
        <nav class="navbar navbar-expand-sm navbar-light">
            <a class="navbar-brand" href="<?= Url::to(['site/']) ?>"><?= Yii::$app->name ?></a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbars" style="">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <?=Html::a('Home', ['index'], ['class' => 'nav-link'])?>
                    </li>
                    <li class="nav-item">
                        <?=Html::a('Movies & Series', ['movies'], ['class' => 'nav-link'])?>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Yii::$app->name ?> <?= date('Y')?>, Made with ☕ & ❤️</p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
