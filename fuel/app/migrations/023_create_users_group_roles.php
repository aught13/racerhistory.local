<?php

namespace Fuel\Migrations;

class Create_users_group_roles
{
	public function up()
	{
		\DBUtil::create_table('users_group_roles', array(
			'group_id' => array('type' => 'int', 'null' => false, 'constraint' => 11),
			'role_id' => array('type' => 'int', 'null' => false, 'constraint' => 11),
			'created_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
			'updated_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
		));
	}

	public function down()
	{
		\DBUtil::drop_table('users_group_roles');
	}
}