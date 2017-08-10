<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BlogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Goods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Goods', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'goods_id',
            'cat_id',
            'extend_cat_id',
            'goods_sn',
            'goods_name',
            // 'click_count',
            // 'brand_id',
            // 'store_count',
            // 'comment_count',
            // 'weight',
            // 'market_price',
            // 'shop_price',
            // 'cost_price',
            // 'keywords',
            // 'goods_remark',
            // 'goods_content:ntext',
            // 'original_img',
            // 'is_real',
            // 'is_on_sale',
            // 'is_free_shipping',
            // 'on_time:datetime',
            // 'sort',
            // 'is_recommend',
            // 'is_new',
            // 'is_hot',
            // 'last_update',
            // 'goods_type',
            // 'spec_type',
            // 'give_integral',
            // 'exchange_integral',
            // 'sales_sum',
            // 'prom_type',
            // 'prom_id',
            // 'shipping_area_ids',
            // 'delete_time:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
