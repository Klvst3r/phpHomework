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

  <div class="content-wrapper" style="min-height: 710px;">

  	<!-- page content -->
	
	<?php include 'inc/userContent.php'; ?>
		
	<!-- End page content -->
  </div>

<!-- Begin Footer -->
<?php include 'inc/userFooter.php'; ?>
<!-- End Footer -->
</body>
</html>
