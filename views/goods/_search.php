<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BlogSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="goods-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'goods_id') ?>

    <?= $form->field($model, 'cat_id') ?>

    <?= $form->field($model, 'extend_cat_id') ?>

    <?= $form->field($model, 'goods_sn') ?>

    <?= $form->field($model, 'goods_name') ?>

    <?php // echo $form->field($model, 'click_count') ?>

    <?php // echo $form->field($model, 'brand_id') ?>

    <?php // echo $form->field($model, 'store_count') ?>

    <?php // echo $form->field($model, 'comment_count') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'market_price') ?>

    <?php // echo $form->field($model, 'shop_price') ?>

    <?php // echo $form->field($model, 'cost_price') ?>

    <?php // echo $form->field($model, 'keywords') ?>

    <?php // echo $form->field($model, 'goods_remark') ?>

    <?php // echo $form->field($model, 'goods_content') ?>

    <?php // echo $form->field($model, 'original_img') ?>

    <?php // echo $form->field($model, 'is_real') ?>

    <?php // echo $form->field($model, 'is_on_sale') ?>

    <?php // echo $form->field($model, 'is_free_shipping') ?>

    <?php // echo $form->field($model, 'on_time') ?>

    <?php // echo $form->field($model, 'sort') ?>

    <?php // echo $form->field($model, 'is_recommend') ?>

    <?php // echo $form->field($model, 'is_new') ?>

    <?php // echo $form->field($model, 'is_hot') ?>

    <?php // echo $form->field($model, 'last_update') ?>

    <?php // echo $form->field($model, 'goods_type') ?>

    <?php // echo $form->field($model, 'spec_type') ?>

    <?php // echo $form->field($model, 'give_integral') ?>

    <?php // echo $form->field($model, 'exchange_integral') ?>

    <?php // echo $form->field($model, 'sales_sum') ?>

    <?php // echo $form->field($model, 'prom_type') ?>

    <?php // echo $form->field($model, 'prom_id') ?>

    <?php // echo $form->field($model, 'shipping_area_ids') ?>

    <?php // echo $form->field($model, 'delete_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
