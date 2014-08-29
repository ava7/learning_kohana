<?php defined('SYSPATH') or die('No direct script access.');
 
abstract class Controller_Template_Base extends Controller_Template 
{

	public function before()
	{
		parent::before();
		$this->template->content = View::factory('template');
	}
 
}
