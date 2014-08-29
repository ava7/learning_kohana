<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Team extends Controller_Login {

	public function action_index()
	{
		$count = ORM::factory('Team')->count_all();
		if ($count != 0)
		{
			$teams = ORM::factory('Team')->find_all();
		}

		$this->template->view = View::factory('team/index')->bind('teams', $teams);
	}

	public function action_create()
	{
		$this->template->view = View::factory('team/create');
	}

	public function action_store()
	{
		if (strtolower($this->request->method()) == 'post')
		{
			$post = $this->request->post();
			$validate = Validation::factory($this->request->post());
			$validate->rule('country', 'not_empty');
			$validate->rule('country', 'min_length', array(':value', 3));
			$validate->rule('country', 'max_length', array(':value', 64));

			if ($validate->check())
			{
				$team = ORM::factory('Team');
				$count = $team->where('country', '=', $post['country'])->count_all();
				if ($count == 0) {
					$team->country = $post['country'];
					$team->save();
					$this->redirect('team/index', 302);
				}
				else
				{
					// Duplicated values, throw an error
				}
			}

			// to do - throw errors
			$this->redirect('team/create', 302);
		}
	}

	public function action_edit()
	{
		$session = Session::instance();
		$success = $session->get_once('success');
		$id = (int) $this->request->param('id');
		$team = ORM::factory('Team', $id);
		$this->template->view = View::factory('team/edit')
							->bind('team', $team)
							->bind('success', $success);
	}

	public function action_update()
	{
		$id = (int) $this->request->param('id');
		$team = ORM::factory('Team')->
				where('country', '=', $this->request->post('country'))
				->count_all();
		if ($team == 0)
		{
			// Validation again, I should find a way to uncapsulate this
			$validate = Validation::factory($this->request->post());
			$validate->rule('country', 'not_empty');
			$validate->rule('country', 'min_length', array(':value', 3));
			$validate->rule('country', 'max_length', array(':value', 64));

			if ($validate->check())
			{
				$team = ORM::factory('Team', $id);
				$team->country = $this->request->post('country');
				$team->save();
				if ($team->saved()) {
					$session = Session::instance();
					$session->set('success', 'Успешна промяна');
					$this->redirect('team/edit/' . $id);
				}
			}
			// validation failed, throw an error			
		}
		// Duplicate records
		$this->redirect('team/edit/' . $id);
		
	}

	public function action_delete()
	{
		$id = (int) $this->request->param('id');
		$team = ORM::factory('Team')->where('id', '=', $id)->count_all();
		if ($team == 1)
		{
			$team = ORM::factory('Team', $id);
			$team->delete();
		}
		$this->redirect('team/index');
	}

}