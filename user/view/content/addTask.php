
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tareas
        <small><?php echo isset($id_task) ? 'Edición' : 'Registro' ?></small>
      </h1>
      <ol class="breadcrumb">
        
        <?php
        echo '<li><a href="'. PATH .'/user/"><i class="fa fa-user"></i> Inicio</a></li>';
        ?>
        <li class="active"><?php echo isset($id_task) ? 'Actualización' : 'Nueva' ?> de Tarea</li>
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
  	
    if(isset($_POST["area"]) && isset($_POST["usuario"]) && isset($_POST["desc_task"]) && isset($_POST["id_task"])){ //update_task
      $id_task = $_POST["id_task"];
      $area = $_POST["area"];
      $usuario = $_POST["usuario"];
      $desc_task = validate_field($_POST["desc_task"]);
          
      TaskController::updateTask($id_task, $area, $usuario, $desc_task);

      //After the Insert go task list 
      header("location:action.php?a=4"); 

    }else
    
    if(isset($_POST["area"]) && isset($_POST["usuario"]) && isset($_POST["desc_task"])){ //new_area
    	
      //Validate field before send to BD
      $area = $_POST["area"];
      $usuario = $_POST["usuario"];
      $desc_task = validate_field($_POST["desc_task"]);
      $date_task = date('Y-m-d H:i:s');
      $status = 0;
          
      TaskController::regTask($area, $usuario, $desc_task, $date_task, $status);

      //After the Insert go task list 
      header("location:action.php?a=4"); 
    
    } //If of data from form
  }else{
    //In case fail register the user send again to the form [viewNewTaskForm.php]
  header("location:action.php?a=6"); 
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