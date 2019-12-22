<?php 
    $this->title = "Statistics";
?>

<?= $this->render('components/_navbar') ?>

<div class="mt-4">
    <h1>Statistics</h1>

    <?= $this->render('components/_statisticsTable', [
        'contents' => $contents,
        'count' => $count,
        'page' => $page
    ]) ?>
</div>