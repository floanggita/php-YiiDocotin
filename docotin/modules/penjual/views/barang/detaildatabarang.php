<?php
// var_dump($query); exit();
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<style type="text/css">
  table{
    border:1;
    border-color: black;
  }
</style>
<div class="content">
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <!-- <form style="margin-top: 30px;"> -->
      <div class="form-group">
      <table border="0">
      <h2 style="text-align: center;">Detail Barang</h2>
      <br/>
      <br/> 
          <tr>
              <td width="200px" height="50px"><label>Nama Barang</label></td>
              <td width="200px" height="50px"><?php echo $query->nama_barang; ?></td>
          </tr>

          <tr>
              <td width="200px" height="50px"><label>Jumlah Barang</label></td>
              <td width="200px" height="50px"><?php echo $query->stok; ?></td>
          </tr>

          <tr>
              <td width="200px" height="50px"><label>Harga</label></td>
              <td width="200px" height="50px"><?php echo $query->harga_barang; ?></td>
          </tr>

          <tr>
              <td width="200px" height="50px"><label>Deskripsi</label></td>
              <td width="200px" height="50px"><?php echo $query->deksripsi; ?></td>
          <tr>
              <td width="200px" height="50px"><label>Upload Barang</label></td>
              <div class="custom-file">
              <td width="200px" height="50px"><?php echo Html::img($query->gambar_barang, ['width' => '230px'])?></td>
              </div>
          </tr>

          <tr>
              <td width="200px" height="50px"></td>
              <div class="custom-file">
              <td width="200px" height="50px">
              </td>
              </div>
          </tr>
      </table>
      </div>

      <!-- </form> -->
    </div>
    </div>

