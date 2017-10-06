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
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Registro</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="action.php?a=3"><i class="fa fa-circle-o"></i> Registrar Tarea</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Registro 2</a></li>
          </ul>
        </li>

        <li class="treeview active menu-open">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Consultas</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Consultar Tareas</a></li>
            <li><a href="#pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Consulta 2</a></li>
            <li><a href="#pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Consulta 3</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Consulta 4</a>
            </li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Ejecutar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">ejecute</small>
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
            <li><a href="#"><i class="fa fa-circle-o"></i> Modificar Tareas</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Modificar 1</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Imprimir</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Imprimir Tareas</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        
        <li><a href="#"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->