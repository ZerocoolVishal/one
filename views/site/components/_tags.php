<?php 

$tags = \app\models\Tags::find()->all();

?>
<div class="bg-light p-3" style="text-align: center;">
    <?php
    foreach ($tags as $tag) {
        echo "<a href=\"?tag=$tag->name\"><span style='font-size: large; margin: 10px;' class=\"badge badge-info\">#$tag->name</span></a>";
    }
    ?>
</div>