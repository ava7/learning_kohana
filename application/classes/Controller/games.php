<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Games extends Controller_Login {

	public function before()
	{
		parent::before();
		$this->games = new Model_Games;
	}

	public function action_index()
	{
		$teams = ORM::factory('team')->find_all();
		$session = Session::instance();
		$error = $session->get_once('error');

		$this->template->view = View::factory('games/index')
							->bind('teams', $teams)
							->bind('error', $error);
	}

	public function action_create()
	{
		$is_started = ORM::factory('games')->count_all();
		if ($is_started == 0)
		{
			$count_teams = ORM::factory('team')->count_all();
			// The world cup starts with 32 teams, here, we just limit them to an even number
			if ($count_teams % 2 == 0)
			{
				$teams = ORM::factory('team')->find_all()->as_array();

				shuffle($teams);

				// So we can set the next game to start after 3 hours
				$count_games = 0;
				for ($i = 0; $i < $count_teams; $i++)
				{
					$count_games++;
					$game = ORM::factory('games');
					$game->team_one = $teams[$i]->id;
					$game->team_two = $teams[$i += 1]->id;
					$game->game_starts = Date::formatted_time('+ ' . ($count_games * 3) .' hours');
					$game->round = 1;
					$game->save();				
				}
				$this->redirect('games/show');
			}
			$session = Session::instance();
			$success = $session->set('error', 'Сборът на отборите трябва да са четно число');
			$this->redirect('games/index');
		}
		$this->redirect('games/show');
	}

	public function action_show()
	{
		// Find a list of all rounds so far
		$query = DB::select('round')->distinct(true)->from('games')->execute();
		$result = $query->as_array();

		// Sort games by round
		$rounds = array();
		foreach ($result as $v)
		{
			// Create a multidimensional array of all rounds to keep all the games
			// Round [1] = array( game => array( game information ) )
			
			$rounds[$v['round']] = $this->games->joinTeams(false, $v['round'])->as_array();
		}
		$this->template->view = View::factory('games/show')
							->bind('rounds', $rounds);
	}

	public function action_edit()
	{
		$id = (int) $this->request->param('id');
		$game = $this->games->joinTeams($id)->as_array();

		$this->template->view = View::factory('games/edit')->bind('game', $game[0]);
	}

	public function action_update()
	{
		$id = (int) $this->request->param('id');

		if (strtolower($this->request->method()) == 'post')
		{
			$validate = Validation::factory($this->request->post());
			$validate->rule('score', 'not_empty');
			$validate->rule('score', 'min_length', array(':value', 3));
			$validate->rule('score', 'max_length', array(':value', 5));
			$validate->rule('winner', 'digit');
			$validate->rule('winner', 'min_length', array(':value', 1));
			$validate->rule('game_starts', 'not_empty');
			$validate->rule('game_starts', 'min_length', array(':value', 3));

			if ($validate->check())
			{
				$game = ORM::factory('Games', $id);
				$game->score = $this->request->post('score');
				$game->winner = $this->request->post('winner');
				$game->game_starts = Date::formatted_time($this->request->post('game_starts'));
				$game->save();
				if ($game->saved())
				{
					// Check if a team has been added without an opponent
					$next = ORM::factory('Games')
						->where('team_two', 'IS', null)
						->where('winner', 'IS', null)
						->where('team_one', '<>', $game->winner)
						->count_all();
					// If not, create one, otherwise - update the existing one
					if ($next == 0)
					{
						$new = ORM::factory('Games');
						$new->team_one = $game->winner;
						$new->round = $game->round + 1;
						$new->save();
					}
					else
					{
						// @todo Sometimes the loser may advance forward :)

						// Next game will start after 3 hours
						$max = DB::select('MAX(game_starts) AS max')->from('games')->execute();
						$next_game_starts = $max->as_array()[0]['max'];

						// Somebody just got an opponent!
						$new = ORM::factory('Games')
								->where('team_two', 'IS', null)
								->find();
						$new->team_two = $game->winner;
						$new->game_starts = Date::formatted_time($next_game_starts.' + 3 hours');
						$new->save();
					}
					// Redirect with success
					$this->redirect('games/show');			
				}
			}
		}
		// Throw validation errors here
		$this->redirect('games/edit/' . $id);
		
	}

}