<?php 

class User {
	//variables names accord to the cols in the table, definded as properties from our class

	//Private Propieties 
	private $id_user;
	private $name;
	private $user_name;
	private $user_email;
	private $user_password_hash;
	private $id_priv;
	private $date_reg;

	/**
	 * The Getters and Setters are functions permit us to enter at definied properties
	 * to mantain encapsulated and the enter to this is by next methods getters and setters
	 */
	

	/*
	Google: php getter and setters generator a falta de plugin pegando la clase en:
	http://mikeangstadt.name/projects/getter-setter-gen/
	To Generate y establish
	*/

	public function getId_user(){
		return $this->id_user;
	}

	public function setId_user($id_user){
		$this->id_user = $id_user;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getUser_name(){
		return $this->user_name;
	}

	public function setUser_name($user_name){
		$this->user_name = $user_name;
	}

	public function getUser_email(){
		return $this->user_email;
	}

	public function setUser_email($user_email){
		$this->user_email = $user_email;
	}

	public function getUser_password_hash(){
		return $this->user_password_hash;
	}

	public function setUser_password_hash($user_password_hash){
		$this->user_password_hash = md5($user_password_hash);
	}

	public function getId_Priv(){
		return $this->id_priv;
	}

	public function setId_Priv($id_priv){
		$this->id_priv = $id_priv;
	}

	public function getDate_reg(){
		return $this->date_reg;
	}

	public function setDate_reg($date_reg){
		$this->date_reg = $date_reg;
	}

}