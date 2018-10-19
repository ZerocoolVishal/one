<?php
/**
 * Created by PhpStorm.
 * User: vishal
 * Date: 5/10/18
 * Time: 7:00 PM
 *
 * @var $movies : from siteController
 *
 */

$this->title='Movies & Series - Download your favourite movies and series';

$tags = \app\models\Tags::find()->all();
$categories = \app\models\Category::find()->all();

?>

<div style="text-align: center;">
    <h1>Movies & Series</h1>
    <h4  class="text-muted">free movies and series 👻</h4>
    <hr width="200px">
</div>

<?= $this->render('components/_searchbox') ?>

<div class="row mt-5 mb-5 text-center bg-dark" style="padding: 40px">
    <?php foreach ($categories as $category) { ?>
    <div class="col">
        <a class="btn btn-lg btn-outline-light" style="margin-top: 10px; margin-bottom: 10px;" href="?category=<?=$category->name?>">
            <?= $category->name ?>
            <!--<img height="100px" src="https://www.espectalium.com/wp-content/uploads/2014/12/bollywood-para-eventos-1.jpg" alt="Bollywood" class="rounded">-->
        </a>
    </div>
    <?php } ?>
</div>

<div class="bg-light" style="text-align: center; margin-top: 50px; padding: 30px">
    <h1 style="margin-bottom: 20px">Tags</h1>
    <?php
    foreach ($tags as $tag) {
        echo "<a href=\"?tag=$tag->name\"><span style='font-size: large; margin-right: 20px;' class=\"badge badge-info\">#$tag->name</span></a>";
    }
    ?>
</div>

<div class="row movies-row" style="margin-top: 50px">

    <?php
    if($movies) {
        foreach ($movies as $movie) {
            echo $this->context->renderPartial('components/_card', ['movie' => $movie]);
        }
    }
    else {
        echo "<h1>Sorry!! Not available 😞</h1>";
        echo \yii\helpers\Html::a('See what we have', ['movies']);
    }
    ?>

</div>

<?= $this->render('components/_request_movie.php'); ?>