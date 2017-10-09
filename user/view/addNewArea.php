<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Begin head -->
<?php include 'inc/userHead.php'; ?>
<!-- End head -->
</head>
<!-- ADD THE CLASS sidebar-collapse TO HIDE THE SIDEBAR PRIOR TO LOADING THE SITE -->
<body class="sidebar-collapse sidebar-mini skin-black" style="height: auto; min-height: 100%;">
<!-- Site wrapper -->
<div class="wrapper" style="height: auto; min-height: 100%;">
<!-- Begin Nav Menu -->
  <header class="main-header">

  	<!-- Begin Nav Menu -->
  	<?php include 'inc/userNav.php'; ?>
  	<!-- Emd  Nav Menu -->
  </header>

  <aside class="main-sidebar">
  <!-- Begin Side Bar -->

	<?php include 'inc/userSideBar.php'; ?>

   <!-- End Side Bar -->
  </aside>

<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<!-- Begin page content -->
<?php $_SESSION["user"]["code"] = "true"; ?>

<!-- page content -->
<?php
	
	include 'content/addArea.php';
  

?>      

<!-- End page content -->

<!-- Begin Footer -->
<?php include 'inc/userFooter.php'; ?>
<!-- End Footer -->
</body>
</html>

<?php
ob_end_flush();
?>  