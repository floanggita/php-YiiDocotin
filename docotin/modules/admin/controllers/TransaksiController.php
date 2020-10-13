<?php
namespace app\modules\admin\controllers;
use yii\web\Controller;
/**
 * Default controller for the `admin` module
 */
class TransaksiController extends Controller
{
    public $layout = 'admin';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionListTransaksi()
    {
        return $this->render('transaksi');
    }
    public function actionDetailTransaksi()
    {
        return $this->render('detailtransaksi');
    }
}