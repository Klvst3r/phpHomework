<?php

//include '../controller/UserController.php';
include '../data/Connect.php';
include '../assets/class/SQL.php';

//UserController::tableUsers();

//SQL::test();

class User extends Connect {
	
	protected static $cnx;

	private static function getConection(){

		self::$cnx = Connect::connection();
		
	}//getConection

public static function regPrivilege($sql, $privilege){
		
		$query = $sql;

		self::getConection();

		$resultado = self::$cnx->prepare($query);



}

} //Class