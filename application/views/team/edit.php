<?php
if ($success)
	echo $success;

echo Form::open('team/update/' . $team->id);

echo Form::label('country', 'oтбор');
echo Form::input('country', $team->country, array('placeholder' => 'име на държавата'));

echo Form::submit(null, 'промени');

echo Form::close();

?>

<a href="<?php echo URL::base() ?>team">назад</a>
