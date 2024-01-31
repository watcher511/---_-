<?php

/**
 * Team:对影成三人队
 * By wukui
 * news source management homepage
 */

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\NewsSourceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News Sources';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-source-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create News Source', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'source_name',
            'source_introduction:ntext',
            'source_twitter',
            'source_facebook',
            'source_instagram',
            'source_photo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
