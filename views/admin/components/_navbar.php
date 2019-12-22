<?php 
    use yii\helpers\Html;
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <?= Html::a('Admin Dashboard', ['admin/'], ['class' => 'navbar-brand']) ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <?= Html::a('Statics', ['admin/stats'], ['class' => 'nav-item nav-link']) ?>
        <?= Html::a('Movies', ['movies/index'], ['class' => 'nav-item nav-link']) ?>
        <?= Html::a('Logout', ['admin/logout'], ['class' => 'nav-item nav-link']) ?>
    </div>
  </div>
</nav>
