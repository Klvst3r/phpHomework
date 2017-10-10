<?php
include '../controller/AreaController.php';
//include '../helps/helps.php';
include '../controller/OterController.php'; //verificar si no existen afectaciones al momento de eliminar areas

?>  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Áreas
        <small>Proceso de Eliminación de registro</small>
      </h1>
      <ol class="breadcrumb">
        
        <li class="active">Eliminación de Área</li>
      </ol>
    </section>
    

    <!-- Main content -->
    <section class="content">
    <!-- INICIO CONTENIDO -->
    <!-- ************************************************ -->       
   <div id="wrapper">

            <!-- Fin CONTENIDO -->
   <?php

  	if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["b"])){
  		$id_area = $_GET["b"];   

		AreaController::delArea($id_area);                   	   
        header("location:action.php?a=5");  		

  	}else{
	    //In case fail register the user send again to the form 
		header("location:action.php?a=5");
		//echo"<meta HTTP-EQUIV='Refresh' CONTENT='2; URL=action.php?a=5'<head/>";
	}


    ?>
    </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- ************************************************ -->       
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->