<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\penjual\models\BarangCreate */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Barang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_barang',
            'nama_barang',
            'harga_barang',
            'gambar_barang:ntext',
            'stok',
            //'deksripsi:ntext',
            //'id_user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
