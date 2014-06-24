<?php
$level = 3;
require_once '../../../core/init.php';
$err = array();
if(Input::exists()) {

    $validate = new Validate();
    $validation = $validate->check($_POST, array(
      'top' => array('required' => true)
    ));

    if($validation->passed()) {

     $update =  DB::getInstance()->update('slide',array('id','=',Session::get('idImage')), array('scale' => Input::get('top')));

     if($update) {

      echo 'success';
     }else {
      echo 'gagal';
      die();
     }


    } else {
      foreach ($validation->errors() as $error) {
        echo $error, '<br>';
      }
    }

  }

?>