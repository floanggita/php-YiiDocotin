<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class DetailUser extends ActiveRecord
{
    public static function tableName()
    {
        return 'detailuser';
    } 

    public function rules()
    {
        return [
            [['nama_lengkap', 'lantai', 'no_hp'], 'safe'],
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
        //var_dump($this->attributes); exit;
    }
}