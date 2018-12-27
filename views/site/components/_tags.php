<?php 

$tags = \app\models\Tags::find()->all();

?>
<div class="bg-light mt-5" style="text-align: center;">
    <h1 style="margin-bottom: 20px">Tags</h1>
    <?php
    foreach ($tags as $tag) {
        echo "<a href=\"?tag=$tag->name\"><span style='font-size: large; margin: 10px;' class=\"badge badge-info\">#$tag->name</span></a>";
    }
    ?>
</div>