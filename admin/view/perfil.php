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
                    <h1 class="page-header">Perfil</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- INICIO CONTENIDO -->
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h3 class="panel-title">Usuario</h3>
                </div>
                <div class="panel-body">
                    Información Pefil
                </div>
            </div>          

            <!--TERMINO CONTENIDO -->

             
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php  include 'inc/adminFooter.php'; ?>
</body>

</html>
