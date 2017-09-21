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

	if(isset($_POST["user_name"]) && isset($_POST["user_password"]) && isset($_POST["user_email"]) && isset($_POST["name"]) && isset($_POST["privilege"])){
		//Validate field before send to BD
		$user_name = validate_field($_POST["user_name"]);
		$user_password = validate_field($_POST["user_password"]);
		$user_email = validate_field($_POST["user_email"]);
		$name = validate_field($_POST["name"]);
		$privilege = validate_field($_POST["privilege"]);
		/*
		echo $date->now();
		$date_reg = now();		
		 */

		$date_reg = date('Y-m-d H:i:s');
				
		UserController::regUser($user_name, $user_password, $user_email, $name, $privilege, $date_reg);

		//After the Insert list privileges
		header("location:action.php?a=3"); 
	
	} //If of data from form
}else{
	//In case fail register the user send again to the form 
header("location:action.php?a=4"); 
}
?>

</div>
<!-- /#wrapper -->

<?php  include 'inc/adminFooter.php'; ?>

</body>

</html>    