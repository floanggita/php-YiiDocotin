<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
    // var_dump($model);exit;
?>

<div class="data-search">

	  <?php $form = ActiveForm::begin([
        'action' => ['list'],
        'method' => 'get',
    ]); ?>
<div class="row">
    
	<?= $form->field($model,'id_topup',['options'=>['class'=>'col col-lg-4']]) ?> 
    <?= $form->field($model,'status_topup',['options'=>['class'=>'col col-lg-4']]) ?>
    <?= $form->field($model,'nama_lengkap',['options'=>['class'=>'col col-lg-4']]) ?>

</div>

	<div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Reset',['list'],['class'=>'btn btn-primary']) ?>
    </div>
  <?php ActiveForm::end(); ?>

</div>