<?php

namespace app\models;

use Yii;
use yii\base\Model;

class DetailUserForm extends Model 
{
    public $nama_lengkap;
    public $lantai;
    public $no_hp;
    public $role;

    public function attributeLabels()
    {
        return [
            'nama_lengkap' => 'Nama Lengkap',
            'lantai' => 'Lantai',
            'no_hp' => 'No HP',
        ];
    }

    public function rules()
    {
        return [
            [['nama_lengkap', 'lantai', 'no_hp'], 'required'],
            [['lantai', 'no_hp'], 'number']
        ];
    }
}