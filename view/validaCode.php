<?php

include '../controller/UserController.php';



header('Content-type: application/json');



$result = array();

if(isset($_POST["user_name"]) && isset($_POST["user_password"])){

	$user_name = $_POST["user_name"];
	$user_password = $_POST["user_password"];

	$result = array("status" => "true");

	if(UserController::login($user_name, $user_password)){
		//return print "Logeado";
		return print(json_encode($result));
	}


}

$result = array("status" => "false");
return print(json_encode($result));


