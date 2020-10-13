<?php

?>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

	<link rel="stylesheet" type="text/css" href="../styles/main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
		<div class="sidebar">
			<ul>
				<a href="keranjang.html"><li data-target="flagging" class="active">Keranjang</li></a>
				<a href="list_pesanan.html"><li data-target="list_pesanan">List Pesanan</li></a>
				<a href="profile.html"><li data-target="history_transaksi">profile</li></a>
				<a href="user.html"><li data-target="user">Menu Lainnya</li></a>
			</ul>
		</div>
	
	<div class="content">
    <div class="box-keranjang">
      <div class="row">
        <div class="col-md-4">
          <div class="show-foto" > <img src="../images/mie.png" alt=""></div>
          <div clss="row">
            <div class="col-md-4">
                <img src="../images/mie.png" class="list-img" alt="">
            </div>
            <div class="col-md-4">
                <img src="../images/mie.png" class="list-img" alt="">
            </div>
            <div class="col-md-4">
                <img src="../images/mie.png" class="list-img" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <h4>Mie Indomie Saus Eropa</h4>
          <h4>Rp. 10.000</h4>
          <p>Stock Tersedia 100</p>
          <div>
            <div class="row gap-bottom">
              <div class="col-md-3">
                penjual
              </div>
              <div class="col-md-9">
                pakde decotin
              </div>
            </div>
            <div class="row gap-bottom">
              <div class="col-md-3">
                Jumlah beli
              </div>
              <div class="col-md-3">
                <input type="number" class="form-control">
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
                <a href="masuk_keranjang.html"><button type="button" class="btn btn-primary">Beli</button></a> 
                <a href="masuk_keranjang.html"><button type="button" class="btn btn-success">Masukkan Keranjang</button></a>
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
            <img src="../images/mie.png" class="menu-pics" alt="">
            <div class="desc-menu">
              <p>Mie Indomie</p>
              <p>Rp. 10.000</p>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="menus">
            <img src="../images/mie.png" class="menu-pics" alt="">
            <div class="desc-menu">
              <p>Mie Indomie</p>
              <p>Rp. 10.000</p>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="menus">
            <img src="../images/mie.png" class="menu-pics" alt="">
            <div class="desc-menu">
              <p>Mie Indomie</p>
              <p>Rp. 10.000</p>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="menus">
            <img src="../images/mie.png" class="menu-pics" alt="">
            <div class="desc-menu">
              <p>Mie Indomie</p>
              <p>Rp. 10.000</p>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="menus">
            <img src="../images/mie.png" class="menu-pics" alt="">
            <div class="desc-menu">
              <p>Mie Indomie</p>
              <p>Rp. 10.000</p>
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

</body></html>