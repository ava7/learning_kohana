<?php

echo Form::open('login/index');

echo Form::label('username', 'Име');
echo Form::input('username', '', array('placeholder' => 'електронна поща'));

echo '<br>';

echo Form::label('password', 'парола');
echo Form::input('password', '', array('placeholder' => 'парола'));

echo '<br>';

echo Form::submit(null, 'влез');

echo Form::close();

if (isset($error))
	echo '<h2>' . $error . '</h2>';