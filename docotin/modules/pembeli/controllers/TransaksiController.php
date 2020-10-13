<?php

namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\Transaksi;
use yii\web\Controller;
use app\models\BackedUser;

class TransaksiController extends \yii\web\Controller
{
        
    
        
    //ini fungsi buat nampilin yang kalo diganti namanya ntar bakal error
    public function actionCreate(){
        // $view= Saldo::findOne($id);
        $model = BackedUser::findOne(Yii::$app->user->getId());
        // $bank = Bank::findAll()
        // if ($model->load(Yii::$app->request->post())){
        //  if($model->save()){
        //  Yii::$app->getSession()->setFlash('message','BERHASIL ISI SALDO:(');
        //   return $this->redirect(['site/index']);    
        //  }else{
        //      Yii::$app->getSession()->setFlash('message','GAGAL ISI SALDO:(');
        //  }
        // }
        return $this->render('profile/profilepembeli', ['model' => $model]);
        }


    public function actionTambah(){
        $model = new Transaksi();
        $user = BackedUser::findOne(Yii::$app->user->identity->id_user);
        $post = Yii::$app->request->post();
             // var_dump(Yii::$app->request->post());exit;
                    // var_dump($model->save());exit;
            if(!is_null($post)){
                 $model->updateAll(
                    ['status_topup'=>3],
                    [
                        'and',
                        ['=','status_topup','0'],
                        ['=','id_user',Yii::$app->user->identity->id_user]
                    ]);
                $model->jumlah_saldo = $post['Transaksi']['jumlah_saldo']; 
                $model->id_bank = $post['Transaksi']['id_bank'];
                $model->id_user = Yii::$app->user->identity->id_user;
                if($model->validate()){
                    $model->save(false);
                     return $this->redirect(\yii\helpers\Url::to(['detail','id'=>$model->id_topup]));
                Yii::$app->getSession()->setFlash('message','BERHASIL ISI SALDO');
                }
                else{
                    var_dump($post);exit;
                Yii::$app->getSession()->setFlash('message','GAGAL ISI SALDO');

                }
            }
            return $this->redirect('create');
            } 

    public function actionDetail($id){
        $detail = Transaksi::findOne($id);
        $user = $detail->backedUser;
        // var_dump($user);exit;
        return $this->render('profile/detailtopup', ['detail' => $detail,'user'=>$user]);
    }

        // public function actionUpdate($id){
        //     $update = Transaksi::findOne($id);
        //     if($update=load(Yii::$app->request->post())){
        //         if($update->save()){
        //             return $this->redirect(['create','id_topup'=>$update->id_topup]);
        //         }else{

        //         }
        //     }
        // }

        // public function actionCal(){
        //     $data= array();
        //     $data['create']= $this->createCal();
        //     $data['view'] = $this->viewCal();
        //     $data['update'] = $this->updateCal();
        //     $this->render('create', array('data'=>$data));
        // }
}
