<?php
	include_once('connectConfig.php');

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$postdata = file_get_contents("php://input");
		$request = json_decode($postdata);

		if ($request->action == "userDevice") {
			$users= R::getAll("select * from users");
			echo json_encode($users);
		}
	}
?>