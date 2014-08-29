<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Search extends Controller_Login {

	public function action_index()
	{
		if (strtolower($this->request->method()) == 'post')
		{
			$term = strip_tags(HTML::chars($this->request->post('term')));
			$controller = (int) $this->request->post('controller');
			$where = ($controller == 1) ? 'team' : 'player';
			if ($controller == 1)
			{
				$where = 'team';
				$for = 'country';
			}
			else
			{
				$where = 'player';
				$for = 'name';
			}


			if (strlen($term) > 2)
			{
				$query = DB::select($for .' AS name', 'id')
						->from($where)
						->where($for, 'like', '%'.$term.'%');
				$results = $query->execute();
			}
		}
		$this->template->view = View::factory('search/index')
					->bind('controller', $where)
					->bind('results', (isset($results) ? $results->as_array() : null));

	}

}