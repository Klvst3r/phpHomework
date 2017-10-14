
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
  	
    if(isset($_POST["b"])){ //update_task
      $id_task = $_POST["b"];
          
      TaskController::doneTask($id_task);

      //After the Update go task list 
      header("location:action.php?a=10"); 

    }else{
      //After the update go task list 
      header("location:action.php?a=10"); 

    }//variables received
      
    
    } //If of data from form
  }else{
    //In case fail register the user send again to the form [viewNewTaskForm.php]
  header("location:action.php?a=10"); 
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