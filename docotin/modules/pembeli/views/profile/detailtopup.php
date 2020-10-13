<?php
use yii\widgets\ActiveForm;
use yii\web\Controller;
use app\models\Transaksi;
use yii\helpers\html;

$this->title = 'DETAIL TOP UP';

?>
<html lang="en">
	<div class="content">
		<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="panel">
			<div class="panel-heading">DETAIL TOP UP</div>
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
								<td><?= $user->nama_lengkap ?></td>
							</tr>
							<tr>
								<td>Email Pembeli</td>
								<td>:</td>
								<td><?= $user->email ?></td>
							</tr>
							<tr>
								<td>Tanggal Pengajuan</td>
								<td>:</td>
								<td><?= $detail->tanggal ?></td>
							</tr>
							<tr>
								<td>Jumlah Top up</td>
								<td>:</td>
								<td>Rp <?= $detail->jumlah_saldo ?></td>
							</tr>
						</tbody>
					</table>
			</div>
			<?= Html::a('Kembali', ['create'], ['class'=>'btn btn-primary']) ?>
				<!-- <a href="profile.html"><button class="btn btn-primary" type="button">Kembali</button></a> -->
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