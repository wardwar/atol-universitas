<?php
$level = 3;
require_once '../../../core/init.php';
if(Input::exists()) {



    $validate = new Validate();
    $validateFile = new Validate();
    $validationFile = $validateFile->check($_FILES, array(
      'fileGambar' => array(
        'required' => true,
        'nama' => 'File Gambar',
        'allowed' => array(
          'jpg',
          'jpeg',
          'png')
        )
      ));

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



    if($validation->passed() && $validationFile->passed()) {
      $slide = new Create();
      $file = Input::get('fileGambar');
      $file_name = $file['name'];
      $file_temp = $file['tmp'];
      list($width, $height) = getimagesize($file_temp);
      $file_extn = explode('.', $file_name);
      $extn = strtolower(end($file_extn));
      $file_hash_name = substr(md5(time()) , 0 , 10) . '.' . $extn;

      $file_path = '../../../assets/slide/' . $file_hash_name;
      move_uploaded_file($file_temp, $file_path);


      try {

        $slide->create('slide',array(
          'nama' => Input::get('namaGambar'),
          'deskripsi' => Input::get('deskripsiGambar'),
          'path' => $file_hash_name,
          'scale' => '0',
          'width' => $width,
          'height' => $height,
          'active' => '0'
          ));

        Session::put('path',$file_hash_name);
        Session::put('idImage',DB::getInstance()->insertId());
        Session::flash('success','Silahkan Drag Gambar yang di tampilkan');
        Redirect::to(Url::base().'admin/slide');

      } catch(Exception $e) {
        die($e->getMessage());
      }

    } else {
      $error = array();
      foreach ($validation->errors() as $key) {
        $error[] = $key;
      }
      foreach ($validationFile->errors() as $key) {
        $error[] = $key;
      }

      Session::flash('error',$error);
      Redirect::to(Url::base().'admin/slide');

    }

  } else {
    echo 'Maaf tidak dapat Diproses.';
  }

?>