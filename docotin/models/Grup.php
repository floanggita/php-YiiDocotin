<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grup".
 *
 * @property int $id_grup
 * @property string $nama_grup
 */
class Grup extends \yii\db\ActiveRecord
{
    private $nama_grup;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'grup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_grup'], 'required'],
            [['nama_grup'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_grup' => 'Id Grup',
            'nama_grup' => 'Nama Grup',
        ];
    }

    public function getBackedUser(){
    return $this->hasOne(BackedUser::className(),['id_grup'=>'id']);
    
    }

    public function getStatus(){
        return $this->hasOne(Status::className(),['status_topup'=>'id_status']);
    }

}
