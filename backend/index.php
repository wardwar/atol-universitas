<?php
$level = 1;
require_once '../core/init.php';

$user = new User();

if($user->isLoggedIn()) {
	Redirect::to(Url::base().'admin');
} else if(!$user->isLoggedIn()) {
	Redirect::to(Url::base().'login');
}

?>