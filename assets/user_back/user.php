<!DOCTYPE html>
<html lang="en">
<head>
    <?php include'inc/userHead.php'; 

    ?>
</head>
<body>
    <div id="wrapper">
        <?php  include'inc/userMenu.php'; 
            $_SESSION["user"]["code"] = "true";
        ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Principal</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
         
            <!-- INICIO CONTENIDO PARA PRIVILEGIOS-->
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h3 class="panel-title">Tareas</h3>
                </div>
                <div class="panel-body">
                    <a href="action.php?a=5" class="btn btn-default btn-large"><i class="fa fa-users"></i> Tareas Pendientes</a>
 

                </div>
            </div>          

            <!--TERMINO CONTENIDO PARA PRIVILEGIOS-->

             <div>
                <?php
               /* 
                echo $_SESSION["user"]["code"];
                echo "<br>";
                echo $_SESSION["user"]["op"];*/
                ?>
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php  include 'inc/userFooter.php'; ?>
</body>

</html>
