<?php
/**
 * Created by PhpStorm.
 * User: vishal
 * Date: 9/10/18
 * Time: 10:35 PM
 */

$this->registerCss("
    .shadow:hover{
        box-shadow: none !important;
    }
");
?>

<div class="col-md-3">
    <div class="card mb-4 shadow content-card">
        <img class="card-img-top" src="<?=$movie->image?>" alt="Card image cap">
        <div class="card-body">
            <a class="btn btn-outline-dark btn-block" data-toggle="collapse" href="#collapse<?=$movie->id?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                More info
            </a>
            <h4 class="card-title mt-3"><?=$movie->title?></h4>
            <div class="collapse" id="collapse<?=$movie->id?>">
                <span class="badge badge-light"><?=$movie->language?></span>
                <?php
                foreach ($movie->contentTags as $contentTag) {
                    $tag = $contentTag->tag0;
                    echo "<span class=\"badge badge-pill badge-secondary movie-tags\">$tag->name</span>";
                };
                ?>
                <p class="card-text movie-description mt-2"><?=$movie->description?></p>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="btn-group">
                    <?php
                    foreach($movie->links as $link) {
                        $url = $link->url;
                        $name = $link->name;

                        if($name == "Trailer") {
                            echo "<a class=\"btn btn-sm btn-outline-success\" onclick=\"linkckicked('".urlencode($url)."')\" href=\"$url\" target=\"_blank\">$name</a>";
                            continue;
                        }
                        if($name == "Coming Soon") {
                            echo "<button class=\"btn btn-sm btn-outline-secondary\">$name</button>";
                            continue;
                        }
                        echo "<a class=\"btn btn-sm btn-outline-primary\" onclick=\"linkckicked('".urlencode($url)."')\" href=\"$url\" target=\"_blank\">$name</a>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>