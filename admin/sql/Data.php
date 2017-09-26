<?php
include '../data/Connect.php';
include '../assets/class/SQL.php';

class Data extends Connect {

	protected static $cnx;

	function getConection(){

		self::$cnx = Connect::connection();
		
	}//getConection

	


}//Class Data

?>