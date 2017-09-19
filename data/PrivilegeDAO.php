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
		
	}

	//Method to disconnectfrom BD
	/* Private because they will not be used in any other case or externally and are of private scope
		getting the concept of encapsulation*/

	private static function disconnect(){
		//This close the conection in PDO
		
		self::$cnx = null;
	}

	

}//End Class PrivilegeDAO

?>