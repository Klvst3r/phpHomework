<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include 'inc/adminHead.php'; 
    include '../controller/PrivilegeController.php';
    include '../controller/OterController.php';

    //include 'sql/PrivilegeSQL.php';
    //include '../helps/helps.php';

    ?>
</head>
<body>
    <div id="wrapper">
        <?php  
        include'inc/adminMenu.php'; 

        $_SESSION["user"]["code"] = "true";

     	//header("Content-Type: text/html; charset=UTF-8");
  
        ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Panel de Administración
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="col-sm-9 col-sm-offset-1">
            

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Registro de acciones</h3>
                </div>
                
                <div class="panel-body ">
                    <!-- Formulario Cambio de Password -->
                   <?php

                   if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["b"])){

                   	   
                   	   		
                   	   		$id = $_GET["b"];   

                       //Verify if any user has this Privilege if it is utilizzed for an user ask if really execute the deletion
                       //Not Proceed if any user uses an privilege	
                       /**
                        * Thes method verify if exist an user that uses the privilege and can not delete the record, if any user 
                        * uses the privilege, procede with the PrivilegeController::delPrivilege($id); andredirect to the list of privileges
                        * in header("location:action.php?a=5");
                        * 
                        */
                       OterController::verifyUser($id);

                     
                   	   	
                  		 //echo $id;

                   	   //Controller to delete privilege
                   	   //PrivilegeController::delPrivilege($id);                   	   

                   	   //Redirect to the privilege list
                   	   //echo "Registro Eliminado, redirigiendo...";
                   	   //echo"<meta HTTP-EQUIV='Refresh' CONTENT='1; URL=action.php?a=5'<head/>";
                   	


                   }else{
				    //In case fail register the user send again to the form 
					header("location:action.php?a=5");
					//echo"<meta HTTP-EQUIV='Refresh' CONTENT='2; URL=action.php?a=5'<head/>";
					}

                   ?>

	           <!-- End Formulario Cambio de Passwordl -->
                </div>
            
            </div>          
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php  include 'inc/adminFooter.php'; ?>
</body>

</html>
<?php
ob_end_flush();
?>