<?php
//include '../data/Connect.php';
//include '../assets/class/SQL.php';
include '../model/Privilege.php';

class Data extends Connect {

	static $cnx;

	function getConection(){

		self::$cnx = Connect::connection();
		
	}//getConection

	function disconnect(){
		//This close the conection in PDO

		self::$cnx = null;
	}

	function makeQuery($sql, $value){

		self::getConection();
		
		$query = $sql;

		$result = self::$cnx->prepare($query);

		//The parameters are sent the user in the form by user_name field, the object $user, to the user of the form
		$id_priv = $value;
		$result->bindParam(":id_priv", $id_priv);

		//We run the query the PDO connection
		$result->execute();

		$rows = $result->rowCount();

		if($rows > 0){
			$data = $result->fetch();

			$privilegio = new Privilege();

			$desc = $data["desc_priv"];

			$privilegio->setDesc_priv($desc);

			$desc = $privilegio->getDesc_priv($privilegio);

			echo $desc;
			


		}else {
			echo "No Data in Query";
		}


		

	}






}//Class Data

?>