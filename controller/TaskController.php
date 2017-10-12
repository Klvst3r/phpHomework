<?php
//After generating the entity we create the controller
//we import TaskDao to use it in the defined class
include '../data/TaskDAO.php';
class TaskController {
	
	/**
	 * Create a new Object for Task and send data to the object to process
	 * @param  [type] $area  		[Receive id_area]
	 * @param  [type] $user		  	[Receive id_user]
	 * @param  [type] $desc 		[Receive description of task]
	 * @param  [type] $date  		[Receive date of task in format YY-mm-dd HH:mm:ss]
	 */
	public function regTask($area, $user, $desc, $date){
		//1. Ceerate Object to Work
		$obj_task = new Task();

		//Set data to te model
		$obj_task->setId_area($area);
		$obj_task->setId_user($user);
		$obj_task->setDesc_task($desc);
		$obj_task->setDate_task($date);


		//We send the object from TaskDAO
		return TaskDAO::regTask($obj_task);

	}//Function regTask



	public function updateTask($area, $user, $desc){
		//1. Ceerate Object to Work
		$obj_task = new Task();

		
		//Set data to te model
		$obj_task->setId_area($area);
		$obj_task->setId_user($user);
		$obj_task->setDesc_task($desc);		

		//We send the object from TaskDAO
		return TaskDAO::updateTask($obj_task);

	}//Function updateTask

	


}

 ?>
