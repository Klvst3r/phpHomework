<!DOCTYPE html>
<html lang="en">
<head>

    <?php 
    include'inc/adminHead.php'; 
    /*include 'sql/Privilege.php';*/
    include '../controller/PrivilegeController.php';
    include '../helps/helps.php';
    ?>
</head>
<body>
<div id="wrapper">
	<!-- Navigation -->
<?php
// The request to te server is type POST 
if($_SERVER["REQUEST_METHOD"] == "POST"){

	if(isset($_POST["desc_priv"])){
		//Validate field before send to BD
		$priv = validate_field($_POST["desc_priv"]);
				
		/*Privilege::regPrivilege($priv);*/
		PrivilegeController::regPirvilege($priv);

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