<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\StringHelper;

// @var $model \app\models\Article 

?>
<div>
    <a class="vw-25" href=" <?php echo Url::to(['/article/view', 'slug' => $model->slug]) ?> ">
        <h3><?php echo Html::encode($model->title) ?></h3>
    </a>
    <span class="text-muted text-right w-25">
        <small>Created at: <b><?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?></b>
        </small>
    </span>
    <span class="text-muted text-right">
        <small>By: <?php echo $model->createdBy->username ?>
        </small>
    </span>
    <br>
    <p> <?php echo StringHelper::truncateWords($model->getEncodedBody(), 40) ?></p>
    <hr>
</div>