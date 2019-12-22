<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = "Admin"

?>
<?= $this->render('components/_navbar') ?>

<div class="mt-4">

    <?= $this->render('components/_messageTable',
        ['messages' => $messages,
            'count' => $count,
            'page' => $page]) ?>
</div>