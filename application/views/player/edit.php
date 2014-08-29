<?php
if ($success)
	echo $success;

echo Form::open('player/update/' . $player->id);

echo Form::label('name', 'футболист');
echo Form::input('name', $player->name, array('placeholder' => 'име на играч'));

echo Form::label('team', 'отбор');
if (count($teams))
{
	echo '<select name="team">';
	echo '<option value="0">-- моля изберете --</option>';
	foreach ($teams as $team)
	{
		echo '<option ';
		echo ($player->team->id == $team->id) ? 'selected' : null;
		echo ' value="' . $team->id . '">' . $team->country . '</option>';
	}
	echo '</select>';
}

echo Form::submit(null, 'промени');

echo Form::close();