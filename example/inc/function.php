<?php
function error_field($erreurs, $input){
	if(count($_POST) > 0){
		$message = '';

		if(array_key_exists($input, $erreurs)){

			$message = $erreurs[$input];
		 }

		return $message;
	}
}

$erreurs = [];

if($_POST){
	$username = trim(strip_tags($_POST['username']));
	$password = trim(strip_tags($_POST['password']));

	if($username == ""){
		$erreurs['username'] = 'username est vide.';
	}

	if ($password == "") {
		$erreurs['password'] = 'password est vide.';
	}

	if(count($erreurs) == 0){

		foreach ($users as $user) {
			if ($user['username'] == $username) {

				if ($user['password'] == $password) {
					$_SESSION['current_user'] = array('username' => $user['username'], 'role' => $user['role'], 'name' => $user['name'] );
				} else {
					$erreurs['statut'] = 'L\'username et le mot de passe de corresponde pas';
				}

			} else {
				$erreurs['statut'] = 'L\'utilisateur n\'existe pas !';
			}
		}
	}
}