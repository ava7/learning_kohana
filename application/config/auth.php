<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'       => 'orm',
	'hash_method'  => 'sha256',
	'hash_key'     => '74be16979710d4c4e7c6647856088456',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		// 'ava@ava7.eu' => 'b3154acf3a344170077d11bdb5fff31532f679a1919e716a02',
	),

);
