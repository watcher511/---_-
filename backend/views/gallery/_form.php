<?php

/**
 * Team:对影成三人队
 * By li xiang
 * to edit past
 */

use yii\helpers\Html;
use common\models\Gallery;

/* @var $this yii\web\View */
/* @var $model common\models\Gallery */
/* @var $form yii\widgets\ActiveForm */
/* @var $to string*/
/* @var $news_id integer*/
?>


<section class="section">

    <div class="card">
        <div class="card-body">
            <!-- General Form Elements -->
            <?php if($to === 'create'): ?>
                <h5 class="card-title"><b>新建展图</b></h5>
                <?= Html::beginForm('@web/index.php?r=gallery/create','post',['enctype' => 'multipart/form-data']) ?>
            <?php else: ?>
                <h5 class="card-title"><b>更新展图</b></h5>
                <?= Html::beginForm('@web/index.php?r=gallery/update' . '&id=' . $model->id,'post',['enctype' => 'multipart/form-data']) ?>
            <?php endif;?>
            <input type="hidden" name="is_create" value="true" />
            <input type="hidden" name="is_update" value="true" />
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="inputText" class="col-form-label">图片名</label>
                    <input type="text" class="form-control" name="news_title" value="<?=$model->name?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="inputPassword" class="col-form-label">图片简介</label>
                    <textarea class="form-control" style="height: 100px" name="news_abstract"><?=$model->details?></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="inputText" class="col-form-label">详细描述</label>
                    <textarea class="form-control" style="height: 250px" name="news_content"><?=$model->introduction?></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="inputText" class="col-form-label">标题</label>
                    <input type="text" class="form-control" name="news_title" value="<?=$model->title?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="inputDate" class="col-form-label">重量</label>
                    <input type="text" class="form-control" name="news_date" value="<?=$model->weight?>">
                </div>
                <div class="col-md-4">
                    <label for="inputText" class="col-form-label">亮相时间</label>
                    <input type="text" class="form-control" name="news_date" value="<?=$model->time?>">
                </div>
                <div class="col-md-4">
                    <label for="inputNumber" class="col-form-label">配图上传</label>
                    <input type="file" id="formFile" name="file" value="<?=$model->path?>">
                </div>
            </div>
            <!--                <div class="row mb-3">-->
            <!--                    <label for="inputTime" class="col-sm-2 col-form-label">Time</label>-->
            <!--                    <div class="col-sm-10">-->
            <!--                        <input type="time" class="form-control">-->
            <!--                    </div>-->
            <!--                </div>-->

            <div class="row mb-3">
                <div class="col-md-10">
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>
            </div>

            <?= Html::endForm() ?>
            </form>
        </div>
    </div>
</section>
