<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class FlaggingController extends Controller
{
	public $layout = 'admin';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionFlagging()
    {
        return $this->render('flagging');
    }
    public function actionListVa()
    {
        return $this->render('listva');
    }
    public function actionDetailVa()
    {
        return $this->render('detailva');
    }
}
