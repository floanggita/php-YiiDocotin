<?php
use yii\widgets\ActiveForm;
use yii\web\Controller;
use app\models\Transaksi;
use yii\helpers\html;

$this->title = 'TOP UP';

?>
<!--<div class="site-index"> -->

    <?php// $form = ActiveForm::begin(); ?>

    <?//= $form->field($model, 'jumlah_saldo') ?>

    <!-- <div class="form-group"> -->
        <!-- // Html::submitButton('Save', ['class' => 'btn btn-success'])  -->
    <!-- </div> -->

    <?//php ActiveForm::end(); ?>

<!-- </div> -->
<html lang="en">
  <body>
      <div class="sidebar">
      <ul>
        <a href="masuk_keranjang.html"><li data-target="keranjang">Keranjang</li></a>
        <a href="list_pemesanan.html"><li data-target="list_pesanan">List Pesanan</li></a>
        <a href="profile.html"><li data-target="profile" class="active">Profile</li></a>
        <a href="user.html"><li data-target="menu_lainnya">Menu Lainnya</li></a>
      </ul>
    </div>
  
  <!-- modal content here -->
  <!-- Modal -->
<div class="modal fade" id="top_up" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <?php ActiveForm::begin(['action'=>\yii\helpers\Url::to(['transaksi/tambah'])]); ?>
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title centered" id="myModalLabel"><strong>Pilih Jenis Top Up</strong></h4>
        </div>
        <div class="modal-body">
          <input type="text" name="Transaksi[jumlah_saldo]" id="nilai_topup" style="visibility: hidden;">
          <div class="radio"><td width="200px"><label><input type="radio" name="Transaksi[id_bank]" value="1" checked>BNI</label></td></div>
          <div class="radio"><td width="200px"><label><input type="radio" name="Transaksi[id_bank]" value="2" checked>BCA</label></td></div>
          <div class="radio"><td width="200px"><label><input type="radio" name="Transaksi[id_bank]" value="3" checked>Mandiri</label></td></div> 
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <!-- <a href="detail_top_up.html"> -->
             <?= Html::submitButton('TOP-UP',['class'=>'btn btn-primary','id'=>'submitTopup']);?>
            <!-- <button type="button" class="btn btn-primary" id="submitTopup">Next</button> -->
          <!-- </a> -->
        </div>
      </div>
    </div>
    <?php ActiveForm::end() ?>
  </div>


  <!-- modal content here -->
  <!-- Modal -->
  <div class="modal fade" id="list_top_up" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title centered" id="myModalLabel"><strong>Perhatian !!!</strong></h4>
          </div>
          <div class="modal-body">
            Data anda belum Lengkap!! Lengkapi biodata untuk melakukan Top Up
          </div>
          <div class="modal-footer">
            <a href="profile.html"><button type="button" class="btn btn-primary">Close</button></a>
          </div>
        </div>
      </div>
    </div>

    
  <div class="content">
    <p style="text-align: center; font-size: 3rem;">Profil Pengguna</p>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">User</h3>
      </div>
      <div class="panel-body">
       <div class="panel">
        <div class="panel-body">
          <form class="form-horizontal">
            <div class="login-form">
              <table class="custom-table">
                <tbody>
                  <tr class="success">
                    <td><h5> <div class="register">Username</h5></td></div>
                    <td><h5> <div class="register"><?= $model->nama_lengkap?></h5></td></div>
                  </tr>
                  <tr>
                    <td><h5> <div class="register">Email</h5></td></div>
                    <td><h5> <div class="register"><?= $model->email ?></h5></td></div>
                  </tr>
                  <tr>
                    <td><h5> <div class="register">Password</h5></td></div>
                    <td><input type="password" class="form-control" id="inputEmail3"></td>
                  </tr>
                  <tr>
                    <td><h5> <div class="register">Repassword</h5></td></div>
                    <td><input type="password" class="form-control" id="inputEmail3"></td>
                  </tr>
                  <tr>
                </tbody>
              </table>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Biodata</h3>
      </div>
      <div class="panel-body">
        <div class="panel-body">
            <div class="panel">
              <div class="panel-body">
                  <div class="login-form">
                  <div class= "saldo-btn">
                    <!-- Button trigger modal -->
                      <button type="button" class="btn btn-success" name="topUp" id="topUp" value="saldo">
                      Top Up</button>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#list_top_up">
                      List Top Up </button></a>
                  </div>

                    <div class="top-up" data-toggle="buttons">
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#top_up">
                        <input type="radio" data-target="#top_up" class="nilai" data-toggle="modal" name="transaksi" id="option1" value="50000"> 50.000
                      </button>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#top_up">
                        <input type="radio" data-target="#top_up" class="nilai" data-toggle="modal" name="transaksi" id="option2" value="100000"> 100.000
                      </button>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#top_up">
                        <input type="radio" data-target="#top_up" class="nilai" data-toggle="modal" name="transaksi" id="option3" value="150000">150.000
                      </button>
                    </div>   
                      <!-- <div class="top-up">
                        <label class="btn btn-warning">
                            <input type="radio" data-toggle="modal" data-target="#top_up">Rp. 50.000</input>
                        </label>
                        <label class="btn btn-warning">
                            <input type="radio" data-toggle="modal" data-target="#top_up">Rp.100.000</input>
                        </label>
                        <label class="btn btn-warning">
                            <input type="radio" data-toggle="modal" data-target="#top_up">Rp. 150.000</input>
                        </label>
                      </div> -->
                        <?php ActiveForm::begin(['action'=>\yii\helpers\Url::to(['user/update','id'=>$model->id_user])]); ?>
                      <table class="custom-table">
                        <?php if (yii::$app->session->hasFlash('message')): ?>
                        <div class="alert alert-dismissible alert-success">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?= yii::$app->session->getFlash('message');?>
                        </div>
                        <?php endif; ?>
                      <tbody>
                        <div class= "form-biodata">
                        <tr>
                          <td><h5> <div class="register">Saldo</h5></td></div>
                          <td><h5> <div class="register"><?=$model->saldo; ?>
                          </h5></td></div>
                        </tr>
                        <tr>
                          <td><h5> <div class="register">Nama Lengkap</h5></td></div>
                          <td id="inputEmail3"><?= Html::textInput('BackedUser[nama_lengkap]',$model->nama_lengkap,['class'=>'form-control']) ?></td>
                        </tr>
                        <tr>
                          <td ><h5> <div class="register">No HP</h5></td></div>
                          <td colspan="2" id="inputEmail3"><?= Html::textInput('BackedUser[no_hp]',$model->no_hp,['class'=>'form-control']) ?></td>
                        </tr>
                        <tr>
                          <td><h5> <div class="register">lantai</h5></td></div>
                          <td><h5> <div class="register"><?= $model->lantai ?></h5></td></div>
                        </tr>
                        <tr>
                          <td></td>
                          <td>
                            <!-- <button type="button" class="btn btn-primary">Ubah</button> -->
                            <?= Html::submitButton('Ubah',['class'=>'btn btn-primary']);?>
                            <button type="button" class="btn btn-success">Cancel</button>
                          </td>
                        </tr>
                      </div>
                      </tbody>
                    </table>
                        <?php ActiveForm::end()?>
                  </div>
              </div>
            </div>
            </div>
      </div>
    </div>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="../scripts/main.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.top-up').hide()         

      $('#topUp').on('click', function() {
        $('.top-up').toggle()
        // alert('hallo')
      });
      $('#submitTopup').on('click', function(){
        $('#nilai_topup').val($(".nilai:checked").val());
        console.log($(this));
      }); 
    });
  </script>  

</body>

</html>
