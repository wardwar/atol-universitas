<?php
require_once 'core/init.php';

$user = DB::getInstance()->query('SELECT * FROM users');

if(!$user->count()) {
	echo 'no record';
} else {
	foreach ($user->results() as $user) {
		echo $user->username, '<br>';
	}
}



