<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\db\Expression;
/**
 * This is the model class for table "saldo".
 *
 * @property int $id_topup
 * @property int $jumlah_saldo
 * @property int $tanggal
 */
class Transaksi extends \yii\db\ActiveRecord
{
    public const status_text = [
                            '0'=>'belum di proses',
                            '1'=>'tertunda',
                            '2'=>'berhasil',
                            '3'=>'gagal',
                            ]; 

    /**
     * {@inheritdoc}
     */

    public static function getDb()
    {
        return \Yii::$app->db;  
    }

    public static function tableName()
    {
        return 'transaksi';
    }

    // public function behaviors(){
    //     return[
    //         'class'=>TimestampBehavior::className(),
    //         'createdAtAttribute'=>'tanggal',
    //         'updatedAtAttribute'=> false,
    //         'value' => new Expression('NOW()'),
    //     ];
    // }
    /**
     * {@inheritdoc}
     */

    public function rules()
    {
        return [
            [['jumlah_saldo','id_bank','id_user'], 'required'],
            [['jumlah_saldo'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getStatusName(){
        return Transaksi::status_text[$this->status_topup];
    }

    public function attributeLabels()
    {
        return [
            'jumlah_saldo' => 'Jumlah Saldo',
            'tanggal' => 'Tanggal',
            'id_bank' => 'Bank',
            'id_topup' => 'Id Top-up',
        ];
    }

    public function getId(){
        return $this->getAttribute('id_topup');
    }

    public function beforeSave($insert){
        if(!parent::beforeSave($insert)){
            return false;
        }
        $lastest_id=$this->getLastest_id(); 
        $this->setAttribute('id_topup',$lastest_id+1);
        return true;
    }

    public function getLastest_id(){
            $model = new Transaksi();
            $lastest_id = $model->find()
                            ->select('id_topup')
                            ->where("id_topup like '".date('Ymd')."%'")
                            ->orderBy(['id_topup' => SORT_DESC])
                            ->one();
            return is_null($lastest_id) ? date('Ymd')."0001" : $lastest_id->id_topup;
    }
    public function getBackedUser(){
        return $this->hasOne(BackedUser::className(),['id_user'=>'id_user']);
    }

    public function getBank(){
        return $this->hasOne(Bank::className(),['id'=>'id_bank']);
    }

      public function getStatus(){
        return $this->hasOne(Status::className(),['id_status'=>'status_topup']);
    }
}


