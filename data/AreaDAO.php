<?php


//Import conection
include 'Connect.php';
include '../model/Area.php';

class AreaDAO extends Connect {
	//Variable protected
	protected static $cnx;

	//Function that allows to connect at all times
	private static function getConection(){
		//self to invoke this class and invoke $cnx
		/* With this the variable $cnx is generated, and is filled with the connection when the connection itself is established*/
		self::$cnx = Connect::connection();

	}//function getConection


	//Method to disconnectfrom BD
	/* Private because they will not be used in any other case or externally and are of private scope
		getting the concept of encapsulation*/

	private static function disconnect(){
		//This close the conection in PDO

		self::$cnx = null;
	}

	public static function regArea($ob_area){

		$query = "INSERT INTO areas (id_area, desc_area) VALUES (NULL, :desc_area)";

		self::getConection();

		$result = self::$cnx->prepare($query);

		//echo "Insercion Exitosa";

		//$result = self::$cnx->prepare($query);

		//Obtain data from Model
		$area = $ob_area->getDesc_area();
		$result->bindParam(":desc_area", $area);

		//Execute Query
		if($result->execute()){
			//return true;
			//echo "Insercion Exitosa";
			return true;
		}

		return false;


	}//

	/*public static function regPrivilege($privilege){

		echo $privilege;

		//$query = "INSERT INTO privileges (id_priv, desc_priv) VALUES (NULL, :desc_priv)";

		//self::getConection();

		//$result = self::$cnx->prepare($query);

		//echo $query;

		//$priv = $privilege->getDesc_priv();
		//$result->bindParam(":desc_priv", $priv);

		/*if($resultad->execute()){
			//return true;
			return "true";
		}

		return "false";

		//disconect
		self::disconnect();
		*/
	//}

	public static function updateArea($obj_area){

		$query = "UPDATE `areas` SET `desc_area` = :desc_area WHERE `areas`.`id_area` = :id_area";

		self::getConection();

		$result = self::$cnx->prepare($query);

		//Obtain data from Model
		$id_area = $obj_area->getId_area();
		$result->bindParam(":id_area", $id_area);
		
		$desc_area = $obj_area->getDesc_area();
		$result->bindParam(":desc_area", $desc_area);

		//Execute Query
		if($result->execute()){
			//return true;
			//echo "Insercion Exitosa";
			return true;
		}

		return false;


	}//function updatePrivilege($privilege)



	public function delArea($obj_area){
		
		$query = "DELETE from areas where id_area = :id_area"; 

		self::getConection();

		$result = self::$cnx->prepare($query);

		$id_area = $obj_area->getId_area();
		$result->bindParam(":id_area", $id_area);

		if($result->execute()){
			//return true;
			return true;
		}

		return false;		




	}




}//End Class PrivilegeDAO

?>
