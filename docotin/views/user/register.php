<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use app\models\BackendUser;
use app\models\Grup;

$this->title = 'Register';
?>

<html lang="en"><head>
	<?php
			$form = ActiveForm::begin() ?>
			
  </head>
  <body>
	

	<!-- <input type="hidden" id="menu" value="flagging">
	<nav class="navbar navbar-dark">
			<div class="container-fluid">
			   Brand and toggle get grouped for better mobile display -->
			<!--   <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="">Docotel</a>
				<a class="navbar-brand" href="../site/login.php">Login</a>
				<a class="navbar-brand" href="#">Register</a>
			  </div> -->

<!-- 	</nav> -->
	 -->

	<div class="login-content">
			<div class="panel">
				<div class="panel-heading">REGISTER</div>
				<div class="panel-body">
					<form class="form-horizontal">
						<div class="login-form">
							<table class="custom-table">
								<tbody>
									<tr class="success">
										<div class="radio">
											<?php $cat=Grup::find()->all();
											$listData=ArrayHelper::map($cat,'id_grup','nama_grup');
											echo $form->field($model, 'id_grup')->radioList(
									        $listData,
									        ['prompt'=>'Select'],
									        ['width'=>'200px']
									        );?>
										</div>
									</tr>
								</tbody>
							</table>
							<div class="form-pembeli">
								<table>

									<tr>
										<td><h5> 
										<div class="register"><?= $form->field($model,'username');?>
										</div></h5></td>
									</tr>

										<tr>
										<td><h5> 
										<div class="register"><?= $form->field($model,'nama_lengkap');?>
										</div></h5></td>
									</tr>

									<tr>
										<td><h5> 
										<div class="register">
										<?= $form->field($model,'email'); ?>
										</div></h5></td>
									</tr>
									<tr>
										<td><h5>
										 <div class="register">
										 	<?= $form->field($model,'password')->passwordInput();?>	
										 </div></h5></td>
										
									</tr>
									<!-- <tr>
										<td><h5> <div class="register">Repassword</div></h5></td>
										<td><input type="password" class="form-control" id="inputEmail3"></td>
									</tr> -->
									<tr>
										<td><h5> <div class="register"><?= $form->field($model,'lantai');?>	
										</div></h5></td>
									</tr>
									<tr>
										<td><h5> <div class="register"><?= $form->field($model,'no_hp');?>
										</div></h5></td>
									</tr>
									<tr>
										<td></td>
										<td>
											<!-- <button class="" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> -->
					<?= Html::submitButton('REGISTER',['class'=>'btn btn-primary','type'=>'button','data-toggle'=>'collapse','data-target'=>'#collapseExample','aria-expanded'=>'false','aria-controls'=>'collapseExample"']);?>
														
												<!-- </button> -->
										</td>
									</tr>
									<tr>
										<td></td>
									</tr>
								</table>
							</div>
							<div class="form-penjual">
								<table>
									<tr>
										<td><h5> <div class="register">Username</div></h5></td> 
										<td><input type="text" class="form-control" id="inputEmail3"></td>
									</tr>
									<tr>
										<td><h5> <div class="register">Email Address</div></h5></td>
										<td><input type="text" class="form-control" id="inputEmail3"></td>
									</tr>
									<tr>
										<td><h5> <div class="register">Password</div></h5></td>
										<td><input type="password" class="form-control" id="inputEmail3"></td>
									</tr>
									<tr>
											<td><h5> <div class="register">Repassword</div></h5></td>
										<td><input type="password" class="form-control" id="inputEmail3"></td>
									</tr>
									<tr>
										<td><h5> <div class="register">NPWP Number</div></h5></td>
										<td><input type="number" class="form-control" id="inputEmail3"></td>
									</tr>
									<tr>
										<td><h5> <div class="register">No Handphone</div></h5></td>
										<td><input type="number" class="form-control" id="inputEmail3"></td>
									</tr>
									<tr>
										<td></td>
										<td><!-- 
											<button class="btn btn-primary " type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> -->
												<?= Html::submitButton('REGISTER',['class'=>'btn btn-primary']);?>
											</button>
										</td>
									</tr>
									<tr>
										<td></td>
									</tr>
								</table>
							</div>
						</div>
					</form>
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
			$('.form-penjual').hide()					

	 		$('input[name=optradio]').on('change', function() {
				values=$('input[name=optradio]:checked').val()
				if(values == "pembeli"){
					$('.form-pembeli').show()
					$('.form-penjual').hide()					
				} else {
					$('.form-pembeli').hide()
					$('.form-penjual').show()
				}
			});
				
		});
	</script>
</body>
<?php ActiveForm::end() ?>
</html>