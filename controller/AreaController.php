<?php 
//After generating the entity we create the controller
//we import AreaDao to use it in the defined class
include '../data/AreaDAO.php';

class AreaController {

		public function getArea($area){

		$obj_area = new Area();
		
		$obj_area->setDesc_priv($area);

		//We send the object from PrivilegeDAO
		return AreaDAO::getArea($obj_area);

	}


		public function regArea($area){

		$obj_area = new Area();
		
		$obj_area->setDesc_area($area);
		

		//We send the object from AreaDAO
		return AreaDAO::regarea($obj_area);

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