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
			'username' => array(
				'required' => true,
				'min' => 4,
				'max' => 20,
				'unique' => 'users'
				),
			'password' => array(
				'required' => true,
				'min' => 6
				),
			'retype' => array(
				'required' => true,
				'matches' =>'password'
				),
			'name' => array(
				'required' => true,
				'min' => 2,
				'max' => 50
				)
			));

		if($validation->passed()) {
			$user = new User();

			$salt = Hash::salt(32);

			try {

				$user->create(array(
					'username' => Input::get('username'),
					'password' => Hash::make(Input::get('password'), $salt),
					'salt' => $salt,
					'name' => Input::get('name')
					));

				Session::flash('success', 'Berhasil Register!');
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

<form action="" method="post" enctype="multipart/form-data">
	<div class="field">
		<label for="nip">NIP</label>
		<input type="text" name="nip" value="<?php echo Input::get('nip'); ?>" autocomplete="off">
	</div>

	<div class="field">
		<label for="nama">Nama</label>
		<input type="text" name="nama"  value="<?php echo Input::get('nama'); ?>" autocomplete="off">
	</div>

	<div class="field">
		<label for="jabatan">Jabatan</label>
		<input type="text" name="nama"  value="<?php echo Input::get('jabatan'); ?>" autocomplete="off">
	</div>

	<div class="field">
		<label for="photo">Photo</label>
		<input type="file" name="photo" value="">
	</div>
	
	<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
	<input type="submit" value="Register">
	
</form>





<?php
include '../includes/overall/footer.php';
?>