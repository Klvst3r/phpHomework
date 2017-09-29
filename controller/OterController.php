<?php
//After generating the entity we create the controller
//we import UserDao to use it in the defined class
include '../data/OterDAO.php';

class OterController {

	public function getId_Ext(){
		$user = new User();

		echo $user->getId_Ext();


	}

	public function verifyUser($id){
		$obj_user = new User();

		
		//Set data to te model
		$obj_user-> setId_Priv($id);

		self::getId_Ext();

		return OterDAO::verifyUser($obj_user);
		

	}


} //Class OterController	


?>