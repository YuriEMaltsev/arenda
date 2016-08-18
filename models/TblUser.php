<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Tbl_User".
 *
 * @property integer $id
 * @property integer $id_type_client
 * @property string $e_mail
 * @property string $user_name
 * @property string $passw
 * @property string $name_fio
 * @property string $phone
 * @property string $pasp_ser
 * @property string $pasp_num
 * @property string $drive_lic_ser
 * @property string $drive_lic_num
 */
class TblUser extends \yii\db\ActiveRecord
{
    private $_user = false;
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'Tbl_User';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_type_client'], 'integer'],
            [['e_mail', 'name_fio'], 'string', 'max' => 255],
            [['user_name', 'passw'], 'string', 'max' => 30],
            [['phone'], 'string', 'max' => 10],
            [['pasp_ser', 'drive_lic_ser'], 'string', 'max' => 4],
            [['pasp_num', 'drive_lic_num'], 'string', 'max' => 6],

//            [['e-mail', 'passw'], 'required', 'message' => ''],
//            [ 'email', 'allowEmpty' => false, 'checkMX' => true, 'message' => 'error'],
              ['passw', 'validatePassword']
        ];
    }


//    public function validatePassword($attribute, $params)
    public function validatePassword($attribute)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->passw)) {
                $this->addError($attribute, 'Некорректное имя или пароль');
            }

        }
    }


//    public function Login($email, md5($password))

        public function login()
    {
        if ($this->validate()) {
            //return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
            return Yii::$app->user->login($this->getUser(), 3600*24*30 );
        }
        return false;
    }
/*
        //echo "check LOGIN e-mail=$this->e_mail and passw=$this->passw /n";
        $user = $this-> findAll("e-mail=$this->e_mail and passw=$this->passw");

        //findByAttributes(array('e-mail' => $this->e_mail  , 'passw' => $this->passw));

        if($user===null)
        {
          return false;
        }

        // установить ID user
        return true;
      /
    }
*/

    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->user_name) ;
        }

        return $this->_user;
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_type_client' => 'Id Type Client',
            'e_mail' => 'E Mail',
            'user_name' => 'User Name',
            'Пароль' => 'Passw',
            'ФИО' => 'Name Fio',
            'Телефон' => 'Phone',
            'Паспорт серия' => 'Pasp Ser',
            'Паспорт номер' => 'Pasp Num',
            'Водительское удостоверение серия' => 'Drive Lic Ser',
            'Водительское удостоверение номер' => 'Drive Lic Num',
        ];
    }
}
