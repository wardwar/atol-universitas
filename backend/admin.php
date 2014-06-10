<?php

$level = 1;
require_once '../core/init.php';

// global 
$user = new User();
// end global

if(!$user->isLoggedIn()){
	Redirect::to(Url::base().'login');
	die();
}elseif($user->isLoggedIn()) {

	include '../includes/overall/header.php'; //overall header
?>
	<body id="body-administrator">

	    <?php 
	    include 'includes/cuts/top-navbar.php';  //static top navbar
 		include 'includes/cuts/side-menu.php'; 	 //static left side menu
		include 'includes/cuts/page-header.php'; //page header

		// admin content
		include 'includes/process/admin-content.php';
		// end admin content
 		include 'includes/cuts/footer.php'; //footer
}
?>