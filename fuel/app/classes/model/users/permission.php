<?php
class Model_Users_Permission extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'id',
		'area',
		'permission',
		'description',
		'actions',
		'user_id',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('id', 'Id', 'required|valid_string[numeric]');
		$val->add_field('area', 'Area', 'required|max_length[25]');
		$val->add_field('permission', 'Permission', 'required|max_length[25]');
		$val->add_field('description', 'Description', 'required|max_length[255]');
		$val->add_field('actions', 'Actions', 'required|max_length[]');
		$val->add_field('user_id', 'User Id', 'required|valid_string[numeric]');

		return $val;
	}

}
