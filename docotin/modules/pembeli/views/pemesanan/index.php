<?php
// var_dump($model); exit();
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<style>
  .form-search{
  width: 33.33%;
  margin-left: 535px;
  margin-top: 50px;
  /*margin:35px auto;*/
}
</style>
<div class="jumbotron jumbotron-fixed">
    <div class="form-search"> 
      <input type="text" class="form-control" id="inputEmail3">
      <br>
      <div class="button_cari"><button type="button" class="btn btn-danger">Cari</button></div> 
    </div>
  </div>
<div class="web-content">
    <div class="daftar-menu">
      <div class="content-title centered"><h1>Pilih Makan Siangmu</h1></div>
      <div class= "desc-menu"><p>Pengantaran Pesanan Cepat dapat di lakukan dalam waktu 1 Menit</p></div> 
      <div class="menu">
      <?php 
        if(count($query)>0): ?>
        <?php foreach ($query as $queryy): ?>

        <div class="list">
            <?php echo Html::a(Html::img($queryy->gambar_barang, ['class' => 'menu-pics']),['detail','id'=>$queryy->id_barang])?>
            <p><?php echo Html::a(($queryy->nama_barang),['detail','id'=>$queryy->id_barang])?></p>
            <p>Rp <?php echo $queryy->harga_barang; ?></p>
        </div>

        <?php endforeach; ?>
            <?php else: ?>
              <h4>
                Tidak ada Data
              </h4>
            <?php endif; ?>
        <!-- <div class="list">
          <img src="/images/mie.png" class="menu-pics" alt="">
            <p>Mie Indomie</p>
            <p>Rp. 10.000</p>
        </div> -->
        <!-- <div class="list">
          <img src="/images/mie.png" class="menu-pics" alt="">
            <p>Mie Indomie</p>
            <p>Rp. 10.000</p>
        </div>
        <div class="list">
          <img src="/images/mie.png" class="menu-pics" alt="">
            <p>Mie Indomie</p>
            <p>Rp. 10.000</p>
        </div>
        <div class="list">
          <img src="/images/mie.png" class="menu-pics" alt="">
            <p>Mie Indomie</p>
            <p>Rp. 10.000</p>
        </div>
        <div class="list">
          <img src="/images/mie.png" class="menu-pics" alt="">
            <p>Mie Indomie</p>
            <p>Rp. 10.000</p>
        </div>
        <div class="list">
          <img src="/images/mie.png" class="menu-pics" alt="">
            <p>Mie Indomie</p>
            <p>Rp. 10.000</p>
        </div>
        <div class="list">
          <img src="/images/mie.png" class="menu-pics" alt="">
            <p>Mie Indomie</p>
            <p>Rp. 10.000</p>
        </div>
        <div class="list">
          <img src="/images/mie.png" class="menu-pics" alt="">
            <p>Mie Indomie</p>
            <p>Rp. 10.000</p>
        </div>
        <div class="list">
          <img src="/images/mie.png" class="menu-pics" alt="">
            <p>Mie Indomie</p>
            <p>Rp. 10.000</p>
        </div>
        <div class="list">
          <img src="/images/mie.png" class="menu-pics" alt="">
            <p>Mie Indomie</p>
            <p>Rp. 10.000</p>
        </div>
        <div class="list">
          <img src="/images/mie.png" class="menu-pics" alt="">
            <p>Mie Indomie</p>
            <p>Rp. 10.000</p>
        </div> -->
      </div>
    </div>
  </div>