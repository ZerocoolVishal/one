<?php
/**
 * Created by PhpStorm.
 * User: vishal
 * Date: 9/10/18
 * Time: 10:35 PM
 */
?>

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