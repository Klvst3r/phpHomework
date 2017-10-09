<?php

?>  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Áreas
        <small>Consulta</small>
      </h1>
      <ol class="breadcrumb">
        
        <?php
        echo '<li><a href="'. PATH .'/user/"><i class="fa fa-user"></i> Inicio</a></li>';
        ?>
        <li class="active"><?php echo isset($id_user) ? 'Actualización' : 'Nueva' ?> de Área</li>
      </ol>
    </section>
    

    <!-- Main content -->
    <section class="content">
    <!-- INICIO CONTENIDO -->
    <!-- ************************************************ -->       
   <div id="wrapper">

            <!-- Fin CONTENIDO -->
   <?php

   // The request to te server is type POST 
  if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_POST["desc_area"]) && isset($_POST["id_user"])){ //update_area
      $id = $_POST["id_user"];
      $area = validate_field($_POST["desc_area"]);
          
      AreaController::updateArea($id, $area);

      //After the Insert list privileges
      header("location:action.php?a=5"); 

    }elseif(isset($_POST["desc_area"])){ //new_area
      //Validate field before send to BD
      $area = validate_field($_POST["desc_area"]);
          
      AreaController::regArea($area);

      //After the Insert list areas [viewAreas.php]
      header("location:action.php?a=5"); 
    
    } //If of data from form
  }else{
    //In case fail register the user send again to the form [viewNewAreaForm.php]
  header("location:action.php?a=8"); 
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