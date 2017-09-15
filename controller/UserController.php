<?php 
//After generating the entity we create the controller
//we import UserDao to use it in the defined class
include '../data/UserDAO.php';
class UserController {
	//defining the fncion with two parameters, packages the user and password in an object called entity user
	// and will send it to UserID to validate it
	public static function login($user_name, $password) {
		//It is instantiated and not imported because it is already added from the entity
		$obj_user = new User();
		//We send the object to the user from the application
		$obj_user->setUser_name($user_name);
		$obj_user->setUser_password_hash($password);
		//The class we send by the method the parameters of the object (user and password) as parameters of the method
		//returning the result of the operation
		return UserDAO::login($obj_user);
	}

	// We get the data from the database
	public function getUser($user_name, $user_password){

		$obj_user = new User();
		
		$obj_user->setUser_name($user_name);
		$obj_user->setUser_password_hash($user_password);
		//We send the object from UserDAO
		return UserDAO::getUser($obj_user);

	}

	/*function tableUsers(){
		echo "Estamos en UserControls";
	}*/


	public function registrar($nombre, $email, $user_name, $password, $privilegio){

		$obj_user = new User();
		
		$obj_user->setNombre($nombre);
		$obj_user->setEmail($email);
		$obj_user->setUser($user_name);
		$obj_user->setPassword($password);
		$obj_user->setId_Priv($id_priv);

		//We send the object from UserDAO
		return UserDAO::registrar($obj_user);

	}




}

 ?>