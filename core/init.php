<?php
session_start();

$GLOBALS['config'] = array(
	'mysql' => array(
		'host' => '127.0.0.1',
		'username' => 'root',
		'password' => '',
		'db' => 'universitas'
	),
	'remember' => array(
		'cookie_name' => 'hash',
		'cookie_expire' => 604800
	),
	'session' => array(
		'session_name' => 'user',
		'token_name' => 'token'
		)
);

if($level == 3) {
spl_autoload_register(function($class){
	require_once '../../../classes/' . $class . '.php';
});

require_once '../../../functions/sanitize.php';

}
else if($level == 2) {
spl_autoload_register(function($class){
	require_once '../../classes/' . $class . '.php';
});

require_once '../../functions/sanitize.php';

} else if($level == 1){
spl_autoload_register(function($class){
	require_once '../classes/' . $class . '.php';
});

require_once '../functions/sanitize.php';

} else if ($level == 0){
	spl_autoload_register(function($class){
	require_once 'classes/' . $class . '.php';
});

require_once 'functions/sanitize.php';
}
