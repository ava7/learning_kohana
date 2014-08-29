<?php

if (count($teams))
{
	echo '<h2>класирали се отбори</h2>';

	foreach ($teams as $team)
	{
		echo '<p>' . $team->country . '</p>';
	}
}

?>

<a href="<?php echo URL::base() ?>games/create">започни първество</a>
<hr/>
<?php
echo isset($error)
		? $error . ' <a href="' . URL::base() . 'team/create">Добави отбор?</a>'
		: null;
?>