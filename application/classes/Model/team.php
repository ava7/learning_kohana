<?php defined('SYSPATH') or die('No direct script access.');

class Model_Team extends ORM {

	protected $_table_name = 'team';
	protected $_primary_key = 'id';
	protected $_table_columns = array(
		'id' => null,
		'country' => null
	);

	// Relationships - One team **has many** players
	protected $_has_many = array('player' =>
		array('model' => 'Player', 'foreign_key' => 'id_team')
	);
}