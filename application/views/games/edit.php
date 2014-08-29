<?php

echo Form::open('games/update/' . $game['id']);

echo $game['team_one_country'] . ' срещу ' . $game['team_two_country'];

echo '<br>';

echo Form::label('score', 'резултат');
echo Form::input('score', $game['score'], array('placeholder' => '0:0'));

?>
<label for="winner">победител</label>
<select name="winner">
	<option value="0">-- моля изберете победител --</option>
	<?php
	echo '<option '
		. ($game['winner'] == $game['team_one'] ? 'selected' : null)
		.' value="'.$game['team_one'].'">'.$game['team_one_country'].'</option>';
	echo '<option '
		. ($game['winner'] == $game['team_two'] ? 'selected' : null)
		. ' value="'.$game['team_two'] .'">'.$game['team_two_country'] .'</option>';
	?>
</select>

<input type="datetime" name="game_starts" placeholder="" value="<?php echo $game['game_starts'] ?>" />

<input type="submit" value="промени">
</form>