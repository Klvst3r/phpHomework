<?php

class Connect {

function connection(){
		try {
			//var of Connecton
			//$connect = new PDO("mysql:host=$host;dbname=$db", $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			/*
			$connect = new PDO(
			  "mysql:host=localhost;dbname=phpHomework", 
			  $user, 
			  $pass, 
			  array(
			    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
			  )
			);

			 */
			
			$cn = new PDO(
			  "mysql:host=localhost;dbname=phpHomework", 
			  "dev", 
			  "desarrollo", 
			  array(
			    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
			  )
			);

			/*$cn = new PDO("mysql:host=localhost;dbname=phpHomework","dev","desarrollo");

			$cn -> exec("set names utf8");
			*/

			echo "Connection Successful <br/>";
			return $cn;

		} catch(PDOException $ex) {
			die($ex->getMessage());
		  }
	}//Connection
}//class	

?>	