<?php

/* @var $this yii\web\View */

$this->title = 'Home - prox download your entertainment';

$categories = \app\models\Category::find()->all();
?>

<?= $this->render('components/demo', ['name' => 'Vishal']) ?>

<div style="text-align: center;">
    <h1 class="title"><?=Yii::$app->name?></h1>
    <h4  class="text-muted">free movies and series 👻</h4>
    <hr width="200px">
</div>

<?php

    echo $this->context->renderPartial('components/searchbox');

    echo $this->context->renderPartial('components/torrent_download');

    if($categories) {
        foreach ($categories as $category) {

            echo "<div class='row'>";

                echo "<div class=\"category-title\"><h1>$category->name</h1></div>";
                echo "<div class=\"row\">";

                foreach ($category->contents as $movie) {
                    echo $this->context->renderPartial('components/_card', ['movie' => $movie]);
                }
                echo "</div>";

            echo "</div>";
        }
    }
?>

<?php include "components/request_movie.php"; ?>
