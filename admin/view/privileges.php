<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include 'inc/adminHead.php'; 
    include 'sql/PrivilegeSQL.php';
    //include '../helps/helps.php';

    ?>
</head>
<body>
    <div id="wrapper">
        <?php  
        include'inc/adminMenu.php';
        $_SESSION["user"]["code"] = "true"; 
        ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Listado de privilegios | <a href="action.php?a=6" class="btn btn-primary"><i class="fa fa-plus"></i> Nuevo privilegio</a>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- INICIO CONTENIDO -->
			<?php
			
            $query = " SELECT id_priv as ID, desc_priv as Privilegio FROM privileges";

            //$id_user = $_SESSION["user"]["id_user"];

            /*$edit = '<a class="btn btn-primary btn-sm" href="action.php?a=6">Editar</a>';
            $delete = '<button class="btn btn-danger btn-sm" onclick="confirmar('."eliminarPrivilege.php".')">Eliminar</button>';*/

            //$params = $edit . ' ' . $delete;
            $params = "";

            PrivilegeSQL::getTablePrivileges($query, $params)

            ?>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php  include 'inc/adminFooter.php'; ?>
</body>

</html>