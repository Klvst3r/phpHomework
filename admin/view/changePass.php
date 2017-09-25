<!DOCTYPE html>
<html lang="en">
<head>

    <?php 
    include'inc/adminHead.php'; 
    /*include 'sql/Privilege.php';*/
    include '../controller/UserController.php';
    include '../helps/helps.php';
    ?>
</head>
<body>
<div id="wrapper">
	<!-- Navigation -->
<?php
// The request to te server is type POST 
if($_SERVER["REQUEST_METHOD"] == "POST"){

	if(isset($_POST["last_pass"]) && isset($_POST["new_pass"]) && isset($_POST["rewrite_pass"])){
		//Validate field before send to BD
		$id 			=	$_SESSION["user"]["id_user"];
		$last_pass 		= 	validate_field($_POST["last_pass"]);
		$new_pass 		= 	validate_field($_POST["new_pass"]);
		$rewrite_pass	= 	validate_field($_POST["rewrite_pass"]);
				
		/*Privilege::regPrivilege($priv);*/
		UserController::changePass($id, $last_pass, $new_pass, $rewrite_pass);

		//After the Insert list privileges
		header("location:../admin/"); 
	
	} //If of data from form
}else{
	//In case fail register the user send again to the form to Change Password
header("location:action.php?a=2"); 
}
?>

</div>
<!-- /#wrapper -->

<?php  include 'inc/adminFooter.php'; ?>

</body>

</html>    