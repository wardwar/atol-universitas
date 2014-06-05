<?php
$level = 1;
require_once 'core/init.php';

$user = new User();
$user->logout();

Redirect::baseUrl();
