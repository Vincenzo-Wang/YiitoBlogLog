<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Goods;

/**
 * BlogSearch represents the model behind the search form about `app\models\Goods`.
 */
class BlogSearch extends Goods
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id', 'cat_id', 'extend_cat_id', 'click_count', 'brand_id', 'store_count', 'comment_count', 'weight', 'is_real', 'is_on_sale', 'is_free_shipping', 'on_time', 'sort', 'is_recommend', 'is_new', 'is_hot', 'last_update', 'goods_type', 'spec_type', 'give_integral', 'exchange_integral', 'sales_sum', 'prom_type', 'prom_id', 'delete_time'], 'integer'],
            [['goods_sn', 'goods_name', 'keywords', 'goods_remark', 'goods_content', 'original_img', 'shipping_area_ids'], 'safe'],
            [['market_price', 'shop_price', 'cost_price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Goods::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'goods_id' => $this->goods_id,
            'cat_id' => $this->cat_id,
            'extend_cat_id' => $this->extend_cat_id,
            'click_count' => $this->click_count,
            'brand_id' => $this->brand_id,
            'store_count' => $this->store_count,
            'comment_count' => $this->comment_count,
            'weight' => $this->weight,
            'market_price' => $this->market_price,
            'shop_price' => $this->shop_price,
            'cost_price' => $this->cost_price,
            'is_real' => $this->is_real,
            'is_on_sale' => $this->is_on_sale,
            'is_free_shipping' => $this->is_free_shipping,
            'on_time' => $this->on_time,
            'sort' => $this->sort,
            'is_recommend' => $this->is_recommend,
            'is_new' => $this->is_new,
            'is_hot' => $this->is_hot,
            'last_update' => $this->last_update,
            'goods_type' => $this->goods_type,
            'spec_type' => $this->spec_type,
            'give_integral' => $this->give_integral,
            'exchange_integral' => $this->exchange_integral,
            'sales_sum' => $this->sales_sum,
            'prom_type' => $this->prom_type,
            'prom_id' => $this->prom_id,
            'delete_time' => $this->delete_time,
        ]);

        $query->andFilterWhere(['like', 'goods_sn', $this->goods_sn])
            ->andFilterWhere(['like', 'goods_name', $this->goods_name])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'goods_remark', $this->goods_remark])
            ->andFilterWhere(['like', 'goods_content', $this->goods_content])
            ->andFilterWhere(['like', 'original_img', $this->original_img])
            ->andFilterWhere(['like', 'shipping_area_ids', $this->shipping_area_ids]);

        return $dataProvider;
    }
}
