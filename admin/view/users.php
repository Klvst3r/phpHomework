<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include 'inc/adminHead.php'; 
    include 'sql/ListUser.php';

    ?>
</head>
<body>
    <div id="wrapper">
        <?php  include'inc/adminMenu.php'; ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Listado de usuarios | <a href="view/newUser.php" class="btn btn-primary"><i class="fa fa-plus"></i> Nuevo usuario</a>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- INICIO CONTENIDO -->
			<?php
			
			ListUser::getTableUsers();

			//print(json_encode($rows));



			?>
			<!--
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody> -->
                    <?php /* foreach ($usuarios as $usuario) { */?>
                    <!-- <tr>
                        <td><?php /* echo $usuario->id */?></td>
                        <td><?php /*echo $usuario->usuario */ ?></td>
                        <td><?php /*echo $usuario->email */ ?></td>
                        <td>
                        -->
                            <!-- <a class="btn btn-primary btn-sm" href="<?php /*url('usuario/editar/' . $usuario->id) */?>">Editar</a> -->
                            <!-- <button class="btn btn-danger btn-sm" onclick="confirmar('<?php //url('usuario/eliminar/' . $usuario->id)?>')">Eliminar</button> -->
                            <!-- <a class="btn btn-danger btn-sm" href="<?php //url('usuario/eliminar/' . $usuario->id)?>">Eliminar</a> -->
                            <!-- <button class="btn btn-danger btn-sm" onclick="confirmar('<?php /*url('usuario/eliminar/' . $usuario->id) */ ?>')">Eliminar</button> -->
                     <!--   </td>
                    </tr> -->
                    <?php /*}*/ ?>
                <!-- </tbody>
            </table> -->

            <!--TERMINO CONTENIDO -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php  include 'inc/adminFooter.php'; ?>
</body>

</html>