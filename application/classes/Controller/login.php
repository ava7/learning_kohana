<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_Template_Login {

	public function before()
	{
		parent::before();

		
		// $user = ORM::factory('user');
		// $user->username = 'user';
		// $user->password = 'pass';
		// //$user->password = Arr::get($this->request->post(), 'pass');
		// $user->save();
		
		if ( ! Auth::instance()->logged_in() AND $this->request->action() !== 'login')
		{
			$this->redirect('login/login', 302);
		}
		else
		{
			//$this->redirect('team', 302);
		}
	}

	public function action_index()
	{
		$this->template = View::factory('guest');
		if (strtolower($this->request->method()) == 'post')
		{
			$validate = Validation::factory($this->request->post());
			$validate->rule('username', 'not_empty');
			$validate->rule('username', 'min_length', array(':value', 3));
			$validate->rule('username', 'max_length', array(':value', 32));
			$validate->rule('password', 'not_empty');
			$validate->rule('password', 'min_length', array(':value', 4));
			$validate->rule('password', 'max_length', array(':value', 64));


			if ($validate->check())
			{
				$success = Auth::instance()->login($this->request->post('username'), $this->request->post('password'));


				if ($success)
				{
					$this->redirect('team');
				}
				else
				{
					$error = 'Грешно име или парола';
				}
			}
		}


		$this->template->view = View::factory('login/login')->bind('error', $error);
	}

}
