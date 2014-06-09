<?php
$level = 2;
require_once '../../core/init.php';
$err = array();
if(Input::exists()) {

    $validate = new Validate();
    $validation = $validate->check($_POST, array(
      'username' => array('required' => true),
      'password' => array('required' => true)
    ));

    if($validation->passed()) {
      $user = new User();
      $login = $user->login(Input::get('username'), Input::get('password'));

     
      if($login) {
        echo 'success';
      } else {
        echo 'Login gagal, silahkan periksa username atau password!';
      }

    } else {
      foreach ($validation->errors() as $error) {
        echo $error, '<br>';
        $err[] = $error;
      }
    }

  }

?>