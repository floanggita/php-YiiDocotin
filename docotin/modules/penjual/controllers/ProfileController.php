<?php

namespace app\modules\penjual\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;
use app\models\Grup;
use app\models\BackedUser;
use app\models\DetailUserPenjual;
use app\models\DetailUserPenjualForm;
use yii\data\ActiveDataProvider;
use yii\web\UploadedFile;

/**
 * Default controller for the `admin` module
 */
class ProfileController extends Controller
{
	public $layout = 'penjual';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionListPenarikan()
    {
        return $this->render('listpenarikan');
    }
    public function actionDetailPenarikan()
    {
        return $this->render('detailpenarikan');
    }
    public function actionProfile()
    {
        $id = Yii::$app->user->id;
        $user = BackedUser::findOne($id);
        $detailUserAwal = DetailUserPenjual::find()
                        ->where(['id_user' => $id])
                        ->one();
        $model = new DetailUserPenjualForm();
        if($detailUserAwal !== null){
            $model->attributes=$detailUserAwal->attributes;
        }
        if($model->load(Yii::$app->request->post())){
            $model->fotoKtp = UploadedFile::getInstance($model, 'fotoKtp');
            $detailUser = new DetailUserPenjual();
            $detailUser->id_user = $id;
            if($model->upload() && $detailUser->saveModel($model, $detailUserAwal)) {
                return $this->redirect(['profile', 'id' => $detailUser->id]);
            }
        }
        return $this->render('profile', ['user'=>$user, 'model'=>$model]);
    }
    
}
