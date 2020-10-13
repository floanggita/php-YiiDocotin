<?php
// var_dump($model); exit();
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

?>
<div class="content">
<!-- <div class="row"> -->
<!-- <div class="col-md-7"> -->
<div class="box-keranjang">
  <div class="row">
    <div class="col-md-4">
      <div class="show-foto" ><?php echo Html::img($barang->gambar_barang)?></div>
      <div clss="row">
        <div class="col-md-4">
            <?php echo Html::img($barang->gambar_barang,['class'=>'list-img'])?>
        </div>
        <div class="col-md-4">
            <?php echo Html::img($barang->gambar_barang,['class'=>'list-img'])?>
        </div>
        <div class="col-md-4">
            <?php echo Html::img($barang->gambar_barang,['class'=>'list-img'])?>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <h4><?php echo $barang->nama_barang; ?></h4>
      <h4>Rp. <?php echo $barang->harga_barang; ?></h4>
      <p>Stock Tersedia <?php echo $barang->stok; ?></p>
      <div>
        <div class="row gap-bottom">
          <div class="col-md-3">
            Penjual
          </div>
          <div class="col-md-9">
            <?php echo $penjual->username; ?>
          </div>
        </div>
        <div class="row gap-bottom">
          <div class="col-md-3">
            Jumlah beli
          </div>
          <div class="col-md-3">
            <input type="number" class="form-control" name="jumlahBeli" id="jumlahBeli" min="1" onkeyup="manage(this)">
          </div>
        </div>
        <div class="row gap-bottom">
          <div class="col-md-3">
            Catatan Barang
          </div>
          <div class="col-md-4">
            <textarea class="form-control" placeholder="Catatan untuk Penjual"></textarea>
          </div>
        </div>
        <div class="row gap-bottom">
          <div class="col-md-3"></div>
          <div class="col-md-4">
          
          <?= Html::a('Beli',['keranjang','id'=>$barang->id_barang],['class'=> 'btn btn-primary', 'name'=>'btnBeli', 'id'=>'btnBeli']); ?>

            
            <a href="/pembeli/pemesanan/keranjang"><button type="button" class="btn btn-success" id="btnKeranjang">Masukkan Keranjang</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="box-kecil">
  <div class="row">
    <div class="col-md-2">
      <div class="menus">
        <img src="/images/mie.png" class="menu-pics" alt="">
        <div class="desc-menu">
          <p>Mie Indomie</p>
          <p>Rp. 10.000</p>
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <div class="menus">
        <img src="/images/mie.png" class="menu-pics" alt="">
        <div class="desc-menu">
          <p>Mie Indomie</p>
          <p>Rp. 10.000</p>
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <div class="menus">
        <img src="/images/mie.png" class="menu-pics" alt="">
        <div class="desc-menu">
          <p>Mie Indomie</p>
          <p>Rp. 10.000</p>
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <div class="menus">
        <img src="/images/mie.png" class="menu-pics" alt="">
        <div class="desc-menu">
          <p>Mie Indomie</p>
          <p>Rp. 10.000</p>
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <div class="menus">
        <img src="/images/mie.png" class="menu-pics" alt="">
        <div class="desc-menu">
          <p>Mie Indomie</p>
          <p>Rp. 10.000</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- </div> -->
<!-- </div> -->
<script>
  var bt = document.getElementById('btnBeli');
  var btKeranjang = document.getElementById('btnKeranjang');
    if (<?php echo $barang->stok ?> == 0) {
      bt.setAttribute("disabled", "disabled");
      btKeranjang.setAttribute("disabled", "disabled");
    } else {
      bt.removeAttribute("disabled");
      btKeranjang.removeAttribute("disabled");
    }

  function manage(jumlahBeli) {
    if (jumlahBeli.value > <?php echo $barang->stok ?>) {
      bt.setAttribute("disabled", "disabled");
      btKeranjang.setAttribute("disabled", "disabled");
    } else {
      bt.removeAttribute("disabled");
      btKeranjang.removeAttribute("disabled");
    }  
    }
</script>