<?php
include_once('connectConfig.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	
		$device = R::dispense('devices');
		$device->deviceid = $_POST['deviceid'];
		$device->sessionid = $_POST['sessionid'];
		$device->lat = $_POST['lat'];
		$device->long = $_POST['long'];
		$device->datetime = date('H:i:s d-m-Y');;

		//$exists = R::findOne( 'devices', 'deviceid = :deviceid ', array( ":deviceid" => $device->deviceid ));
		//if ($exists) {
			//echo "Device ID is taken";
			//exit(0);
		//}

		//if(!$exists)
		//{
		$id = R::store($device);
		header("Location:../account.html");

		//echo json_encode($device);

}
	//ini_set('display_errors', 1);
?>