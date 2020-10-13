<?php
	namespace app\controllers;

	use yii;
	use yii\web\Controller;
	use app\models\LoginForm;
	use app\models\BackedUser;
	use app\models\Transaksi;

	class UserController extends Controller{

		public function actionRegister(){
			$model = new BackedUser();
			if($model->load(Yii::$app->request->post())){
			// echo "<pre>". var_dump($model)."</pre>";exit; 
			// 	var_dump(Yii::$app->request->post());exit;
				if($model->validate()){
					$model->save(false);
					return $this->redirect(['site/login']);
				}
				else{
				}
			}
		return $this->render('register',['model'=>$model]);
		}

		public function actionUpdate($id){
			$update= BackedUser::findOne($id);
			$post=Yii::$app->request->post();
			if(!is_null($post)){
				$update->nama_lengkap=$post['BackedUser']['nama_lengkap'];
				$update->no_hp=$post['BackedUser']['no_hp'];
				// var_dump($update);exit;
				if($update->save()){
					Yii::$app->getSession()->setFlash('message','berhasil di update');
				}else{
					Yii::$app->getSession()->setFlash('message','gagal di update');
					// var_dump($update->getErrors());exit;
				}
			}
			// var_dump($update);exit;
			return $this->redirect(['transaksi/create']);
		}

		public function actionView($id){
        $jumlah = BackedUser::findOne($id);
        // return $this->render('create',['jumlah'=> $jumlah]);
    	}

	}

