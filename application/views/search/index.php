<?php

echo Form::open('search');

echo Form::label('term', 'Какво ти трябва?');
echo Form::input('term');
?>
<select name="controller">
	<option value="1">отбор</option>
	<option value="2">играч</option>
</select>
<?php
echo Form::submit(null, 'търси');

echo Form::close();

if (count($results))
{
	echo '<h2>Намерени резултати</h2>';
	foreach ($results as $key => $result)
	{
		echo HTML::anchor($controller.'/edit/'.$result['id'], $result['name']);
	}
}