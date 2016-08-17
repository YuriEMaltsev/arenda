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
        ];
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
            'passw' => 'Passw',
            'name_fio' => 'Name Fio',
            'phone' => 'Phone',
            'pasp_ser' => 'Pasp Ser',
            'pasp_num' => 'Pasp Num',
            'drive_lic_ser' => 'Drive Lic Ser',
            'drive_lic_num' => 'Drive Lic Num',
        ];
    }
}
