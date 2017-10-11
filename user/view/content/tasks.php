<?php
include 'sql/TaskSQL.php';
?>  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tareas
        <small>Consulta</small>
      </h1>
      <ol class="breadcrumb">
        
        <?php
        echo '<li><a href="'. PATH .'/user/"><i class="fa fa-user"></i> Inicio</a></li>';
        ?>
        <li class="active">Listado de Tareas</li>
      </ol>
    </section>
    

    <!-- Main content -->
    <section class="content">
    <!-- INICIO CONTENIDO -->
    <!-- ************************************************ -->       
   <div id="wrapper">
        
        <div id="page-wrapper">
            <div class="row ">
                <div class="col-lg-12 back-white" style="background-color: #f9f9f9;">
                    <h1 class="page-header">Listado de tareas | 
                      <a href="action.php?a=6" class="btn btn-primary"><i class="fa fa-plus"></i> Nueva Tarea</a>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- INICIO CONTENIDO -->
   <?php
      
  $query_count = "SELECT COUNT(*) FROM tasks";
  $query = " SELECT A.id_task as ID, B.desc_area as Area, C.name as Usuario, A.desc_task as Tarea FROM tasks A, areas B, users C WHERE A.id_area = B.id_area AND A.id_user = C.id_user ORDER BY id_task";

  $params = "";

  TaskSQL::getTableTasks_Pag($query_count, $query, $params);

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