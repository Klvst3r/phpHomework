<?php
  //activate the sactual session
  $_SESSION["user"]["code"] = "true";
?>      
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Inicio
        <small>Actividades Principales</small>
      </h1>
      
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Layout</a></li>
        <li class="active">Collapsed Sidebar</li>
      </ol> -->
      <?php
      echo '
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Principal</li>
          </ol>
      ';
      ?>

    </section>

    <!-- Main content -->
    <section class="content">
     
      <div class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">Tareas</h3>
        </div>
        <div class="panel-body">
           <a href="action.php?a=5" class="btn btn-default btn-large">
              <i class="fa fa-tasks" aria-hidden="true"></i> Tareas Desfasadas
            </a>
        </div>
      </div>       

      <div class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">Tareas</h3>
        </div>
        <div class="panel-body">
           <a href="action.php?a=4" class="btn btn-default btn-large">
              <i class="fa fa-external-link" aria-hidden="true"></i> Listado de Tareas
            </a>
        </div>
      </div>       

      <div class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">Areas</h3>
        </div>
        <div class="panel-body">
           <a href="action.php?a=5" class="btn btn-default btn-large">
              <i class="fa fa-list-ul" aria-hidden="true"></i> Listar Áreas
            </a>
        </div>
      </div>      

      <div class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">Tareas</h3>
        </div>
        <div class="panel-body">
           <a href="action.php?a=10" class="btn btn-default btn-large">
              <i class="fa fa-check" aria-hidden="true"></i> Ejecutar Tareas
            </a>
        </div>
      </div>     


    </section>
    <!-- /.content -->