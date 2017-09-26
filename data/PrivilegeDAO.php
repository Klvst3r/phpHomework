<?php


//Import conection
include 'Connect.php';
include '../model/Privilege.php';

class PrivilegeDAO extends Connect {
	//Variable protected
	protected static $cnx;

	//Funcion que permite conectar en todo momento
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

	public static function regPrivilege($privilege){

		$query = "INSERT INTO privileges (id_priv, desc_priv) VALUES (NULL, :desc_priv)";

		self::getConection();

		$result = self::$cnx->prepare($query);

		//echo "Insercion Exitosa";

		//$result = self::$cnx->prepare($query);

		//Obtain data from Model
		$priv = $privilege->getDesc_priv();
		$result->bindParam(":desc_priv", $priv);

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

	public static function updatePrivilege($privilege){

		$query = "UPDATE `privileges` SET `desc_priv` = :desc_priv WHERE `privileges`.`id_priv` = :id_priv";
		//$query = "INSERT INTO privileges (id_priv, desc_priv) VALUES (NULL, :desc_priv)";

		self::getConection();

		$result = self::$cnx->prepare($query);

		//echo "Insercion Exitosa";

		//$result = self::$cnx->prepare($query);

		//Obtain data from Model
		$id_priv = $privilege->getId_priv();
		$result->bindParam(":id_priv", $id_priv);
		
		$desc_priv = $privilege->getDesc_priv();
		$result->bindParam(":desc_priv", $desc_priv);

		//Execute Query
		if($result->execute()){
			//return true;
			//echo "Insercion Exitosa";
			return true;
		}

		return false;


	}//function updatePrivilege($privilege)




}//End Class PrivilegeDAO

?>
