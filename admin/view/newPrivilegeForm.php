<!DOCTYPE html>
<html lang="en">
<head>

    <?php
    include'inc/adminHead.php';
    include'../data/Form.php';
    include 'sql/Combo.php';
    ?>

</head>
<body>
<div id="wrapper">

	<!-- Navigation -->
        <?php  
        include'inc/adminMenu.php'; 

        //Receive var $id_user
        $id_user = $_GET["id_user"];

        ?>
        <div id="page-wrapper">
            <br/>
            <div class="row">
                <div class="col-lg-12">
                	<h1 class="page-header"><?php echo isset($id_user) ? 'Actualizar' : 'Nuevo' ?> Privilegio |
                    <a href="action.php?a=5" class="btn btn-default">
                        <i class="fa fa-users"></i> Ver Listado</a>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- End Navigation -->

            <!-- Begin Work Area -->
            <br/>
            <div class="row">
                <div class="col-md-6">
                  <div class="panel panel-default">
                     <div class="panel-body">

                          <?php
                          $form = new Form('newPrivilege','POST','action.php?a=7', 'form', '');
                          ?>
                            <legend>Datos del Privilegio</legend>


                            <?php
                            //Datos del usuario si es edición
                            if(isset($id_user)) {
                                   $form -> addField(4, array(
                                    "field_name"    =>  "id_user",
                                    "value"   =>  $id_user
                                    ));
                                    //echo "Variable recibida: " . $id_user;
                             } ?>

                            <?php

                            $form -> addField(1, array(
                              "field_name"    =>  "desc_priv",
                              "label_field"   =>  "Nombre del privilegio",
                              "readonly"      =>  "",
                              "disabled"      =>  "",
                              "value"         =>  "",
                              "maxlength"     =>  "",
                              "size"          =>  "",
                              "style"         =>  "",
                              "js"            =>  "",
                              "placeholder"   =>  "Descripción del privilegio",
                              "required"      =>  "required",
                              "autofocus"     =>  "autofocus"
                              ));


                          $form -> addField(3, array(
                              "type_button"    =>  "btn btn-primary",
                              "legend"    =>  "Registrar"

                              ));

                      $form->closeForm();

                            ?>

                  </div>
              </div>

          </div>
      </div>
  <!-- End Work Area -->

</div>
<!-- /#page-wrapper -->


</div>
<!-- /#wrapper -->

<?php  include 'inc/adminFooter.php'; ?>

</body>

</html>
