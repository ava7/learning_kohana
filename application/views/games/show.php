<?php

if (count($rounds))
{
	// Loop games through rounds
	foreach ($rounds as $key => $round)
	{
		echo '<div style="float:left">';
		echo '<h2>Кръг ' . $key .'</h2>';
		foreach ($round as $game)
		{
			echo '<div style="border: 1px solid #000; width: 200px; margin: 3px;">';
			echo $game['team_one_country'] . '<br/>'
				. $game['team_two_country'] . '<br/>';
			echo isset($game['score']) ? $game['score'] : $game['game_starts'];
			echo '<br>';
			echo '<a href="' . URL::base() . 'games/edit/' . $game['id'] . '">добави инфо</a>';
			echo '</div>';		
		}
		echo '</div>';
	}
}