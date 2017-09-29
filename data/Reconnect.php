<?php



 class Reconnect {
 	/*
 	 * Connection to DataBase 
 	 * @return conexion PDO
 	 *
 	 */ 


	public static function connection(){
		try {
			//var of Connecton
			$cn = new PDO("mysql:host=localhost;dbname=phpHomework","dev","desarrollo");

			//echo "Connection Successful <br/>";
			return $cn;

		} catch(PDOException $ex) {
			die($ex->getMessage());
		  }
	}//Connection

	
}

/*Test of Connection*/
/*Connect::connection();*/
