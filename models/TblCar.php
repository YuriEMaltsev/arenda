<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Tbl_Car".
 *
 * @property integer $id
 * @property integer $id_type_car
 * @property integer $id_firm
 * @property integer $id_type_fuel
 * @property integer $year_prod
 * @property integer $id_color
 * @property integer $cap_place
 * @property string $cap_weight
 * @property string $cap_amount
 * @property string $add_info
 */
class TblCar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Tbl_Car';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_type_car', 'id_firm', 'id_type_fuel', 'year_prod', 'id_color', 'cap_place'], 'integer'],
            [['cap_weight', 'cap_amount'], 'number'],
            [['add_info'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_type_car' => 'Id Type Car',
            'id_firm' => 'Id Firm',
            'id_type_fuel' => 'Id Type Fuel',
            'year_prod' => 'Year Prod',
            'id_color' => 'Id Color',
            'cap_place' => 'Cap Place',
            'cap_weight' => 'Cap Weight',
            'cap_amount' => 'Cap Amount',
            'add_info' => 'Add Info',
        ];
    }
}
