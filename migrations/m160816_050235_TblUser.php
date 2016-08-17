<?php

use yii\db\Migration;
/*
 *  Пользователи
 */

class m160816_050235_TblUser extends Migration
{
    public function up()
    {

        {
            $this->createTable('tbl_user', array(
                'id' => 'pk',
                'id_type_client' => 'integer(2)', // ид типа клиента
                'e_mail'       => 'string',          // e-mail
                'user_name'    => 'string(30)',      // NIC name
                'passw'        => 'string(30)',      // пароль
                'name_fio'     => 'string',          // ФИО
                'phone'        => 'string(10)',      // телефон
                'pasp_ser'     => 'string(4)',       // паспорт серия
                'pasp_num'     => 'string(6)',       // паспорт номер
                'drive_lic_ser'=> 'string(4)',       // водительское удостоверение серия
                'drive_lic_num'=> 'string(6)',       // водительское удостоверение номер
            ));
        }

    }

    public function down()
    {

        $this->dropTable('tbl_user');
        return false;
    }

}
