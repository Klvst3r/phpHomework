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

	public function updatePrivilege($id, $privilege){

		$obj_priv = new Privilege();
		
		$obj_priv->setId_priv($id);
		$obj_priv->setDesc_priv($privilege);
		

		//We send the object from UserDAO
		return PrivilegeDAO::updatePrivilege($obj_priv);

	}

	public function delPrivilege($id){
		$obj_priv = new Privilege();
		
		$obj_priv->setId_priv($id);

		//We send the object to UserDAO in order to execute order
		return PrivilegeDAO::delPrivilege($obj_priv);


	}

}//End Class PrivilegeController