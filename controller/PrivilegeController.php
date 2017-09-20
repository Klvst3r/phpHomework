<?php 
//After generating the entity we create the controller
//we import UserDao to use it in the defined class
include '../data/PrivilegeDAO.php';

class PrivilegeController {

		public function getPrivilege($privilege){

		$obj_priv = new Privilege();
		
		$obj_priv->setDesc_priv($privilege);

		//We send the object from PrivilegeDAO
		return PrivilegeDAO::getPrivilege($obj_priv);

	}


		public function regPrivilege($privilege){

		$obj_priv = new Privilege();
		
		$obj_priv->setDesc_priv($privilege);
		

		//We send the object from UserDAO
		return PrivilegeDAO::regPrivilege($obj_priv);

	}

}//End Class PrivilegeController