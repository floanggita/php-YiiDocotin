<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bank".
 *
 * @property int $id_bank
 * @property string $nama_bank
 * @property int $kode_bank
 */
class Bank extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bank';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_bank', 'kode_bank'], 'required'],
            [['kode_bank'], 'integer'],
            [['nama_bank'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_bank' => 'Id Bank',
            'nama_bank' => 'Nama Bank',
            'kode_bank' => 'Kode Bank',
        ];
    }

    public function getTransaksi(){
        return $this->hasOne(Transaksi::className(),['id_bank'=>'id'])
    }

}
