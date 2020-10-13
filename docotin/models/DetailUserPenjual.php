<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class DetailUserPenjual extends ActiveRecord
{
    public static function tableName()
    {
        return 'detailuserpenjual';
    }

    public function rules()
    {
        return [
            [['namaLengkap', 'noHp', 'alamat', 'noNpwp', 'alamat', 'fotoKtp'], 'safe']
        ];
    }

    public function saveModel($modelForm, $detailUserAwal)
    {
         if($detailUserAwal == null){
             $this->attributes=$modelForm->attributes;
             return $this->save();
         }
         else {
             $detailUserAwal->attributes=$modelForm->attributes;
             return $detailUserAwal->save();
         }
    }
}