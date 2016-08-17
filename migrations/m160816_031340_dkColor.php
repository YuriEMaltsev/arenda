<?php

use yii\db\Migration;
/*
 * цвета
 */

class m160816_031340_dkColor extends Migration
{
    public function up()
    {
        $this->createTable('dk_color', [
            'id' => 'integer',
            'title' => $this->string(30)->notNull()->unique()
        ]);

        $this->insert('dk_color', [ 'id' => 0, 'title' => 'не указан' ]);
        $this->insert('dk_color', [ 'id' => 1, 'title' => 'черный' ]);
        $this->insert('dk_color', [ 'id' => 2, 'title' => 'белый' ]);
        $this->insert('dk_color', [ 'id' => 5, 'title' => 'красный' ]);
        $this->insert('dk_color', [ 'id' => 5, 'title' => 'синий' ]);
        $this->insert('dk_color', [ 'id' => 6, 'title' => 'зелёный' ]);
        $this->insert('dk_color', [ 'id' => 7, 'title' => 'желтый' ]);
        $this->insert('dk_color', [ 'id' => 8, 'title' => 'серый' ]);
        $this->insert('dk_color', [ 'id' => 9, 'title' => 'серебристый' ]);

    }

    public function down()
    {
        $this->dropTable('dk_color');
        return false;
    }
}
