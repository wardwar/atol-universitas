<?php
$level = 0;
require_once 'core/init.php';

$user = new User();
$user->logout();

Redirect::baseUrl();
