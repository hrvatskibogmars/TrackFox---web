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

		if ($request->action == "register_device") {
			//SPREMI U BAZU PODATKE O NOVOM UREĐAJU

		}
		if ($request->action == "save_statistics") {
			//SPREMI U BAZU PODATKE O UREĐAJU

		}
		if ($request->action == "validation") {
			//PROVJERI DA LI SE UREĐAJ SMIJE SPOJITI



			//AKO UREĐAJ NEPOSTOJI U BAZI ONDA GA PREUSMJERI NA REGISTRACIJU TOG UREĐAJA -> REGISTER DEVICE

		}
		if ($request->action == "unauthenticated") {
			//PPRIMA PODATKE O GPS LOKACIJI AUTOMOBILA KOJI JE UKRAĐEN
			//my precious they stole it from us
			//Nasty little thieves, they stole our precious
		}
	}
?>