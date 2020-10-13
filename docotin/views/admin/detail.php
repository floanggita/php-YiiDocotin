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
								<td><?= $model->id_topup ?></td>
							</tr>
							<tr>
								<td>Nama Pembeli</td>
								<td>:</td>
								<td><?= $detail->nama_lengkap ?></td>
							</tr>
							<tr>
								<td>Email Pembeli</td>
								<td>:</td>
								<td><?= $detail->email ?></td>
							</tr>
							<tr>
								<td>Nomor HP Pembeli</td>
								<td>:</td>
								<td><?= $detail->no_hp ?></td>
							</tr>
							<tr>
								<td>Tanggal Pemesanan</td>
								<td>:</td>
								<td><?= $model->tanggal ?></td>
							</tr>
							<tr>
								<td>Jumlah Top up</td>
								<td>:</td>
								<td><?= $model->jumlah_saldo ?></td>
							</tr>
							<tr>
								<td>Status</td>
								<td>:</td>
								<td><span class="saldo-bertambah"><?= $status->status ?></span></td>
							</tr>			
						</tbody></table>
			</div>
				<!-- <a href="list_va.html"><button class="btn btn-primary" type="button">Kembali</button></a> -->
				<?= Html::a('Kembali', ['list'], ['class'=>'btn btn-primary']) ?>
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