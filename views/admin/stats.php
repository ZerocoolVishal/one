<?php 
    $this->title = "Statistics";
?>

<?= $this->render('components/_navbar') ?>

<h1>Statistics</h1>

<?= $this->render('components/_statisticsTable', [
    'contents' => $contents,
    'count' => $count, 
    'page' => $page
]) ?>