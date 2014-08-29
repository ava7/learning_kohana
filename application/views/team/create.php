<?php

echo Form::open('team/store');

echo Form::label('country', 'oтбор');
echo Form::input('country', '', array('placeholder' => 'име на държавата'));

echo Form::submit(null, 'добави');

echo Form::close();