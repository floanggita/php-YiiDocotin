<?php
use yii\widgets\ActiveForm;
use yii\web\Controller;
use app\models\Transaksi;
use yii\helpers\html;

$this->title = 'DETAIL TOP UP';

?>
<html lang="en">
  <body>
  <input type="hidden" id="menu" value="detail-va">
    <div class="sidebar">
      <ul>
        <a href="flagging.html"><li data-target="flagging">Flagging</li></a>
        <a href="transaksi.html"><li data-target="transaksi">Transaksi</li></a>
        <a href="history_transaksi.html"><li data-target="history_transaksi">History Transaksi</li></a>
        <a href="user.html"><li data-target="user">User</li></a>
        <a href="list_va.html"><li data-target="detail-va" class="active">List VA</li></a>
      </ul>
    </div>
  
  <div class="content">
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
    <div class="panel">
      <div class="panel-heading">DETAIL VA</div>
      <div class="bordered-box">
        <div class="logo">
          <img src="http://beta.docotel.net/images/logo/docotel-logo.png" alt="" class="doco-logo">
        </div>
          <h4>DOCO CAFE DOCOTEL TEKNOLOGI</h4>
          <h5>TOP UP SALDO</h5>
            <table class="detail-va centered-table">
              <tbody><tr class="success">
                <td>Kode VA Debit</td>
                <td>:</td>
                <td><?= $detail->id_topup ?></td>
              </tr>
              <tr>
                <td>Nama Pembeli</td>
                <td>:</td>
                <td><?= $model->nama_lengkap ?></td>
              </tr>
              <tr>
                <td>Email Pembeli</td>
                <td>:</td>
                <td><?= $model->email ?></td>
              </tr>
              <tr>
                <td>Nomor HP Pembeli</td>
                <td>:</td>
                <td><?= $model->no_hp ?></td>
              </tr>
              <tr>
                <td>Tanggal Pemesanan</td>
                <td>:</td>
                <td><?= $detail->tanggal ?></td>
              </tr>
              <tr>
                <td>Jumlah Top up</td>
                <td>:</td>
                <td><?= $detail->jumlah_saldo ?></td>
              </tr>
              <tr>
                <td>Status</td>
                <td>:</td>
                <td><span class="saldo-bertambah"><?= $status->status ?></span></td>
              </tr>
              <tr>
                <td colspan="2" id="buton">
              <?php ActiveForm::begin(['action'=>\yii\helpers\Url::to(['detail','id'=>$detail->id_topup])]); ?>
                <?= Html::submitButton('Setujui',['class'=>'btn btn-success']) ?>
              <?php ActiveForm::end()?>
              </td>
              <td>
              <?php ActiveForm::begin(['action'=>\yii\helpers\Url::to(['tolak','id'=>$detail->id_topup])]); ?>      
                <?= Html::submitButton('Tolak',['class'=>'btn btn-danger']) ?>
                </td>
                <?php ActiveForm::end()?>
              </tr>
            </tbody></table>
      </div>
        <!-- <a href="list_va.html"><button class="btn btn-primary" type="button">Kembali</button></a> -->
        <?= Html::a('Kembali', ['list'], ['class'=>'btn btn-primary']) ?>
    </div>
    </div>
    </div>
  </div>

  <script type="text/javascript">
  </script>
</body></html>