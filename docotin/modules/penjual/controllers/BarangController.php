<?php

namespace app\modules\penjual\controllers;

use Yii;
use yii\web\UploadedFile;
use yii\web\Controller;
use app\models\Barang;
use yii\data\ActiveDataProvider;
/**
 * BarangController implements the CRUD actions for Barang model.
 */
class BarangController extends Controller
{
    public $layout = 'penjual';
    /**
     * Renders the index view for the module
     * @return string
     */

    public function actionListBarang()
    {
        $query = Barang::find()->all();

        // $pagination = new Pagination([
        //     'defaultPageSize' => 5,
        //     'totalCount' => $query->count(),
        // ]);

        // $barang = $query->orderBy('id_barang')
        //     ->offset($pagination->offset)
        //     ->limit($pagination->limit)
        //     ->all();



        // $dataProvider = new ActiveDataProvider([
        //     'query' => $query,
        //     'pagination' => [
        //         'pageSize' => 10,
        //     ]
        // ]);

        // return $this->render('listbarang', [
        //     'dataProvider' => $dataProvider,
        // ]);

        return $this->render('listbarang',['query' => $query]);
    }
    public function actionTambahBarang()
    {
        $model = new Barang();
        $model->id_user = Yii::$app->user->identity->id_user;

        if($model->load(Yii::$app->request->post(), 'Barang')
            && ($model->upload_gambar = UploadedFile::getInstance($model, 'upload_gambar'))
            && ($model->gambar_barang = "/uploads/barang/" . $model->upload_gambar->name)){
            $model->save();

            if($model->upload_gambar && $model->validate()){
                $model->upload_gambar->saveAs('uploads/barang/' . $model->upload_gambar->baseName . '.' . $model->upload_gambar->extension);
            }
    
            
            return $this->redirect('list-barang');
        }

        return $this->render('tambahdatabarang',['model'=> $model]);

    }
    public function actionEditBarang($id)
    {
        $model = Barang::findOne($id);
        $model->id_user = Yii::$app->user->identity->id_user;

        if($model->load(Yii::$app->request->post(), 'Barang')
            && ($model->upload_gambar = UploadedFile::getInstance($model, 'upload_gambar'))
            && ($model->gambar_barang = "/uploads/barang/" . $model->upload_gambar->name)){
            $model->save();

            if($model->upload_gambar && $model->validate()){
                $model->upload_gambar->saveAs('uploads/barang/' . $model->upload_gambar->baseName . '.' . $model->upload_gambar->extension);
            }
    
            
            return $this->redirect('list-barang');
        }
        return $this->render('editdatabarang',['model' => $model]);
    }
    public function actionDetailBarang($id)
    {
        $query = Barang::findOne($id);
        return $this->render('detaildatabarang',['query' => $query]);
    }
}
