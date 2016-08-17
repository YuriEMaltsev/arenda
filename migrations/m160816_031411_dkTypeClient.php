<?php

use yii\db\Migration;

class m160816_031411_dkTypeClient extends Migration
{

    public function up()
    {
        $this->createTable('dk_type_client', [
            'id' => 'integer',
            'title' => $this->string(30)->notNull()->unique()
        ]);

        $this->insert('dk_type_client', [ 'id' => 0, 'title' => 'администратор' ]);
        $this->insert('dk_type_client', [ 'id' => 1, 'title' => 'арендодатель' ]);
        $this->insert('dk_type_client', [ 'id' => 2, 'title' => 'арендатор' ]);

    }

    public function down()
    {
        $this->dropTable('dk_type_client');
        return false;
    }



}
