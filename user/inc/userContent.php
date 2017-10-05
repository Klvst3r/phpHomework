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
           <a href="action.php?a=3" class="btn btn-default btn-large">
              <i class="fa fa-user" aria-hidden="true"></i>Tareas Desfasadas
            </a>
        </div>
      </div>       


    </section>
    <!-- /.content -->