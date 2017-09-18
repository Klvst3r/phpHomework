<?php


$a = $_GET['a'];

if(isset($a)){
	switch($a){
		case 1:
			//echo"Opcion 1";
			require_once("view/perfil.php");
			break;
		case 2:
			require_once("view/config.php");
			break;
		case 3:
			require_once("view/users.php");
			break;
		case 4:
			require_once("view/newUserForm.php");
			break;
		case 5:
			require_once("view/privileges.php");
			break;
		case 6:
			require_once("pdf.php");
			break;
		default:
			echo"No hay mas Opciones";
			break;

	}
}

?>