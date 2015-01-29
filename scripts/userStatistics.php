<?php
	include_once('connectConfig.php');

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$postdata = file_get_contents("php://input");
		$request = json_decode($postdata);

		if ($request->action == "userStatistics") {
			$config = R::getAll("select * from devices");
			echo json_encode($config);
		}
	}
?>