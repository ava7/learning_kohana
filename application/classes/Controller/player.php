<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Player extends Controller_Login {

	public function action_index()
	{
		$count = ORM::factory('Player')->count_all();
		if ($count != 0)
		{
			$players = ORM::factory('player')->find_all();
		}

		$this->template->view = View::factory('player/index')->bind('players', $players);
	}

	public function action_create()
	{
		$teams = ORM::factory('Team')->find_all();
		$this->template->view = View::factory('player/create')->bind('teams', $teams);
	}

	public function action_store()
	{
		if (strtolower($this->request->method()) == 'post') {
			$post = $this->request->post();

			$validate = Validation::factory($this->request->post());
			$validate->rule('name', 'not_empty');
			$validate->rule('name', 'min_length', array(':value', 3));
			$validate->rule('name', 'max_length', array(':value', 64));
			$validate->rule('team', 'digit');
			$validate->rule('team', 'min_length', array(':value', 1));

			if ($validate->check())
			{
				$player = ORM::factory('Player');
				$count = $player->where('name', '=', $post['name'])->count_all();
				if ($count == 0) {
					$player->name = $post['name'];
					$player->id_team = $post['team'];
					$player->save();
					$this->redirect('player/index', 302);
				}
				else
				{
					// Duplicated values, throw an error
				}
			}

			// to do - throw errors
			$this->redirect('player/create', 302);
		}
	}

	public function action_edit()
	{
		$session = Session::instance();
		$success = $session->get_once('success');
		$id = (int) $this->request->param('id');
		$player = ORM::factory('player', $id);

		$teams = ORM::factory('team')->find_all();
		$this->template->view = View::factory('player/edit')
							->bind('player', $player)
							->bind('success', $success)
							->bind('teams', $teams);
	}

	public function action_update()
	{
		$id = (int) $this->request->param('id');
		// Validation again, I should find a way to uncapsulate this
		$validate = Validation::factory($this->request->post());
		$validate->rule('name', 'not_empty');
		$validate->rule('name', 'min_length', array(':value', 3));
		$validate->rule('name', 'max_length', array(':value', 64));
		$validate->rule('team', 'digit');
		$validate->rule('team', 'min_length', array(':value', 1));

		if ($validate->check())
		{
			$player = ORM::factory('player', $id);
			$player->name = $this->request->post('name');
			$player->id_team = $this->request->post('team');
			$player->save();
			if ($player->saved()) {
				$session = Session::instance();
				$session->set('success', 'Промяната на играча беше успешна');
				$this->redirect('player/edit/' . $id);
			}
		}
		// validation failed, throw an error
		$this->redirect('player/edit/' . $id);
		
	}

	public function action_delete()
	{
		$id = (int) $this->request->param('id');
		$player = ORM::factory('player')->where('id', '=', $id)->count_all();
		if ($player == 1)
		{
			$player = ORM::factory('player', $id);
			$player->delete();
		}
		$this->redirect('player/index');
	}

}