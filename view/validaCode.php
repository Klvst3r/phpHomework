<?php

include '../controller/UserController.php';

include '../helps/helps.php';



header('Content-type: application/json');



$result = array();

if($_SERVER["REQUEST_METHOD"] == "POST"){

	if(isset($_POST["user_name"]) && isset($_POST["user_password"])){

		$user_name = validate_field($_POST["user_name"]);
		$user_password = validate_field($_POST["user_password"]);

		/*$user_name = $_POST["user_name"];
		$user_password = $_POST["user_password"];*/

		$result = array("status" => "true");

		if(UserController::login($user_name, $user_password)){
		//return print "Logeado";
			//return print(json_encode($result));
			$user  = UserController::getUser($user_name, $user_password);
			echo $user->getUser_name();
		}


	}

}//if $_SERVER

$result = array("status" => "false");
return print(json_encode($result));


