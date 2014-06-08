<?php
$level = 0;
require_once 'core/init.php';

$user = new User();
if($user->isLoggedIn()):
?>
<a href="logout.php">logout</a>
<?php
endif;
