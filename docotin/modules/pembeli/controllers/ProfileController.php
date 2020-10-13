<?php

namespace app\modules\pembeli\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;
use app\models\Grup;
use app\models\BackedUser;
use app\models\DetailUser;
use app\models\DetailUserForm;
use yii\data\ActiveDataProvider;


/**
 * Default controller for the `pembeli` module
 */
class ProfileController extends Controller
{
	public $layout = 'pembeli';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionProfilePembeli()
    {
        $id = Yii::$app->user->id;
        $user = BackedUser::findOne($id); 
        $detailUserAwal = DetailUser::find()
                        ->where(['id_user' => $id])
                        ->one();
        $model = new DetailUserForm();
        if($detailUserAwal !== null){
            $model->attributes=$detailUserAwal->attributes;
        }

        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $detailUser = new DetailUser();
            $detailUser->id_user = $id;
            if ($detailUser->saveModel($model, $detailUserAwal)) {
<<<<<<< HEAD
                Yii::$app->session->setFlash('success', 'Biodata berhasil diubah.');
=======
                Yii::$app->session->setFlash('success', "Biodata berhasil diubah!");
>>>>>>> update/profile-pembeli
                return $this->redirect(['profile-pembeli', 'id' => $detailUser->id ]);
        }
        //var_dump($user); exit;
        //$pengguna = BackedUser::findOne($user->id_user);
        
        }
        return $this->render('profilepembeli', ['user'=>$user, 'model'=>$model]);
    }   

    public function actionListTopup()
    {
        return $this->render('listtopup');
    }
    public function actionDetailTopup()
    {
        return $this->render('detailtopup'); 
    }
    
}
