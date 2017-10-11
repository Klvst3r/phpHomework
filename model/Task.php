<?php 

class Task {
	//variables names accord to the cols in the table, definded as properties from our class

	/*
	 * Setters y Getters Created by http://mikeangstadt.name/projects/getter-setter-gen/
	 */
	//Private Propieties 
	private $id_task;
	private $id_area;
	private $id_user;
	private $desc_task;
	private $date_task;

	//Setters and Getters of Class
	public function getId_task(){
		return $this->id_task;
	}

	public function setId_task($id_task){
		$this->id_task = $id_task;
	}

	public function getId_area(){
		return $this->id_area;
	}

	public function setId_area($id_area){
		$this->id_area = $id_area;
	}

	public function getId_user(){
		return $this->id_user;
	}

	public function setId_user($id_user){
		$this->id_user = $id_user;
	}

	public function getDesc_task(){
		return $this->desc_task;
	}

	public function setDesc_task($desc_task){
		$this->desc_task = $desc_task;
	}

	public function getDate_task(){
		return $this->date_task;
	}

	public function setDate_task($date_task){
		$this->date_task = $date_task;
	}
	



}	

