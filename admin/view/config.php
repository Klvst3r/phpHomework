<?php
/*if(isset($_SESSION["usuario"])){
    //echo $_SESSION["usuario"];
}else{
    echo "No existen variables de sesión";
}*/
include'../data/Form.php';
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
                    <h1 class="page-header">Panel de Administración</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- INICIO CONTENIDO -->
            
            <div class="col-sm-9 col-sm-offset-1">
            

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Configuración</h3>
                </div>
                
                <div class="panel-body ">
                    <!-- Formulario Cambio de Password -->
                   <?php
                  $form = new Form('newPassword','POST','action.php?a=9', 'form', '');
                  ?>
                    <legend>Cambiar Password</legend>


                    <?php
                    //Datos del usuario si es edición
                   $form -> addField(2, array(
                              "field_name"    =>  "last_pass",
                              "label_field"   =>  "Password Actual",
                              "placeholder"   =>  "********"
                              )); 

                   $form -> addField(2, array(
                              "field_name"    =>  "new_pass",
                              "label_field"   =>  "Nuevo Password",
                              "placeholder"   =>  "********"
                              )); 

                    $form -> addField(2, array(
                              "field_name"    =>  "rewrite_pass",
                              "label_field"   =>  "Vuelva a esribir nueva Contraseña",
                              "placeholder"   =>  "********"
                              )); 

                    $form -> addField(3, array(
                              "type_button"    =>  "btn btn-warning",
                              "legend"    =>  "Cambiar"


                              ));
                    
                    $form->closeForm();                                   


                      ?>


            <!-- End Formulario Cambio de Passwordl -->
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
