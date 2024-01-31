<?php

/**
 * Team:对影成三人队
 * By li xiang
 * past events management homepage
 */


use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Gallery */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Past';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Event', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title:ntext',
            'name:ntext',
            //'details:ntext',
            'introduction:ntext',       
            //'weight:ntext',
            'time:ntext',
            'path',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
