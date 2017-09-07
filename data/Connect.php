<?php
 class Connect {
 	/*
 	 * Connection to DataBase 
 	 * @return conexion PDO
 	 *
 	 */ 

	public static function connection(){
		try {
			//var of Connecton
			$cn = new PDO("mysql:host=localhost;dbname=phpHomework","dev","desarrollo");

			//echo "Connection Successful";
			return $cn;

		} catch(PDOException $ex) {
			die($ex->getMessage());
		  }
	}
}

/*Test of Connection*/
/*Connect::connection();*/
