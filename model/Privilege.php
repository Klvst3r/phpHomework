<?php 

class User {
	//variables names accord to the cols in the table, definded as properties from our class

	/*
	 * Setters y Getters Created by http://mikeangstadt.name/projects/getter-setter-gen/
	 */
	//Private Propieties 
	private $id_priv;
	private $desc_priv;

	//Setters and Getters of Class
	public function getId_priv(){
		return $this->id_priv;
	}

	public function setId_priv($id_priv){
		$this->id_priv = $id_priv;
	}

	public function getDesc_priv(){
		return $this->desc_priv;
	}

	public function setDesc_priv($desc_priv){
		$this->desc_priv = $desc_priv;
	}
	



}	