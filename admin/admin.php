<?php
/*if(isset($_SESSION["usuario"])){
    //echo $_SESSION["usuario"];
}else{
    echo "No existen variables de sesión";
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include'inc/adminHead.php'; ?>
</head>
<body>
    <div id="wrapper">
        <?php  include'inc/adminMenu.php'; ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Principal</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- INICIO CONTENIDO -->
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h3 class="panel-title">Usuarios</h3>
                </div>
                <div class="panel-body">
                    <a href="action.php?a=3" class="btn btn-default btn-large"><i class="fa fa-users"></i> Listado de usuarios</a>

                    <a href="action.php?a=3" class="btn btn-default btn-large"><i class="fa fa-user" aria-hidden="true"></i>

 Privilegios Asignados</a>

                </div>
            </div>          

            <!--TERMINO CONTENIDO -->

             <div>
                <?php
                /*echo $_SESSION["user"]["name"];
                echo "<br>";
                //$_SESSION["user"]["op"] = "op";
                echo $_SESSION["user"]["code"];
                echo "<br>";
                echo $_SESSION["user"]["op"];*/
                ?>
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php  include 'inc/adminFooter.php'; ?>
</body>

</html>
