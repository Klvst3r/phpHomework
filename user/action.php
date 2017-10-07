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
			//Listar Tareas
			require_once("view/tasks.php");
			break;
		case 5:
			//Listar Areas
			require_once("view/viewAreas.php");
			break;
		case 6:
			//Registrar Tareas
			require_once("view/");
			break;
		case 7:
			//Registrar Areas
			require_once("view/");
			break;
		case 8:
			//Ajecutar Tareas
			require_once("view/");
			break;
		case 9:
			//Consultar Tareas
			require_once("view/");
			break;
		case 10:
			//Consultar Areas
			require_once("view/");
			break;
		case 11:
			//Modificar Tareas
			require_once("view/");
			break;
		case 12:
			//Modificar Areas
			require_once("pdf.php");
			break;
		case 13:
			//Imprimir Tarea
			require_once("pdf.php");
			break;
		default:
			echo"No hay mas Opciones";
			break;

	}
}

?>