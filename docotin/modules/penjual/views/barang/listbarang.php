<?php
// var_dump($model); exit();
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

?>
<style type="text/css">
	.table tr td{
		text-align: left;
	}
</style>
<div class="content">
	<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2 style="text-align: center;">TABEL BARANG</h2>
		</br>
		<a href="/penjual/barang/tambah-barang" class="btn btn-primary" style="text-align: left;">Tambah Data</a>
		</br>
		</br>
			<div class="table-bordered">          
				<table class="table">
				<thead>
					<tr class="success">
						 <th>#</th>
						 <th>Barang</th>
						 <th>Nama Barang</th>
						 <th>Stok</th>
						 <th>Aksi</th>
					</tr>
				</thead>
				<?php 
				if(count($query)>0): ?>
				<?php foreach ($query as $queryy): ?> 
				<tbody>
						 <tr>
						   <td><?php echo $queryy->id_barang; ?></td>
						   <td style="width: 100px;"><?php echo Html::img($queryy->gambar_barang, ['width' => '100px'])?></td>
						   <td><?php echo $queryy->nama_barang; ?></td>
						   <td><?php echo $queryy->stok; ?></td>
						   <td>
						   </br>
						   <?=Html::a('Detail',['detail-barang','id'=>$queryy->id_barang],['class' => 'label label-primary'])?></br></br>
						   <?=Html::a('Edit',['edit-barang','id'=>$queryy->id_barang],['class' => 'label label-success'])?></br></br>
						   <?=Html::a('Delete',['detail-barang','id'=>$queryy->id_barang],['class' => 'label label-danger'])?>
						   </td>
						 </tr>
						<?php endforeach; ?>
						<?php else: ?>
							<tr>
								<td>Tidak ada Data</td>
							</tr>
						<?php endif; ?>
				</tbody>
				</table>
			</div>

	</div>
	</div>
</div>
	