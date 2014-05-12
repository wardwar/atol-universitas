<?php
require_once 'core/init.php';

$user = DB::getInstance()->query("SELECT username FROM users WHERE username = ?", array('wildan'));

if($user->error()) {
	echo 'False';
} else {
	echo 'True';
}
