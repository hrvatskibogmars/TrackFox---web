<?php
	include_once('connectConfig.php');
	date_default_timezone_set('Europe/Zagreb');

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
	//echo $_POST["deviceid"];
	//echo json_encode($_POST);
	//file_put_contents('myTextFile.txt', "hey request");

/*


$message=$_POST["deviceid"];

$filename = "omg.html";

file_put_contents($filename, $message . "<br />", FILE_APPEND);
$androidmessages = file_get_contents($filename);

echo $androidmessages; 
*/




if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	//$postdata = file_get_contents("php://input");
	//$request = json_decode($postdata);
	//echo json_encode($request);

	$device = R::dispense('devices');
	$device->lat = $_POST["lat"]; //$request->lat;
	$device->long = $_POST["long"]; //$request->long;
	$device->datetime = time(); //$request->datetime;
	$device->deviceid = $_POST["deviceid"]; //$request->deviceid;
	$device->sessionid = $_POST["sessionid"]; //$request->sessionid;

	$debug = $_POST["deviceid"] . "\t" . $_POST["lat"] . "\t" . $_POST["long"];
	file_put_contents('test_api.html', $debug . "<br />", FILE_APPEND);

	$id = R::store($device);
	echo $id;

}

?>
