<?php defined('SYSPATH') or die('No direct script access.');

class Model_Player extends ORM {

	protected $_table_name = 'player';
	protected $_primary_key = 'id';
	protected $_table_columns = array(
		'id' => null,
		'name' => null,
		'id_team' => null
	);

	// Relationships - a single player **belongs to** one team
	protected $_belongs_to = array('team' => 
		array('model' => 'Team', 'foreign_key' => 'id_team')
	);

}