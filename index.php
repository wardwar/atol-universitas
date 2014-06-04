<?php
require_once 'core/init.php';

DB::getInstance()->insert('users',array(
	'username' => 'wildan',
	'password' => 'wildan',
	'salt' => 'salt',
	'name'=> 'wildan'));

		