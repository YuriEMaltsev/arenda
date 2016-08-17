<?php

use yii\db\Migration;
/*
 *  тип автомобиля
 */

class m160815_101134_dkTypeCar extends Migration
{

    public function up()
    {
        $this->createTable('dk_type_car', [
            'id' => 'integer',
            'title' => $this->string(30)->notNull()->unique()
        ]);

        $this->insert('dk_type_car', [ 'id' => 0, 'title' => 'не указан' ]);
        $this->insert('dk_type_car', [ 'id' => 1, 'title' => 'легковой' ]);
        $this->insert('dk_type_car', [ 'id' => 2, 'title' => 'грузовой' ]);
        $this->insert('dk_type_car', [ 'id' => 3, 'title' => 'специальный' ]);
    }

    public function down()
    {
        $this->dropTable('dk_type_car');
        return false;
    }

}
