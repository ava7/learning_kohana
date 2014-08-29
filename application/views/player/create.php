<?php

echo Form::open('player/store');

echo Form::label('name', 'футболист');
echo Form::input('name', '', array('placeholder' => 'име на играч'));

echo Form::label('team', 'отбор');
if (count($teams))
{
	echo '<select name="team">';
	echo '<option value="0">-- моля изберете --</option>';
	foreach ($teams as $team)
	{
		echo '<option value="' . $team->id . '">' . $team->country . '</option>';
	}
	echo '</select>';
}

echo Form::submit(null, 'добави');

echo Form::close();