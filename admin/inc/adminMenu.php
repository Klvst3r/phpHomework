<?php


if(isset($_SESSION["user"])){
  $code = $_SESSION["user"]["code"];
  if($code == "true" and $_SESSION["user"]["code"] == "true"){

?>

       <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Klvst3r - phpHomeWork</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
      
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION["user"]["name"]; ?><i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="action.php?a=1"><i class="fa fa-user fa-fw"></i> Perfil</a>
                    </li>
                    <li><a href="action.php?a=2"><i class="fa fa-gear fa-fw"></i> Configuración</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="../view/signout.php"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Buscar Usuario...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dashboard fa-fw"></i> Principal</a>
                    </li>
                    <li>
                       
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table fa-fw"></i> Calendarios</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit fa-fw"></i> Actividades</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Administración<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="action.php?a=3">Usuarios</a>
                            </li>
                            <li>
                                <a href="privilegios.php">Privilegios</a>
                            </li>
                        
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

<?php

//After login turn off code
$_SESSION["user"]["code"] = "false";

}else{
      $code ="false";
        header("location:login.php");
      }


}else {

header("location:login.php");
}
?>