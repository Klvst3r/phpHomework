<?php

/**
*  
*	
*For completeness, there're actually three ways to set the encoding when connecting to MySQL from PDO and which ones are available depend on your PHP version. The order of preference would be:
*
*    charset parameter in the DSN string
*    Run SET NAMES utf8 with PDO::MYSQL_ATTR_INIT_COMMAND connection option
*    Run SET NAMES utf8 manually
*
*T*his sample code implements all three:
*
*<?php
*
*define('DB_HOST', 'localhost');
*define('DB_SCHEMA', 'test');
*define('DB_USER', 'test');
*define('DB_PASSWORD', 'test');
*define('DB_ENCODING', 'utf8');
*
*
*$dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_SCHEMA;
*$options = array(
*    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
*);
*
*if( version_compare(PHP_VERSION, '5.3.6', '<') ){
*    if( defined('PDO::MYSQL_ATTR_INIT_COMMAND') ){
*        $options[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES ' . DB_ENCODING;
*    }
*}else{
*    $dsn .= ';charset=' . DB_ENCODING;
*}
*
*$conn = @new PDO($dsn, DB_USER, DB_PASSWORD, $options);
*
*if( version_compare(PHP_VERSION, '5.3.6', '<') && !defined('PDO::MYSQL_ATTR_INIT_COMMAND') ){
*    $sql = 'SET NAMES ' . DB_ENCODING;
*    $conn->exec($sql);
*}
* 
*/


/**
 * $con="";
 * $MODE="";
 *    $dbhost = "localhost";
 *    $dbuser = "root";
 *    $dbpassword = "";
 *    $database = "name";
 *
 *    $con = new PDO ( "mysql:host=$dbhost;dbname=$database", "$dbuser", "$dbpassword", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
 *    $con->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); 
 */


 class Connect {
 	/*
 	 * Connection to DataBase 
 	 * @return conexion PDO
 	 *
 	 */ 


	public static function connection(){
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

			//echo "Connection Successful <br/>";
			return $cn;

		} catch(PDOException $ex) {
			die($ex->getMessage());
		  }
	}//Connection

	
}

/*Test of Connection*/
/*Connect::connection();*/
