<?php
include'../data/Form.php';
?>  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Usuario
        <small>Panel de Administración</small>
      </h1>
      <ol class="breadcrumb">
        
        <?php
        echo '<li><a href="'. PATH .'/user/"><i class="fa fa-user"></i> Inicio</a></li>';
        ?>
        <li class="active">Cambiar Contraseña</li>
      </ol>
    </section>
    <div class="space">
      
    </div>

    <!-- Main content -->
    <section class="content">
    <!-- INICIO CONTENIDO -->
            
            <div class="col-sm-9 col-sm-offset-1">
            

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Configuración</h3>
                </div>
                
                <div class="panel-body ">
                    <!-- Formulario Cambio de Password -->
                   <?php
                  $form = new Form('newPassword','POST','action.php?a=3', 'form', '');
                  ?>
                     <legend>Cambiar Password</legend>


                    <?php
                    //Datos del usuario si es edición
                   $form -> addField(2, array(
                              "field_name"    =>  "last_pass",
                              "label_field"   =>  "Password Actual",
                              "value"         =>  "",
                              "placeholder"   =>  "********",
                              "required"      =>  "required",
                              "autofocus"     =>  "autofocus"
                              )); 

                   $form -> addField(2, array(
                              "field_name"    =>  "new_pass",
                              "label_field"   =>  "Nuevo Password",
                              "value"         =>  "",
                              "placeholder"   =>  "********",
                              "required"      =>  "required",
                              "autofocus"     =>  ""
                              )); 

                    $form -> addField(2, array(
                              "field_name"    =>  "rewrite_pass",
                              "label_field"   =>  "Vuelva a esribir nueva Contraseña",
                              "value"         =>  "",
                              "placeholder"   =>  "********",
                              "required"      =>  "required",
                              "autofocus"     =>  ""
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
     

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->