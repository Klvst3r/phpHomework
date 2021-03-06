<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php 
    include'inc/adminHead.php'; 
    /*include 'sql/Privilege.php';*/
    include '../controller/PrivilegeController.php';
    include '../helps/helps.php';
    $_SESSION["user"]["code"] = "true";

    ?>
</head>
<body>
<div id="wrapper">
	<!-- Navigation -->
<?php
//load the menu
include'inc/adminMenu.php'; 
		//load the variable to stay inside
        $_SESSION["user"]["code"] = "true";

// The request to te server is type POST 
if($_SERVER["REQUEST_METHOD"] == "POST"){

	if(isset($_POST["desc_priv"]) && isset($_POST["id_user"])){
		$id = $_POST["id_user"];
		$priv = validate_field($_POST["desc_priv"]);
				
		/*Privilege::regPrivilege($priv);*/
		PrivilegeController::updatePrivilege($id, $priv);

		//After the Insert list privileges
		header("location:action.php?a=5"); 

	}elseif(isset($_POST["desc_priv"])){
		//Validate field before send to BD
		$priv = validate_field($_POST["desc_priv"]);
				
		/*Privilege::regPrivilege($priv);*/
		PrivilegeController::regPrivilege($priv);

		//After the Insert list privileges
		header("location:action.php?a=5"); 
	
	} //If of data from form
}else{
	//In case fail register the user send again to the form 
header("location:action.php?a=6"); 
}
?>

</div>
<!-- /#wrapper -->

<?php  include 'inc/adminFooter.php'; ?>

</body>

</html>    
<?php
ob_end_flush();
?>