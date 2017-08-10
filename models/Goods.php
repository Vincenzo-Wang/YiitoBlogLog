<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%goods}}".
 *
 * @property integer $goods_id
 * @property integer $cat_id
 * @property integer $extend_cat_id
 * @property string $goods_sn
 * @property string $goods_name
 * @property integer $click_count
 * @property integer $brand_id
 * @property integer $store_count
 * @property integer $comment_count
 * @property integer $weight
 * @property string $market_price
 * @property string $shop_price
 * @property string $cost_price
 * @property string $keywords
 * @property string $goods_remark
 * @property string $goods_content
 * @property string $original_img
 * @property integer $is_real
 * @property integer $is_on_sale
 * @property integer $is_free_shipping
 * @property integer $on_time
 * @property integer $sort
 * @property integer $is_recommend
 * @property integer $is_new
 * @property integer $is_hot
 * @property integer $last_update
 * @property integer $goods_type
 * @property integer $spec_type
 * @property integer $give_integral
 * @property integer $exchange_integral
 * @property integer $sales_sum
 * @property integer $prom_type
 * @property integer $prom_id
 * @property string $shipping_area_ids
 * @property integer $delete_time
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_id', 'extend_cat_id', 'click_count', 'brand_id', 'store_count', 'comment_count', 'weight', 'is_real', 'is_on_sale', 'is_free_shipping', 'on_time', 'sort', 'is_recommend', 'is_new', 'is_hot', 'last_update', 'goods_type', 'spec_type', 'give_integral', 'exchange_integral', 'sales_sum', 'prom_type', 'prom_id', 'delete_time'], 'integer'],
            [['market_price', 'shop_price', 'cost_price'], 'number'],
            [['goods_content'], 'string'],
            [['goods_sn'], 'string', 'max' => 60],
            [['goods_name'], 'string', 'max' => 120],
            [['keywords', 'goods_remark', 'original_img', 'shipping_area_ids'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_id' => '商品id',
            'cat_id' => '分类id',
            'extend_cat_id' => '扩展分类id',
            'goods_sn' => '商品编号',
            'goods_name' => '商品名称',
            'click_count' => '点击数',
            'brand_id' => '品牌id',
            'store_count' => '库存数量',
            'comment_count' => '商品评论数',
            'weight' => '商品重量克为单位',
            'market_price' => '市场价',
            'shop_price' => '本店价',
            'cost_price' => '商品成本价',
            'keywords' => '商品关键词',
            'goods_remark' => '商品简单描述',
            'goods_content' => '商品详细描述',
            'original_img' => '商品上传原始图',
            'is_real' => '是否为实物',
            'is_on_sale' => '是否上架',
            'is_free_shipping' => '是否包邮0否1是',
            'on_time' => '商品上架时间',
            'sort' => '商品排序',
            'is_recommend' => '是否推荐',
            'is_new' => '是否新品',
            'is_hot' => '是否热卖',
            'last_update' => '最后更新时间',
            'goods_type' => '商品所属类型id，取值表goods_type的cat_id',
            'spec_type' => '商品规格类型，取值表goods_type的cat_id',
            'give_integral' => '购买商品赠送积分',
            'exchange_integral' => '积分兑换：0不参与积分兑换，积分和现金的兑换比例见后台配置',
            'sales_sum' => '商品销量',
            'prom_type' => '0 普通订单,1 限时抢购, 2 团购 , 3 促销优惠,4预售',
            'prom_id' => '优惠活动id',
            'shipping_area_ids' => '配送物流shipping_area_id,以逗号分隔',
            'delete_time' => 'Delete Time',
        ];
    }
}
