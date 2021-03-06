<?php 
/**
* Created by PhpStorm.
* User: vishal
* Date: 26/12/18
* Time: 5:56 PM
*/

use \app\models\Category;
use yii\helpers\Html;

$categories = Category::find()->all();

?>
<div class="container">
    <div class="row mt-0 text-center bg-dark justify-content-md-center p-3">
        <?php foreach ($categories as $category) : ?>
        <div class="col col-md-2">

            <?= Html::a($category->name, ['site/movies', 'category' => $category->name],
            $options = [
                'class' => 'btn btn-lg btn-outline-light',
                'style' => 'margin-top: 10px; margin-bottom: 10px;'
            ]) ?>
        </div>
        <?php endforeach; ?>
    </div>
</div>

