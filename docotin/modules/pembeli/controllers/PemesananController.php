<?php

namespace app\modules\pembeli\controllers;

use Yii;
use yii\web\UploadedFile;
use yii\web\Controller;
use app\models\Barang;
use app\models\Transaksi;
use app\models\BackedUser;
use app\modules\admin\models\User;
use yii\data\ActiveDataProvider;
/**
 * Default controller for the `pembeli` module
 */
class PemesananController extends Controller
{
	public $layout = 'pembeli';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $barang_list = Barang::find()->all(); 
        return $this->render('index',['query' => $barang_list]);
    }
    public function actionDetail($id)
    {
        $barang = Barang::findOne($id); 
        $penjual = BackedUser::findOne($barang->id_user);
        
        return $this->render('detail',['barang' => $barang, 'penjual' => $penjual]);
        //return $this->hasOne(Barang::className(), ['id_user' => 
      //'31']);

    }
    public function actionKeranjang($id)
    {
        $barang_karanjang = Barang::findOne($id);
        return $this->render('keranjang',['barang_karanjang' => $barang_karanjang]);
    }
    public function actionDetailData()
    {
        return $this->render('detaildata'); 
    }
    public function actionUbahDetailData()
    {
        return $this->render('ubahdetaildata');
    }
    public function actionListPemesanan()
    {
        return $this->render('listpemesanan');
    }
    public function actionDetailPesanan()
    {
        return $this->render('detailpesanan');
    }
    public function actionA()
    {
        return $this->render('a');
    }
}
