<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Home - prox download your entertainment';

$categories = \app\models\Category::find()->all();
?>

<div style="text-align: center;">
    <?= Html::img('@web/images/zerocool-logo.png', ['alt' => 'My logo', 'width' => '130px']) ?>
    <h4  class="text-muted">HD Movies & Series at smallest file size 👻</h4>
    <hr width="200px">
</div>

<?php

    echo $this->render('components/_searchbox');

    echo $this->render('components/_torrent_download');

    if($categories) {
        foreach ($categories as $category) {

            echo "<div class='row' style='margin: 0px'>";

                echo "<div class=\"category-title\"><h1>$category->name ";
                echo Html::a('See All', ['site/movies', 'category' => $category->name], ['class' => 'btn btn-success']);
                echo "</h1></div>";
                echo "<div class=\"row\">";

                $i = 0;
                foreach ($category->contents as $movie) {
                    echo $this->render('components/_card', ['movie' => $movie]);
                    $i++;
                    if($i == 4) break;
                }
                echo "</div>";

            echo "</div>";
        }
    }

    echo $this->render("components/_request_movie.php");
?>