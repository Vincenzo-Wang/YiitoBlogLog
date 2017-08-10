<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Goods */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="goods-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cat_id')->textInput() ?>

    <?= $form->field($model, 'extend_cat_id')->textInput() ?>

    <?= $form->field($model, 'goods_sn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goods_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'click_count')->textInput() ?>

    <?= $form->field($model, 'brand_id')->textInput() ?>

    <?= $form->field($model, 'store_count')->textInput() ?>

    <?= $form->field($model, 'comment_count')->textInput() ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'market_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shop_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cost_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goods_remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goods_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'original_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_real')->textInput() ?>

    <?= $form->field($model, 'is_on_sale')->textInput() ?>

    <?= $form->field($model, 'is_free_shipping')->textInput() ?>

    <?= $form->field($model, 'on_time')->textInput() ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'is_recommend')->textInput() ?>

    <?= $form->field($model, 'is_new')->textInput() ?>

    <?= $form->field($model, 'is_hot')->textInput() ?>

    <?= $form->field($model, 'last_update')->textInput() ?>

    <?= $form->field($model, 'goods_type')->textInput() ?>

    <?= $form->field($model, 'spec_type')->textInput() ?>

    <?= $form->field($model, 'give_integral')->textInput() ?>

    <?= $form->field($model, 'exchange_integral')->textInput() ?>

    <?= $form->field($model, 'sales_sum')->textInput() ?>

    <?= $form->field($model, 'prom_type')->textInput() ?>

    <?= $form->field($model, 'prom_id')->textInput() ?>

    <?= $form->field($model, 'shipping_area_ids')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'delete_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
