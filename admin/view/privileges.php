<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include 'inc/adminHead.php'; 
    include 'sql/Privilege.php';

    ?>
</head>
<body>
    <div id="wrapper">
        <?php  include'inc/adminMenu.php'; ?>
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

            $edit = '<a class="btn btn-primary btn-sm" href="editPrivilege.php">Editar</a>';
            $delete = '<button class="btn btn-danger btn-sm" onclick="confirmar('."eliminarPrivilege.php".')">Eliminar</button>';

            $params = $edit . ' ' . $delete;

            Privilege::getTablePrivileges($query, $params)

            ?>

            <!--TERMINO CONTENIDO -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php  include 'inc/adminFooter.php'; ?>
</body>

</html>