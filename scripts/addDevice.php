<?php
include_once('connectConfig.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);

		$user = R::dispense('users');
		$user->deviceid = $_POST['deviceid'];
		$user->name = $_POST['name'];

		$id = R::store($user);
		//echo json_encode($config);
		header("Location:../account.html");
	}
?>