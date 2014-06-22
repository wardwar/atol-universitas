<?php
$level = 1;
require_once '../core/init.php';

// head
include '../includes/overall/header.php';
// end head
?>

<?php

if(Input::exists()) {
	if(Token::check(Input::get('token'))) {
		$validate = new Validate();
		$validation = $validate->check($_POST, array(
			'nip' => array(
				'required' => true,
				'min' => 11,
				'max' => 18,
				'unique' => 'dosen',
				'preg' => '/^[0-9]+$/'
				),
			'nama' => array(
				'required' => true,
				'min' => 6
				),
			'jabatan' => array(
				'required' => true,
				),
			));

		$validation = $validate->check($_FILES, array(
			'photo' => array(
				'required' => true,
				'allowed'	=> array(
					'jpg',
					'jpeg',
					'png')
				)
			));

		if($validation->passed()) {
			$dosen = new Dosen();
			$file = Input::get('photo');
			$file_name = $file['name'];
			$file_temp = $file['tmp'];
			$file_extn = explode('.', $file_name);
			$extn = strtolower(end($file_extn));
			$file_hash_name = substr(md5(time()) , 0 , 10) . '.' . $extn;

			$file_path = '../assets/dosen/' . $file_hash_name;
			move_uploaded_file($file_temp, $file_path);


			try {

				$dosen->create('dosen',array(
					'nip' => Input::get('nip'),
					'nama' => Input::get('nama'),
					'jabatan' => Input::get('jabatan'),
					'photo' => $file_hash_name
					));

				Session::flash('success', 'dosen berhasil di submit!');
				Redirect::to('index.php');

			} catch(Exception $e) {
				die($e->getMessage());
			}
			
		} else {
			foreach ($validation->errors() as $error) {
				echo $error, '<br>';
			}
		}
	}
}
?>
<body id="admin">
<form action="" method="post" enctype="multipart/form-data">
	<div class="field">
		<label for="nip">NIP</label>
		<input type="text" name="nip" value="<?php echo escape(Input::get('nip')); ?>" autocomplete="off">
	</div>

	<div class="field">
		<label for="nama">Nama</label>
		<input type="text" name="nama"  value="<?php echo escape(Input::get('nama')); ?>" autocomplete="off">
	</div>

	<div class="field">
		<label for="jabatan">Jabatan</label>
		<select class="form-control" name="jabatan">
		  <option value="0">select</option>
		  <option value="T">Dosen Tetap</option>
		  <option value="TP">Dosen Tidak Tetap</option>
		  <option value="LB">Dosen Luar Biasa</option>
	</select>
	</div>

	<div class="field">
		<label for="photo">Photo</label>
		<input type="file" name="photo" value="">
	</div>

	<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
	<input type="submit" value="submit">
	
</form>





<?php
include '../includes/overall/footer.php';
?>