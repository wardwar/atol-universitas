<?php
$level = 3;
require_once '../../../core/init.php';
$err = array();
if(Input::exists()) {



    $validate = new Validate();
    $validation = $validate->check($_POST, array(
      'namaGambar' => array(
        'required' => true,
        'max' => 30,
        'min' =>5,
        'nama' => 'Nama Gambar'
        ),
      'deskripsiGambar' => array(
        'required' => true,
        'max' => 50,
        'min' => 5,
        'nama' => 'Deskripsi Gambar')
    ));

    $validation = $validate->check($_FILES, array(
      'fileGambar' => array(
        'required' => true,
        'nama' => 'File Gambar',
        'allowed' => array(
          'jpg',
          'jpeg',
          'png')
        )
      ));


    if($validation->passed()) {
      $slide = new Create();
      $file = Input::get('fileGambar');
      $file_name = $file['name'];
      $file_temp = $file['tmp'];
      $file_extn = explode('.', $file_name);
      $extn = strtolower(end($file_extn));
      $file_hash_name = substr(md5(time()) , 0 , 10) . '.' . $extn;

      $file_path = '../../../assets/slide/' . $file_hash_name;
      move_uploaded_file($file_temp, $file_path);


      try {

        $slide->create('slide',array(
          'nama' => Input::get('namaGambar'),
          'deskripsi' => Input::get('deskripsiGambar'),
          'path' => $file_hash_name
          ));

        echo 'success';
        echo $_FILES['fileGambar']['name'];

      } catch(Exception $e) {
        die($e->getMessage());
      }
      
    } else {
      foreach ($validation->errors() as $error) {
        echo $error, '<br>';
        $err[] = $error;
        echo $_FILES['fileGambar']['name'];
      }
    }

  } else {
    echo 'Maaf tidak dapat Diproses.';
  }

?>