<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<html lang="en"><head>
    <?php
            $form = ActiveForm::begin() ?>
  </head>
  <body>
    

    <!-- <input type="hidden" id="menu" value="flagging"> -->
<!--    <nav class="navbar navbar-dark">
            <div class="container-fluid"> -->
              <!-- Brand and toggle get grouped for better mobile display -->
            <!--   <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Docotel</a>
                <a class="navbar-brand" href="#">Login</a>
                <a class="navbar-brand" href="#">Register</a>
              </div> -->

    <!-- </nav> -->
    
        <div class="login-content">
            <div class="panel">
                <div class="panel-heading">LOGIN</div>
                <div class="panel-body">
                        <div class="login-form">
                            <table class="custom-table">
                                <tbody>
                                    <tr>
                                        <td><h5> <?= $form->field($model, 'username')->textInput() ?>
                                                    <?php $option = ['class'=>'form-control'];
                                                    echo Html::addCssStyle($option,'form-control');
                                                    ?>
                                        </h5></td>
                                    </tr>
                                    <tr>
                                        <td><h5> <?= $form->field($model, 'password')->passwordInput() ?>
                                                <?php $option = ['class'=>'form-control'];
                                                 echo Html::addCssStyle($option,'form-control');
                                                 ?>
                                        </h5></td>
                                    </tr>
                                    <tr>
                                        <td type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                                        
                                        <type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        <?=Html::a('Register',['/user/register'],['class'=>'btn btn-primary'])
                                        ?>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td><a href="">Forget Password ?</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
</body>
<?php ActiveForm::end() ?>
</html>