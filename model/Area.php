<?php 

class Area {
	//variables names accord to the cols in the table, definded as properties from our class

	/*
	 * Setters y Getters Created by http://mikeangstadt.name/projects/getter-setter-gen/
	 */
	//Private Propieties 
	private $id_area;
	private $desc_area;

	//Setters and Getters of Class
	public function getId_area(){
		return $this->id_area;
	}

	public function setId_area($id_area){
		$this->id_area = $id_area;
	}

	public function getDesc_area(){
		return $this->desc_area;
	}

	public function setDesc_area($desc_area){
		$this->desc_area = $desc_area;
	}
	



}	