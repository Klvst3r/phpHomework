<?php

include '../controller/UserController.php';
include '../helps/helps.php';
?>  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Usuario
        <small>Panel de Administración</small>
      </h1>
      <ol class="breadcrumb">
        
        <?php
        echo '<li><a href="'. PATH .'/user/"><i class="fa fa-user"></i> Inicio</a></li>';
        ?>
        <li class="active">Cambiar Contraseña</li>
      </ol>
    </section>
    <div class="space">
      
    </div>

    <!-- Main content -->
    <section class="content">
    <!-- INICIO CONTENIDO -->
            
            <div class="col-sm-9 col-sm-offset-1">
            

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Configuración</h3>
                </div>
                
                <div class="panel-body ">
                    <!-- Formulario Cambio de Password -->
                <?php
                // The request to te server is type POST 
                if($_SERVER["REQUEST_METHOD"] == "POST"){

                  if(isset($_POST["last_pass"]) && isset($_POST["new_pass"]) && isset($_POST["rewrite_pass"])){
                    //Validate field before send to BD
                    $id       = $_SESSION["user"]["id_user"];
                    $last_pass    =   validate_field($_POST["last_pass"]);
                    $new_pass     =   validate_field($_POST["new_pass"]);
                    $rewrite_pass =   validate_field($_POST["rewrite_pass"]);
                        
                    /*Privilege::regPrivilege($priv);*/
                    UserController::changePass($id, $last_pass, $new_pass, $rewrite_pass);

                    //After the Insert list privileges
                    header("location:../user/"); 

                    
                  
                  } //If of data from form
                }else{
                  //In case fail register the user send again to the form to Change Password
                header("location:action.php?a=2"); 
                }  


                ?>


            <!-- End Formulario Cambio de Passwordl -->
                </div>
            
            </div>          

        <!--TERMINO CONTENIDO -->
     

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

