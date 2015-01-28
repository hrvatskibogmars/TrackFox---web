<?php
	include_once('connectConfig.php');


	//DEVICE TABLICA
	//id_device
	//name
	//date - datum registracije
	//last_used
	//status -activated, deactivated, unconfirmed


	//USERS TABLICA
	//id
	//name
	//surname
	//username
	//email
	//password

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$postdata = file_get_contents("php://input");
		$request = json_decode($postdata);

		$device = R::dispense('devices');
		$device->lat = $request->lat;
		$device->long = $request->long;
		$device->datetime = $request->datetime;
		$device->deviceid = $request->deviceid;
		$device->sessionid = $request->sessionid;

		$id = R::store($device);
		}
	}
?>