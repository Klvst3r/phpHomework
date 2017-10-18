<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/Klvst3r.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Klvst3r Strk</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input name="q" class="form-control" placeholder="Search..." type="text">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span> 
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu tree" data-widget="tree">
        <li class="header text-green">NAVEGACION PRINCIPAL</li>
        
        <li class="">

          <?php
            //Go to the principal route
            echo '<a href="'. PATH .'/user/"><i class="fa fa-dashboard"></i> <span>Panel</span></a>';
          ?>

        </li>

        <li class="treeview active menu-open">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Consultas</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>  
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="action.php?a=4"><i class="fa fa-circle-o"></i> Consultar Tareas</a></li>
            <li><a href="action.php?a=5"><i class="fa fa-circle-o"></i> Consultar Areas</a></li>
            </li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Registro</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="action.php?a=3"><i class="fa fa-circle-o"></i> Registrar Tarea</a></li>
            <li><a href="action.php?a=8"><i class="fa fa-circle-o"></i> Registrar Área</a></li>
          </ul>
        </li>

        <li>
          <a href="action.php?a=10">
            <i class="fa fa-th"></i> <span>Ejecutar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">2</small>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Modificar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="action.php?a=4"><i class="fa fa-circle-o"></i> Modificar Tareas</a></li>
            <li><a href="action.php?a=5"><i class="fa fa-circle-o"></i> Modificar Areas</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Informe</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="action.php?a=14"><i class="fa fa-circle-o"></i> Tareas Ejecutadas</a></li>
            <li><a href="action.php?a=15"><i class="fa fa-circle-o"></i> Tareas sin Ejecutar</a></li>
          </ul>
        </li>


        <li><a href="#"><i class="fa fa-book"></i> <span>Imprimir</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->