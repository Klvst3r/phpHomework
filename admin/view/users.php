<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include 'inc/adminHead.php'; 
    include 'sql/User.php';

    ?>
</head>
<body>
    <div id="wrapper">
        <?php  include'inc/adminMenu.php'; ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Listado de usuarios | <a href="action.php?a=4" class="btn btn-primary"><i class="fa fa-plus"></i> Nuevo usuario</a>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- INICIO CONTENIDO -->
			<?php
			
            $query = " SELECT id_user as ID, user_name as Usuario, user_email as Email, name as Nombre, date_reg as Registro FROM users";

            $edit = '<a class="btn btn-primary btn-sm" href="editUser.php">Editar</a>';
            $delete = '<button class="btn btn-danger btn-sm" onclick="confirmar('."eliminar.php".')">Eliminar</button>';

            $params = $edit . ' ' . $delete;

			User::getTableUsers($query, $params);


            ?>
            

            <!--TERMINO CONTENIDO -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php  include 'inc/adminFooter.php'; ?>
</body>

</html>