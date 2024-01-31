<?php

/**
 * Team:对影成三人队
 * By wukui
 * to create news
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\News */

$this->title = 'Create News';
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>



<?= $this->render('_form', [
    'model' => $model,
    'to' => 'create'
]) ?>
