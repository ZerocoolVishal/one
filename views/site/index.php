<?php

/* @var $this yii\web\View */

$this->title = 'Home - prox download your entertainment';

$categories = \app\models\Category::find()->all();
?>

<div style="text-align: center;">
    <h1 class="title"><?=Yii::$app->name?></h1>
    <h4  class="text-muted">free movies and series 👻</h4>
    <hr width="200px">
</div>

<?php

    include "components/searchbox.php";

    include "components/torrent_download.php";

    if($categories) {
        foreach ($categories as $category) {

            echo "<div class='row'>";

                echo "<div class=\"category-title\"><h1>$category->name</h1></div>";
                echo "<div class=\"row\">";
                foreach ($category->contents as $movie) {?>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="<?=$movie->image?>" alt="Card image cap">
                            <div class="card-body">
                                <h2 class="card-title"><?=$movie->title?></h2><span class="badge badge-light"><?=$movie->language?></span>
                                <?php
                                foreach ($movie->contentTags as $contentTag) {
                                    $tag = $contentTag->tag0;
                                    echo "<span class=\"badge badge-pill badge-secondary movie-tags\">$tag->name</span>";
                                };
                                ?>
                                <p class="card-text movie-description"><?=$movie->description?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">

                                        <?php
                                        foreach($movie->links as $link) {
                                            $url = $link->url;
                                            $name = $link->name;
                                            if($name == "Trailer") {
                                                echo "<a class=\"btn btn-sm btn-outline-success\" href=\"$url\" target=\"_blank\">$name</a>";
                                                continue;
                                            }
                                            if($name == "Coming Soon") {
                                                echo "<button class=\"btn btn-sm btn-outline-secondary\">$name</button>";
                                                continue;
                                            }
                                            echo "<a class=\"btn btn-sm btn-outline-primary\" href=\"$url\" target=\"_blank\">$name</a>";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
                echo "</div>";

            echo "</div>";
        }
    }
?>

<?php include "components/request_movie.php"; ?>
