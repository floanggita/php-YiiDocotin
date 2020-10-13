<?php

namespace app\controllers;

use yii;
    use yii\web\Controller;
    use app\models\LoginForm;
    use app\models\BackedUser;
    use app\models\Transaksi;
    use app\models\Search;
    use yii\data\Pagination;
    use yii\data\Sort;
    use yii\db\ActiveQuery;

class AdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

        public function actionList(){

            if(Yii::$app->user->isGuest){
                return $this->redirect(['site/login']);
            }
            if(Yii::$app->user->identity->id_grup==2){
                return $this->redirect(['site/index']);
            }

            if(Yii::$app->user->identity->id_grup==1){
                return $this->redirect(['site/index']);
            }

            $sort = new sort([
                'attributes'=>[
                    'status_topup'=>[
                        'asc'=>['status_topup'=>SORT_ASC],
                        'desc'=>['status_topup'=>SORT_DESC],
                        'default'=>SORT_DESC,
                        'label' => 'status'
                        ],
                    ],
                ]);
            $list = Search::find();
            $post = Yii::$app->request->queryParams;
            $conditions =[];
            if(!empty($post['Search']['status_topup'])){
                $conditions['status_topup']=$post['Search']['status_topup'];
            }
             if(!empty($post['Search']['id_topup'])){
                $conditions['id_topup']=$post['Search']['id_topup'];
            }
                // var_dump($post['Search']);exit;
            if(!empty($post['Search']['nama_lengkap'])){
                // $conditions['BackedUser.nama_lengkap']=$post['Search']['nama_lengkap'];
                $list = $list->joinWith('backedUser bu');
                $conditions['bu.nama_lengkap']=$post['Search']['nama_lengkap'];
                   
            }
                // var_dump(Yii::$app->request);exit;
                $list= $list ->where($conditions);
            //unfinished pagination. fix it or leave it
            // var_dump($list);exit;
            $pages = new Pagination([
                    'defaultPageSize'=>5,
                    'totalCount'=>count($list->all()),
                    ]);
            $models = $list->orderBy('id_topup')
                ->offset($pages->offset)
                ->limit($pages->limit)
                ->all();

            $searchModel = new Search();
            //$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            // var_dump($list[0]->backedUser);exit;
            // $user = $list->backedUser;
            return $this->render('transaksi/transaksi',[
                'searchModel'=>$searchModel,
                'sort'=>$sort,
                'models'=>$models,
                'pages'=>$pages,
                'list'=>$list,
            ]);
        } 

        public function actionSearch(){
            $searchModel = Search::find()
                    ->where(['id_topup'=>Yii::$app->request->queryParams]);
            return $this->render('list',['searchModel'=>$searchModel]);
            //$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        }

        public function actionDetail($id){
            $ee = new Transaksi();  
            $detail = Transaksi::findOne($id);
            $model = $detail->backedUser;
            $model->scenario = BackedUser::SCENARIO_UPDATE;
            $status = $detail->status;
            $uang = $detail->jumlah_saldo;
            $post = Yii::$app->request->post();
                if(!empty($post)){
                    $detail->status_topup=2;    
                    $detail->update();
                    $model->saldo= $model->saldo + $uang;
                    $model->update();
                    }
            return $this->render('transaksi/detailtransaksi',['detail'=>$detail,'model'=>$model,'status'=>$status]);
        }

        public function actionTolak($id){
            $model = Transaksi::findOne($id);
            $post = Yii::$app->request->post();
                if(!empty($post)){
                    $model->status_topup = 1;
                    $model->update();
                    return $this->redirect('?r=admin%2Flist');
                }
        }
}
  