<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property int $id_status
 * @property string $status
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_status', 'status'], 'required'],
            [['id_status'], 'integer'],
            [['status'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_status' => 'Id Status',
            'status' => 'Status',
        ];
    }

      public function getTransaksi(){
        return $this->hasOne(Transaksi::className(),['status_topup'=>'id_status']);
    }
}
