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

 use yii\helpers\Html;
 use yii\widgets\LinkPager;

 $this->title='Movies & Series - Download your favourite movies and series';

?>

<!--<div style="text-align: center;">
    <h1>Movies & Series</h1>
    <h4  class="text-muted">HD Movies & Series at smallest file size 👻</h4>
    <hr width="200px">
</div>-->

<?= $this->render('components/_searchbox') ?>

    <div>
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            More Options
        </a>
    </div>
    <div class="collapse" id="collapseExample">
        <div class="">
            <?= $this->render('components/_languages') ?>

            <?= $this->render('components/_categories') ?>

            <?= $this->render('components/_tags') ?>
        </div>
    </div>

<nav class="mt-5">
  <ul class="pagination justify-content-center">
    <li class="page-item <?= ($page == 0)? "disabled" : "" ?>">
        <a class="page-link" href="?page=<?= $page - 1 ?>">Previous</a>
    </li>
    <?php for($i = 0; $i < $count; $i++): ?>
        <?php if((int)$page == $i): ?>
            <li class="page-item active" aria-current="page">
                <span class="page-link"><?= $i + 1 ?><span class="sr-only">(current)</span></span>
            </li>
        <?php else: ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?= $i ?>"><?= $i + 1 ?></a>
            </li>
        <?php endif; ?>
    <?php endfor; ?>
    <li class="page-item <?= ($page == $count - 1)? "disabled" : "" ?>">
        <a class="page-link" href="?page=<?= $page + 1 ?>">Next</a>
    </li>
  </ul>
</nav>


    <?php
    if($movies) {
        echo "<div class='row movies-row mt-5'>";
        foreach ($movies as $movie) {
            echo $this->context->renderPartial('components/_card', ['movie' => $movie]);
        }
        echo "</div>";
    }
    else {
        echo "<h1>Sorry!! Not available 😞</h1>";
        echo \yii\helpers\Html::a('See what we have', ['movies']);
    }
    ?>

<nav class="mt-5">
  <ul class="pagination justify-content-center">
    <li class="page-item <?= ($page == 0)? "disabled" : "" ?>">
        <a class="page-link" href="?page=<?= $page - 1 ?>">Previous</a>
    </li>
    <?php for($i = 0; $i < $count; $i++): ?>
        <?php if((int)$page == $i): ?>
            <li class="page-item active" aria-current="page">
                <span class="page-link"><?= $i + 1 ?><span class="sr-only">(current)</span></span>
            </li>
        <?php else: ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?= $i ?>"><?= $i + 1 ?></a>
            </li>
        <?php endif; ?>
    <?php endfor; ?>
    <li class="page-item <?= ($page == $count - 1)? "disabled" : "" ?>">
        <a class="page-link" href="?page=<?= $page + 1 ?>">Next</a>
    </li>
  </ul>
</nav>

<?= $this->render('components/_request_movie.php'); ?>