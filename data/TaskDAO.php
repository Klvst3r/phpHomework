<?php 
//Import conection
include 'Connect.php';
include '../model/Task.php';

class TaskDAO extends Connect {
	//Variable protected
	protected static $cnx;

	//Function that allows to connect at all times
	private static function getConection(){
		//self to invoke this class and invoke $cnx
		/* With this the variable $cnx is generated, and is filled with the connection when the connection itself is established*/
		self::$cnx = Connect::connection();
		
	}

	//Method to disconnectfrom BD
	/* Private because they will not be used in any other case or externally and are of private scope
		getting the concept of encapsulation*/

	private static function disconnect(){
		//This close the conection in PDO
		
		self::$cnx = null;
	}

	/* Method to log the user
	 * This function what you will receive is a user as parameter and it will be the entity that will receive 
	 * the imported user entity in the second include.
	 */
	/* Method that serves to validate the login
     * @param object $user
	 * @return boolean
	 */
	
	
	public static function regTask($obj_task){
		//Query to Execute
		/*$query = "INSERT INTO users (id_user, user_name, user_password_hash, user_email, name, id_priv, date_reg) 
				  VALUES (NULL, ':user_name', ':user_password_hash', ':user_email', ':name', ':id_priv', ':date_reg')";*/

		$query = "INSERT INTO tasks (id_task, id_area, id_user, desc_task, date_task) VALUES (NULL, :id_area, :id_user, :desc_task, :date_task)";

		self::getConection();
	
		$result = self::$cnx->prepare($query);

				
		$id_area = $obj_task->getId_area();
		$result->bindParam(":id_area", $id_area);

		$id_user = $obj_task->getId_user();
		$result->bindParam(":id_user", $id_user);

		$desc_task = $obj_task->getDesc_task();
		$result->bindParam(":desc_task", $desc_task);

		$date_task = $obj_task->getDate_task();
		$result->bindParam(":date_task", $date_task);

		

		if($result->execute()){
			//return true;
			//echo "Insercion Exitosa";
			self::disconnect();
			return true;
		}

		return false;

	}//function regUser

	

	public static function updateTask($user){
		//Query to Execute
		
		$query = "UPDATE `tasks` SET `id_area` = :id_area, `id_user` = :id_user, `desc_task` = :desc_task WHERE `tasks`.`id_task` = :id_task";

		self::getConection();
	
		$result = self::$cnx->prepare($query);

		$id_area = $obj_task->getId_area();
		$result->bindParam(":id_area", $id_area);

		$id_user = $obj_task->getId_user();
		$result->bindParam(":id_user", $id_user);

		$desc_task = $obj_task->getDesc_task();
		$result->bindParam(":desc_task", $desc_task);

		$id_task = $obj_task->getId_task();
		$result->bindParam(":id_task", $id_task);

		//echo $query;

		if($result->execute()){
			//return true;
			//echo "Insercion Exitosa";
			self::disconnect();
			return true;
		}

		return false;

	}//function updateTask



	

	

}//Class

