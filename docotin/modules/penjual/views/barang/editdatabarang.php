<?php
// var_dump($model); exit();
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="content">
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <?php $form =ActiveForm::begin(); ?>
      <!-- <form style="margin-top: 30px;"> -->
      <div class="form-group">
      <table border="0">
      <h2 style="text-align: center;">Form Update Barang</h2>
      <br/>
      <br/> 
          <tr>
              <td width="200px" height="50px"><label>Nama Barang</label></td>
              <td width="200px" height="50px"><?= $form->field($model,'nama_barang')->label(false)?></td>
          </tr>

          <tr>
              <td width="200px" height="50px"><label>Jumlah Barang</label></td>
              <td width="200px" height="50px"><?= $form->field($model,'stok')->label(false)?></td>
          </tr>

          <tr>
              <td width="200px" height="50px"><label>Harga</label></td>
              <td width="200px" height="50px"><?= $form->field($model,'harga_barang')->label(false)?></td>
          </tr>

          <tr>
              <td width="200px" height="50px"><label>Deskripsi</label></td>
              <td width="200px" height="50px"><?= $form->field($model,'deksripsi')->label(false)?></td>
          <tr>
              <td width="200px" height="50px"><label>Upload Barang</label></td>
              <div class="custom-file">
              <td width="200px" height="50px"><?= $form->field($model, 'upload_gambar')->fileInput()->label(false)?>
              </br><?php echo Html::img($model->gambar_barang, ['width' => '100px'])?></br></td>
              </div>
          </tr>
          
          <tr>
              <td width="200px" height="50px"></td>
              <div class="custom-file">
              <td width="200px" height="50px">
              </br></br>
              <?=Html::submitButton('Update Data',['class' => 'btn btn-primary'])?>
              <?=Html::a('Cancel', ['list-barang'], ['class' => 'btn btn-danger'])?>
              </td>
              </div>
          </tr>
      </table>
      </div>
      <?php ActiveForm::end(); ?>
      <!-- </form> -->
    </div>
    </div>

