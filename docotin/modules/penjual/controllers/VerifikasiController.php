<?php

namespace app\modules\penjual\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class VerifikasiController extends Controller
{
	public $layout = 'penjual';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionListVerifikasi()
    {
        return $this->render('listverifikasi');
    }
    public function actionDetailVerifikasi()
    {
        return $this->render('detailverifikasi');
    }  
}
