<?php

/**
 * Team: 对影成三人队
 * By wukui
 * to search news comment
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\NewsCommentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-comment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'comment_id') ?>

    <?= $form->field($model, 'comment_news') ?>

    <?= $form->field($model, 'comment_user') ?>

    <?= $form->field($model, 'comment_content') ?>

    <?= $form->field($model, 'comment_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
