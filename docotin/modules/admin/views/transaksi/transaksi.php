<?php

use yii\widgets\ActiveForm;
use yii\web\Controller;
use yii\helpers\html;
use yii\widgets\LinkPager;
$this->title = 'LIST VA';

?>

<html lang="en"><head>
  </head>
  <body>
  <input type="hidden" id="menu" value="detail-va">
    <div class="sidebar">
      <ul>
        <a href="flagging.html"><li data-target="flagging"><?= Html::a('Flagging',['flagging']) ?></li></a>
        <a href="transaksi.html"><li data-target="transaksi">Transaksi</li></a>
        <a href="history_transaksi.html"><li data-target="history_transaksi">History Transaksi</li></a>
        <a href="user.html"><li data-target="user">User</li></a>
        <a href="list_va.html"><li data-target="detail-va" class="active">List VA</li></a>
      </ul>
    </div>
  
  <div class="content">
    <div class="panel">
      <div class="panel-heading">TABEL FLAGGING</div>
    </div>
    
    <table class="table table-bordered">
      <?php //($searchModel);exit; ?>
      <?= $this->render('_search',['model'=>$searchModel]); ?>
      <tbody><tr class="success">
        <td>No VA</td>
        <td>Jenis</td>
        <td>Pengguna</td>
        <td>Status</td>
        <td>Aksi</td>
      </tr>
      <?php if(count($models ) > 0): ?>
        <?php foreach($models as $model):?>
      <tr>
        <td><?= $model->id_topup ?></td>
        <td>top-up</td>
        <td><?= $model->backedUser->nama_lengkap ?></td>
        <td><?= $model->statusName ?></td>
        <td><?=Html::a('detail',['detail','id'=>$model->id_topup])?></td>

      </tr>

      <?php endforeach ; ?>
      <?php //var_dump($pages);exit; ?>
        <?php endif; ?>
    </tbody>
  </table>
      <?= LinkPager::widget([
      'pagination' => $pages,
      //'nextPageLabel'=> 'next',
      ]); ?>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="../scripts/main.js"></script>  
</body>
</html>