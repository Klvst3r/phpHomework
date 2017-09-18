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
        <?php  include'inc/adminMenu.php'; ?>
        <div id="page-wrapper">
            <br/>
            <div class="row">
                <div class="col-lg-12">
                	<h1 class="page-header"><?php echo isset($user) ? 'Actualizar' : 'Nuevo' ?> Usuario | 
                    <a href="action.php?a=3" class="btn btn-default">
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
                        <!-- <form action="addNewUser.php" method="POST" role="form"> -->

                        
                          <?php
                          $form = new Form('newUser','POST','addNewUser.php', 'form', '');
                          ?>
                            <legend>Datos del usuario</legend>

                            <?php if(isset($usuario)) { 
                                  /*<input type="hidden" value="<?php echo $usuario->id ?>" name="usuario_id" />*/
                                   $form -> addField(4, array(
                                    "field_name"    =>  "usuario_id",
                                    "value"   =>  ""
                                    )); 
                             } ?>

                            <?php 

                            $form -> addField(1, array(
                              "field_name"    =>  "user_name", 
                              "label_field"   =>  "Nombre de Usuario",
                              "readonly"      =>  "",
                              "disabled"      =>  "",
                              "value"         =>  "", 
                              "maxlength"     =>  "",
                              "size"          =>  "",
                              "style"         =>  "", 
                              "js"            =>  "",
                              "placeholder"   =>  "Alias del Usuario",
                              "required"      =>  "required",
                              "autofocus"     =>  "autofocus"
                              )); 

                            $form -> addField(2, array(
                              "field_name"    =>  "user_password",
                              "label_field"   =>  "Password",
                              "placeholder"   =>  "********"
                              )); 

                            $form -> addField(5, array(
                              "field_name"    =>  "user_email",
                              "label_field"   =>  "Email",
                              "value"         =>  "",
                              "placeholder"   =>  "usuario@dominio",
                              "required"      =>  "required"
                              )); 

                            $form -> addField(1, array(
                              "field_name"    =>  "name", 
                              "label_field"   =>  "Nombre",
                              "readonly"      =>  "",
                              "disabled"      =>  "",
                              "value"         =>  "", 
                              "maxlength"     =>  "",
                              "size"          =>  "",
                              "style"         =>  "", 
                              "js"            =>  "",
                              "placeholder"   =>  "Nombre y Apellidos",
                              "required"      =>  "required",
                              "autofocus"     =>  ""
                              )); 

                            ?>

                            <!-- <div class="form-group">
                              <label for="user_name">Nombre de Usuario</label>
                              <input value="<?php /*echo isset($usuario) ? $usuario->usuario : ''*/ ?>"
                              type="text" name="user_name" class="form-control" id="user_name" placeholder="Alias del Usuario" required autofocus />
                            </div> -->

                            <!-- <div class="form-group">
                              <label for="user_password">Password</label>
                              <input type="password" name="user_password" class="form-control" id="user_password" />
                            </div> -->
                          
                           <!--  <div class="form-group">
                              <label for="user_email">Email</label>
                              <input value="<?php /*echo isset($usuario) ? $usuario->email : '' */?>"
                              type="email" name="user_email" class="form-control" id="user_email" placeholder="usuario@dominio" required  />
                            </div> -->
                            
                            <!-- <div class="form-group">
                              <label for="name">Nombre</label>
                              <input value="<?php /*echo isset($usuario) ? $usuario->usuario : '' */?>"
                              type="text" name="name" class="form-control" id="name" placeholder="Alias del Usuario" required autofocus />
                            </div>                             -->

                            <!-- <div class="form-group">
                              <label for="inputPrivi">Privilegio</label>
                              <select name="privilegio" id="inputPrivi" class="form-control" required="required">
                                  <option <?php /* echo isset($usuario) && $usuario->privilegio == 'admin' ? 'selected' : '' */?> value?"admin">Administrador</option>
                                  <option <?php /* echo isset($usuario) && $usuario->privilegio == 'venta' ? 'selected' : '' */?> value?"venta">Vendedor</option>
                              </select>
                            </div>
 -->
                          <?php
                          //aqui va el como
                          $query = " SELECT A.id_priv as privilegio, B.desc_priv as descripcion FROM users A, privileges B where A.id_priv = B.id_priv ";
                          $combo = new combo($query,"privilegio","inputPrivi","","Privilegio","required","","","1");
                          //$combo->combo();

                          $form -> addField(3, array(
                              "type_button"    =>  "btn btn-primary"
                              
                              )); 

                      $form->closeForm();

                            ?>
                        
                          <!-- <button type="submit" class="btn btn-primary">Registrar</button> -->
                      <!-- </form>   -->
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
