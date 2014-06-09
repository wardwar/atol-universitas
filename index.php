<?php
$level = 0;
require_once 'core/init.php';

$data = Input::get('id');

$data = DB::getInstance()->get('dosen',array('id','=',$data));

echo $data->first()->nama;

$dosen = DB::getInstance()->query("SELECT * FROM dosen");

echo "<img src='assets/dosen/" . $dosen->results()[4]->photo. "'>";