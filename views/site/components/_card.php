<?php
/**
 * Created by PhpStorm.
 * User: vishal
 * Date: 9/10/18
 * Time: 10:35 PM
 */

$this->registerCss("
    .content-card:hover{
       box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    }
    
    .content-card {
        border-radius: 10px;
    }
    
    .content-card img {
        border-radius: 10px 10px 0px 0px;
    }
");
?>

<div class="col-sm-6 col-md-4 col-lg-3">
    <div class="card mb-4 content-card">
        <a data-toggle="collapse" href="#collapse<?=$movie->id?>">
            <img class="card-img-top" src="<?=$movie->image?>" alt="Card image cap">
        </a>
        <div class="card-body">
            <!--<a class="btn btn-block text-dark" data-toggle="collapse" href="#collapse<?=$movie->id?>" role="button" aria-expanded="false" aria-controls="collapseExample">-->
            <div class="card-title mt-0"><b><?=$movie->title?></b> <span class="text-muted">(<?= $movie->launchYear ?>)</span></div>
            <!--</a>-->
            <div class="collapse" id="collapse<?=$movie->id?>">
                <span class="badge badge-light"><?=$movie->language->name?></span>
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