<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Auth_User  {

	protected $_table_name = 'users';
	protected $_primary_key = 'id';
	protected $_table_columns = array(
		'id' => null,
		'username' => null,
		'password' => null,
	);

}