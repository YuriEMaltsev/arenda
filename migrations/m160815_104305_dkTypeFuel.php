<?php

use yii\db\Migration;
/*
 *   вид топлива
 */

class m160815_104305_dkTypeFuel extends Migration
{
    public function up()
    {
        $this->createTable('dk_type_fuel', [
            'id' => 'integer',
            'title' => $this->string(20)->notNull()->unique()
        ]);

        $this->insert('dk_type_fuel', [ 'id' => 1, 'title' => 'бензин' ]);
        $this->insert('dk_type_fuel', [ 'id' => 2, 'title' => 'дизель' ]);
        $this->insert('dk_type_fuel', [ 'id' => 2, 'title' => 'газ' ]);
    }

    public function down()
    {
        $this->dropTable('dk_type_fuel');
        return false;
    }

}


