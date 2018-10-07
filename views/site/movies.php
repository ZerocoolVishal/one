<?php
/**
 * Created by PhpStorm.
 * User: vishal
 * Date: 5/10/18
 * Time: 7:00 PM
 */

$this->title='One - Download your favourite movies and series';
?>

<div style="text-align: center;">
    <h1>Movies & Series</h1>
    <h4  class="text-muted">free movies and series 👻</h4>
    <hr width="200px">
</div>

<div class="row movies-row" style="margin-top: 50px">

    <?php
    if($movies) {
        foreach ($movies as $movie) {?>

            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="<?=$movie->image?>" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title"><?=$movie->title?></h2>
                        <p class="card-text"><?=$movie->description?></p>
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
    }
    else {
        echo "<h1>Sorry!! Not available 😞</h1>";
        echo \yii\helpers\Html::a('See what we have', ['movies']);
    }

    include "components/request_movie.php";

    ?>

</div>