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
			require_once("view/newPrivilegeForm.php");
			break;
		case 7:
			require_once("view/addNewPrivilege.php");
			break;
		case 8:
			require_once("view/addNewUser.php");
			break;
		case 9:
			require_once("view/changePass.php");
			break;



		case 10:
			require_once("pdf.php");
			break;
		default:
			echo"No hay mas Opciones";
			break;

	}
}

?>