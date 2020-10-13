<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id_user
 * @property string $username
 * @property string $password
 * @property string $email
 */
class backedUser extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    // private $id_user;
    // private $username;
    // private $password;
    // private $email;
    // private $auth_key;
    // private $id_grup;
    // private $token;
    /**
     * {@inheritdoc}
     */

    const SCENARIO_CREATE = 'scenariocreate';
    const SCENARIO_UPDATE = 'scenarioupdate';
    const SCENARIO_BARU = 'scenariobaru';

    public function getCustomScenarios(){
        return [
            self::SCENARIO_CREATE => ['username','password','email','no_hp','lantai','saldo'],
            self::SCENARIO_UPDATE => ['username','password','email','no_hp','lantai','saldo'],
            self::SCENARIO_BARU   => ['username','password','email','no_hp','lantai','saldo'],
        ];
    }

    public function scenarios()
    {
        $scenarios = $this->getCustomScenarios();
        return $scenarios;
    }

    // public function ModifyRequired()
    // {
    //   $allscenarios = $this->getCustomScenarios();
    //   $allscenarios[self::SCENARIO_UPDATE] = array_diff($allscenarios[self::SCENARIO_UPDATE], ['password']);
    //   return $allscenarios;
    // }

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
            [['username', 'email','password','id_grup','no_hp','lantai','nama_lengkap'], 'required'],
            [['username', 'email'], 'string', 'max' => 225],
            [['lantai','no_hp'],'integer'],
            [['lantai'],'integer','max'=>6,'message'=>'SAMPE 6 DOANG BOSQ']
        ];
    }

    /**
     * {@inheritdoc}
     */

    // public static function getDb()
    //     {
    //         return Yii::$app->db;  
    //     }

    public static function findIdentity($id){
        return self::findOne($id);
    }

    public static function findByUsername($username){
        return self::findOne(['username'=>$username]);
    }

    public static function findByGrup($id_grup){
        return self::findOne(['id_grup'=>$id_grup]);
    }

    public function getId(){
        return $this->getAttribute('id_user');
    }

    public static function findIdentityByAccessToken($token, $type=null){
        return self::findOne(['accessToken'=>$token]);
    }

     public function getAuthKey(){
        return $this->auth_key;
    }

    public function validateAuthKey($authKey){
        return $this->auth_key === $authKey;
    }

    public function validatePassword($password){
          return md5($password)===$this->getAttribute('password');
    }

    public function getId_group(){
        return $this->id_grup;
    }

    public function beforeSave($insert){
        if (!parent::beforeSave($insert)) {
            return false;
        }
        if($this->scenario != backedUser::SCENARIO_BARU){
        $this->setAttribute('password',md5($this->password));
        }
            return true;
    }
    
    public function attributeLabels()
    {
        return [
            'id_user' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'no_hp' =>'Phone Number',
            'lantai' =>'Floor',
            'id_grup'=>' '
        ];
    }


    public function getDisplay(){
        return $this->nama_lengkap;
    }

    public function getGrup(){
        return $this->hasOne(Grup::className(),['id'=>'id_grup']);
    }

    public function getTransaksi(){
        return $this->hasOne(Transaksi::className(),['id_user'=>'id_user']);
    }

}
