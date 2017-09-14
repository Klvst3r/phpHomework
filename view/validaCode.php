<?php

include '../controller/UserController.php';

include '../helps/helps.php';

session_start();

header('Content-type: application/json');



$result = array();

if($_SERVER["REQUEST_METHOD"] == "POST"){

	if(isset($_POST["user_name"]) && isset($_POST["user_password"])){

		$code = $_POST["code"];
		$user_name = validate_field($_POST["user_name"]);
		$user_password = validate_field($_POST["user_password"]);

		/*$user_name = $_POST["user_name"];
		$user_password = $_POST["user_password"];*/

		$result = array("status" => "true");

		if(UserController::login($user_name, $user_password)){
		//return print "Logeado";
			

			$user  = UserController::getUser($user_name, $user_password);
			
			//echo $user->getUser_name();
			$_SESSION["user"] = array (
				"id_user"		=> $user->getId_user(),
				"name"			=> $user->getName(),
				"user_name"		=> $user->getUser_name(),
				"user_email"	=> $user->getUser_email(),
				"privilege"		=> $user->getPrivilege(),
				"code"			=> $code,
				"op"      		=> "false",
				"url" 			=> "/dev/phpHomework"
				
			);//$_SESSION

			return print(json_encode($result));
			
		}//if $UserController


	}

}//if $_SERVER

$result = array("status" => "false");
return print(json_encode($result));


