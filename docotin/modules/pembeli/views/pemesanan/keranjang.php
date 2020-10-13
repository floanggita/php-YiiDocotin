<?php
// var_dump($model); exit();
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

?>
	<div class="content">
    <div class= "box-masuk">
      <div class= "row">
        <div class="col-md-7">
          <div class="list-keranjang">
            
            <div class="row gap-bottom1">
                <div class="cancel-order"><i class="fas fa-times"></i></div>
              <div class="col-md-3">
                <div class="show-foto" > <?php echo Html::img($barang_karanjang->gambar_barang)?></div>
              </div>
              <div class= "col-md-6">
                  <div class="saldo_stock">
                      <p><?php echo $barang_karanjang->nama_barang; ?></p>
                      <p>Rp.<?php echo $barang_karanjang->harga_barang; ?></p>
                  </div>
              </div>
              <div class= "col-md-3">
                  <div class="saldo_docotin">
                      <div class= "form-input"><input type="number" class="form-control" id="inputEmail3" value="3"></div> 
                  </div>
              </div>
            </div>
          </div>
          <div>
         
        </div>
      </div>
        <div class="col-md-5">
          <div class="panel-total">
          <div class="panel">
            <div class="panel-header">Total Belanja Kamu</div>
<!--             <p>Mie Indomie Saus Eropa</p>
            <p>Rp 10.000 x 3 = Rp 30.000</p> -->
            <p>Mie</p>
            <p>Rp 10.000 x 3 = Rp 30.000</p>
            <h5 class="total-keseluruhan"> Total Keseluruhan<span id="count"></span></h5>
            <h5 class="total"> <span id="count">Rp 30.000</span></h5>
            <br><br>
            <a href="/pembeli/pemesanan/detail-data"><button type="button" class="btn btn-primary">Beli</button></a>
            <button type="button" class="btn btn-success">Hapus Keranjang</button>
            <br><br>  
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
    