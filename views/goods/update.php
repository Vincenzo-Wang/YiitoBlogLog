<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Goods */

$this->title = 'Update Goods: ' . ' ' . $model->goods_id;
$this->params['breadcrumbs'][] = ['label' => 'Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->goods_id, 'url' => ['view', 'id' => $model->goods_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="goods-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
