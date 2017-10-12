<?php
//After generating the entity we create the controller
//we import TaskDao to use it in the defined class
include '../data/TaskDAO.php';
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

	//UserController::regPirvilege($user_name, $user_password, $user_email, $name, $privilege, $date_reg);
	public function regUser($user, $pass, $email, $name, $priv, $date){
		//1. Ceerate Object to Work
		$obj_user = new User();

		/*
		 *

	public function setName($name){
		$this->name = $name;
	}

	public function setUser_name($user_name){
		$this->user_name = $user_name;
	}

	public function setUser_email($user_email){
		$this->user_email = $user_email;
	}

	public function setUser_password_hash($user_password_hash){
		$this->user_password_hash = md5($user_password_hash);
	}

	public function setId_Priv($id_priv){
		$this->id_priv = $id_priv;
	}

	public function setDate_reg($date_reg){
		$this->date_reg = $date_reg;
	}
		 */
		//Set data to te model
		$obj_user->setName($name);
		$obj_user->setUser_name($user);
		$obj_user->setUser_email($email);
		$obj_user->setUser_password_hash($pass);
		$obj_user->setId_Priv($priv);
		$obj_user->setDate_reg($date);

		//We send the object from UserDAO
		//return UserDAO::regUser($obj_user);
		/*echo "Username: " . $name . "<br/>";
		echo "Name: " . $user . "<br/>";
		echo "Email: " . $email . "<br/>";
		echo "Password: " . $pass . "<br/>";
		echo "Privilege: " . $priv . "<br/>";
		echo "Date: " . $date . "<br/>";*/

		//We send the object from UserDAO
		return UserDAO::regUser($obj_user);


	}//Function regUSer

	public function changePass($id, $lastPass, $pass, $rewPass){
		//1. Ceerate Object to Work
		$obj_user = new User();

		$obj_user-> setId_user($id);
		$obj_user->	setUser_password_hash($lastPass);
		$obj_user-> setNew_pass($pass);
		$obj_user->	setRewrite_pass($rewPass);

		//We send the object from UserDAO
		return UserDAO::changePass($obj_user);

	}//Function

	public function updateUser($id, $user, $pass, $email, $name, $priv){
		//1. Ceerate Object to Work
		$obj_user = new User();

		
		//Set data to te model
		$obj_user-> setId_user($id);
		$obj_user->setName($name);
		$obj_user->setUser_name($user);
		$obj_user->setUser_email($email);
		$obj_user->setUser_password_hash($pass);
		$obj_user->setId_Priv($priv);
		

		//We send the object from UserDAO
		return UserDAO::updateUser($obj_user);


	}//Function regUSer

	


}

 ?>
