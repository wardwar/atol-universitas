<?php
$level = 1;
require_once '../core/init.php';

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

				$user->create('users',array(
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

<form action="" method="post">
	<div class="field">
		<label for="username">Username</label>
		<input type="text" name="username" id="username" value="<?php echo Input::get('username'); ?>" autocomplete="off">
	</div>

	<div class="field">
		<label for="password">Password</label>
		<input type="password" name="password" id="password" value="" autocomplete="off">
	</div>

	<div class="field">
		<label for="retype">Ulangi Password</label>
		<input type="password" name="retype" id="retype" value="" autocomplete="off">
	</div>

	<div class="field">
		<label for="name">Nama</label>
		<input type="text" name="name" id="name" value="<?php echo Input::get('name'); ?>" autocomplete="off">
	</div>
	<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
	<input type="submit" value="Register">
	
</form>
