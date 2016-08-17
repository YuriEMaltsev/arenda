<?php

use yii\db\Migration;
/*
 *  Автомобильные фирмы
 */



class m160815_105849_dkFirm extends Migration
{

    public function up()
    {
        $this->createTable('dk_firm', [
            'id' => 'integer',
            'title' => $this->string(40)->notNull()->unique()
        ]);

        $this->insert('dk_firm', [ 'id' => 0, 'title' => 'Не указана' ]);
        $this->insert('dk_firm', [ 'id' => 1, 'title' => 'TOYOTA' ]);
        $this->insert('dk_firm', [ 'id' => 2, 'title' => 'HONDA' ]);
    }

    public function down()
    {
        $this->dropTable('dk_firm');
        return false;
    }


}
