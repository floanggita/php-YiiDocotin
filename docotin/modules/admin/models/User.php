<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id_user
 * @property int $id_grup
 * @property string $username
 * @property string $password
 * @property string $email
 *
 * @property Barang[] $barangs
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_grup', 'username', 'password', 'email'], 'required'],
            [['id_grup'], 'integer'],
            [['username', 'password', 'email'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'id_grup' => 'Id Grup',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangs()
    {
        return $this->hasMany(Barang::className(), ['id_user' => 'id_user']);
    }
}
