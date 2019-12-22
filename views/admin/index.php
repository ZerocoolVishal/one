<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = "Admin"

?>

<?= $this->render('components/_navbar') ?>

<?= $this->render('components/_messageTable', 
['messages' => $messages, 
'count' => $count, 
'page' => $page]) ?>