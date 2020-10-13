<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $id_barang
 * @property string $nama_barang
 * @property int $harga_barang
 * @property string $gambar_barang
 * @property int $stok
 * @property string $deksripsi
 * @property int $id_user
 *
 * @property User $user
 * @property Transaksi[] $transaksis
 */
class Barang extends \yii\db\ActiveRecord
{
    public $upload_gambar;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_barang', 'harga_barang', 'gambar_barang', 'stok', 'deksripsi', 'id_user'], 'required'],
            [['harga_barang', 'stok', 'id_user'], 'integer'],
            [['gambar_barang', 'deksripsi'], 'string'],
            [['upload_gambar'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['nama_barang'], 'string', 'max' => 100],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => BackedUser::className(), 'targetAttribute' => ['id_user' => 'id_user']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_barang' => 'Id Barang',
            'nama_barang' => 'Nama Barang',
            'harga_barang' => 'Harga Barang',
            'gambar_barang' => 'Gambar Barang',
            'stok' => 'Stok',
            'deksripsi' => 'Deksripsi',
            'id_user' => 'Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id_user' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksis()
    {
        return $this->hasMany(Transaksi::className(), ['id_barang' => 'id_barang']);
    }
}
