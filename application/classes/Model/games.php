<?php defined('SYSPATH') or die('No direct script access.');

class Model_Games extends ORM {

	protected $_table_name = 'games';
	protected $_primary_key = 'id';
	protected $_table_columns = array(
		'id' => null,
		'team_one' => null,
		'team_two' => null,
		'game_starts' => null,
		'winner' => null,
		'score' => null,
		'round' => null
	);

	public function joinTeams($id = 0, $round = 0)
	{
		/*SELECT g.id, t1.country, t2.country FROM games as g
		INNER JOIN team as t1
		ON g.team_one = t1.id
		INNER JOIN team as t2
		ON g.team_two = t2.id*/
		$query = DB::select('g.id', 'g.team_one', 'g.team_two', 'g.winner', 'g.game_starts', 'g.score', 'g.round','t1.country AS team_one_country', 't2.country AS team_two_country')
					->from('games AS g')
					->join('team AS t1')->on('g.team_one', '=', 't1.id')
					->join('team AS t2')->on('g.team_two', '=', 't2.id');
		($id > 0) ? $query->where('g.id', '=', $id) : null;
		($round > 0) ? $query->where('round', '=', $round) : null;
		return $query->execute();
	}

}