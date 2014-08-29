<?php
if (count($players))
{
	echo '<table>';
	foreach ($players as $player)
	{
		echo '<tr>';
		echo '<td>' . $player->name . '</td>
			<td><a href="' . URL::base() . 'player/edit/' . $player->id . '">редакция</a></td>
			<td><a href="' . URL::base() . 'player/delete/' . $player->id . '">изтрий</a></td>';
		echo '</tr>';
	}
	echo '</table>';
}
else
{
	echo '<p>Няма добавени играчи.</p>';
}


?>

<a href="<?php echo URL::base() ?>player/create">добавяне</a>
