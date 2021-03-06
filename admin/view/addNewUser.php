<?php
ob_start();
?>
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
//load the menu
include'inc/adminMenu.php'; 
		//load the variable to stay inside
        $_SESSION["user"]["code"] = "true";

// The request to te server is type POST
if($_SERVER["REQUEST_METHOD"] == "POST"){
	//If comes data form an update form
  if(isset($_POST["update"])){
  		if(isset($_POST["id_user"]) && isset($_POST["user_name"]) && isset($_POST["user_password"]) && isset($_POST["user_email"]) && isset($_POST["name"]) && isset($_POST["privilege"])){
		//Validate field before send to BD
		$id_user = validate_field($_POST["id_user"]);
		$user_name = validate_field($_POST["user_name"]);
		$user_password = validate_field($_POST["user_password"]);
		$user_email = validate_field($_POST["user_email"]);
		$name = validate_field($_POST["name"]);
		$privilege = validate_field($_POST["privilege"]);
		/*
		echo $date->now();
		$date_reg = now();
		 */

		UserController::updateUser($id_user, $user_name, $user_password, $user_email, $name, $privilege);

		//After the Insert list privileges
		header("location:action.php?a=3");

	} //If of data from form


  }
  else{
	//Otherwise register occurs 

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
  }//if(isset($_POST["update"])){
	
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
<?php
ob_end_flush();
?>