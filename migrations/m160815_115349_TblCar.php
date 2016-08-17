<?php

use yii\db\Migration;
/*
    АВТОМОБИЛИ
*/
class m160815_115349_TblCar extends Migration
{
    public function up()
    {

        {
            $this->createTable('tbl_car', array(
                'id' => 'pk',
                'id_type_car' => 'integer(2)',  // ид типа автомобиля
                'id_firm' => 'integer(3)',      // ид фирмы
                'id_type_fuel' => 'integer(1)', // ид вида топлива
                'year_prod' => 'integer(4)',    // год изготовления
                'id_color' => 'integer(3)',     // ид цвета
                'cap_place' => 'integer(2)',   // количество пассажиров
                'cap_weight' => 'decimal',      // грузоподъёмность
                'cap_amount' => 'decimal',      // полезный объем
                'add_info' => 'text',           // дополнительная информация
            ));
        }

    }

    public function down()
    {

        $this->dropTable('tbl_car');
        return false;
    }
}
