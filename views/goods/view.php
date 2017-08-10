<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Goods */

$this->title = $model->goods_id;
$this->params['breadcrumbs'][] = ['label' => 'Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->goods_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->goods_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'goods_id',
            'cat_id',
            'extend_cat_id',
            'goods_sn',
            'goods_name',
            'click_count',
            'brand_id',
            'store_count',
            'comment_count',
            'weight',
            'market_price',
            'shop_price',
            'cost_price',
            'keywords',
            'goods_remark',
            'goods_content:ntext',
            'original_img',
            'is_real',
            'is_on_sale',
            'is_free_shipping',
            'on_time:datetime',
            'sort',
            'is_recommend',
            'is_new',
            'is_hot',
            'last_update',
            'goods_type',
            'spec_type',
            'give_integral',
            'exchange_integral',
            'sales_sum',
            'prom_type',
            'prom_id',
            'shipping_area_ids',
            'delete_time:datetime',
        ],
    ]) ?>

</div>
