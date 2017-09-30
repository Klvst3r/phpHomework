<?php 


//Import conection
include 'Reconnect.php';
include '../model/User.php';

class OterDAO extends Reconnect {
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


	public static function verifyUser($priv){

		$query = "SELECT id_user, user_name FROM users WHERE id_priv = :id_priv";

		self::getConection();
	
		$result = self::$cnx->prepare($query);

		$id_priv =	$priv->getId_Priv();
		$result->bindParam(":id_priv", $id_priv);

		$result->execute();

		$rows = $result->rowCount();

		if($rows > 0){
			//return true;
			//echo "Busqueda Localizada<br/>";
			echo '<p class="text-danger"><b>Acción cancelada!! </b></p>';

			//$rows = $result->rowCount();

			if($rows == 1){
				echo 'Existe ' . $rows . ' usuario registrado con el privilegio que intenta eliminar.';
				echo '<br/><br/><div class="bg-success text-white"> <center>Redirigiendo...</center></div>';
			}elseif($rows > 1){
				echo 'Existen ' . $rows . ' usuarios registrados con el privilegio que intenta eliminar';
				echo '<br/><br/><div class="bg-success text-white"> <center>Redirigiendo...</center></div>';
			}

			echo"<meta HTTP-EQUIV='Refresh' CONTENT='3; URL=action.php?a=5'<head/>";

			//echo "Filas: " . $rows;


			//$found = "true";
			


			return true;
			//return $found;
			//$user = new User();

			
			self::disconnect();

			//echo $user->getId_Ext();
			


			//return $user->setId_Ext($found);



		}else{
			//Controller to delete privilege
            PrivilegeController::delPrivilege($id_priv);                   	   
            header("location:action.php?a=5");
		}

		return false;


	}

}//Class OterDAO	



?>