<?php
/**
 * Created by PhpStorm.
 * User: Emil
 * Date: 25.1.2015.
 * Time: 2:38
 */

include_once('connectConfig.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$user = R::dispense('users');
	$user->name = $_POST['name'];
	$user->surname = $_POST['surname'];
	$user->username = $_POST['username'];
	$user->email = $_POST['email'];
	$user->password = $_POST['password'];

	//$id = R::store($user);
	//$user = R::load('users', $id);
	//echo $user->name;



	$exists = R::findOne( 'users', 'email = :email ', array( ":email" => $user->email ));
	if ($exists) {
		echo "Email already exists";
		exit(0);
	}

	$user->username = $_POST['username'];
        // Server side validacija
	$exists = R::findOne( 'users', 'username = :username', array( ":username" => $user->username));
	if ($exists) {
		echo "Username already exists";
		exit(0);
	}

	if(!$exists)
	{
		$id = R::store($user);

		//$user = R::load('users');
		//echo $user->name;

		header("Location:../login.html");
	}
}
ini_set('display_errors', 1);
?>