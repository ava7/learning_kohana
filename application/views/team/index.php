<?php
if (count($teams))
{
	echo '<table>';
	foreach ($teams as $team)
	{
		echo '<tr>';
		echo '<td>' . $team->country . '</td>
			<td><a href="' . URL::base() . 'team/edit/' . $team->id . '">редакция</a></td>
			<td><a href="' . URL::base() . 'team/delete/' . $team->id . '">изтрий</a></td>';
		echo '</tr>';
	}
	echo '</table>';
}
else
{
	echo '<p>Няма добавени играчи.</p>';
}
?>

<a href="<?php echo URL::base() ?>team/create">добавяне</a>
