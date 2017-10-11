<?php

$a = $_GET['a'];

/**
 * Inside each option you should load the next session variable to stay inside in the system
 * this value will be put it after load menu
 */
//$_SESSION["user"]["code"] = "true";

if(isset($a)){
	switch($a){
		case 1:
			//Profile
			require_once("view/viewProfile.php");
			break;
		case 2:
			// Config
			require_once("view/viewConfig.php");
			break;
		case 3:
			//Changue Pass
			require_once("view/viewChanguePass.php");
			break;
		case 4:
			//List Task
			require_once("view/viewTasks.php");
			break;
		case 5:
			//List Areas
			require_once("view/viewAreas.php");
			break;
		case 6:
			//Register Form Task
			require_once("view/viewNewTaskForm.php");
			break;
		case 7:
			//Add Task
			require_once("view/");
			break;
		case 8:
			//Register Area Form
			require_once("view/viewNewAreaForm.php");
			break;
		case 9:
			//Add Area
			require_once("view/addNewArea.php");
			break;
		case 10:
			//Ajecutar Tareas
			require_once("view/");
			break;
		case 11:
			//Consultar Tareas
			require_once("view/");
			break;
		case 12:
			//Consultar Areas
			require_once("view/");
			break;
		case 13:
			//Modificar Tareas
			require_once("view/");
			break;
		case 14:
			//Modificar Areas
			require_once("pdf.php");
			break;
		case 15:
			//Eliminar Tareas
			require_once("view/");
			break;
		case 16:
			//Eliminar Areas
			require_once("view/viewDelArea.php");
			break;
		case 17:
			//Imprimir Tarea
			require_once("pdf.php");
			break;
		default:
			echo"No hay mas Opciones";
			break;

	}
}

?>