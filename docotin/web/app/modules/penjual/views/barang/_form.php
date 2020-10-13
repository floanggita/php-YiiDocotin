<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\penjual\models\Barang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga_barang')->textInput() ?>

    <?= $form->field($model, 'gambar_barang')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'stok')->textInput() ?>

    <?= $form->field($model, 'deksripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
