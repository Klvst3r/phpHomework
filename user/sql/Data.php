<?php
include '../data/Connect.php';
//include '../assets/class/SQL.php';
include '../model/Area.php';

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
		$id_area = $value;
		$result->bindParam(":id_area", $id_area);

		//We run the query the PDO connection
		$result->execute();

		$rows = $result->rowCount();

		if($rows > 0){
			$data = $result->fetch();

			$area = new Area();

			$desc = $data["desc_area"];

			$area->setDesc_area($desc);

			$desc = $area->getDesc_area($area);

			echo $desc;
			


		}else {
			echo "No Data in Query";
		}


		

	}






}//Class Data

?>