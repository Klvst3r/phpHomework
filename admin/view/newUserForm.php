<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include'inc/adminHead.php';
    include'../data/Form.php';
    include 'sql/Combo.php';
    include 'sql/Data.php';


    ?>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php
        include'inc/adminMenu.php';
        //in each render load the value true to the session variable code in other wise will be redirected to the login
        $_SESSION["user"]["code"] = "true";

        if(isset($_GET["b"])){
          $id_user = $_GET["b"];
          }
        ?>
        <div id="page-wrapper">
            <br/>
            <div class="row">
                <div class="col-lg-12">
                	<h1 class="page-header"><?php echo isset($id_user) ? 'Actualizar' : 'Nuevo' ?> Usuario |
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
                    $form = new Form('newUser','POST','action.php?a=8', 'form', '');
                    ?>
                      <legend>Datos del Usuario</legend>

                      <?php
                      if(isset($id_user)) {
                          /*<input type="hidden" value="<?php echo $usuario->id ?>" name="usuario_id" />*/
                          $form -> addField(4, array(
                           "field_name"    =>  "id_user",
                           "value"   =>  $id_user
                           ));

                           $form -> addField(4, array(
                           "field_name"    =>  "update",
                           "value"   =>  "true"
                          ));

                            //Select data for values in form

                             $query = "SELECT A.user_name, A.user_email, A.user_password_hash, A.name, A.id_priv, B.desc_priv FROM users A, privileges B where A.id_priv = B.id_priv and A.id_user = :id_user";

                             $select = new Data();

                             $select::getConection();

                             $result = $select::$cnx->prepare($query);

                             $id = $id_user;
                             $result->bindParam(":id_user", $id);

                             $result->execute();

                              $rows = $result->rowCount();

                              if($rows > 0){
                                $data = $result->fetch();

                                $user_name    = $data["user_name"];
                                $user_pass    = $data["user_password_hash"];
                                $user_email   = $data["user_email"];
                                $name         = $data["name"];
                                $id_priv      = $data["id_priv"];
                                $desc_priv    = $data["desc_priv"];
                              }else {
                                echo "No Data in Query";
                              }



                             }
                   else{
                      $user_name  = "";
                      $user_pass  = "";
                      $user_email = "";
                      $name       = "";
                      $id_priv    = "";
                      $desc_priv  = "";
                    }//if(isset($id_user))

                   ?>

                            <?php

                            $form -> addField(1, array(
                              "field_name"    =>  "user_name",
                              "label_field"   =>  "Usuario",
                              "readonly"      =>  "",
                              "disabled"      =>  "",
                              "value"         =>  $user_name,
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
                              "value"         =>  $user_pass,
                              "placeholder"   =>  "********",
                              "required"      =>  "",
                              "autofocus"     =>  ""
                              ));

                            $form -> addField(5, array(
                              "field_name"    =>  "user_email",
                              "label_field"   =>  "Email",
                              "value"         =>  $user_email,
                              "placeholder"   =>  "usuario@dominio",
                              "required"      =>  "required"
                              ));

                            $form -> addField(1, array(
                              "field_name"    =>  "name",
                              "label_field"   =>  "Nombre de Usuario",
                              "readonly"      =>  "",
                              "disabled"      =>  "",
                              "value"         =>  $name,
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
                          //$query = " SELECT A.id_priv as privilegio, B.desc_priv as descripcion FROM users A, privileges B where A.id_priv = B.id_priv ";

                          $val = $id_priv . "-"  . $desc_priv;
                          //echo "ID: " . $val;
                          //If Form Update exist and combo with values
                          if(isset($id_user)) {
                            //function combo($sql, $name, $id, $value, $label, $req, $enable, $onchange, $iniselect){
                            $query = "SELECT id_priv, desc_priv FROM privileges EXCEPT where id_priv <> '$id_priv'";
                            $combo = new combo($query,"privilege","inputPrivi", $val ,"Privilegio","required","","","1");

                          }else{

                            $query = " SELECT id_priv as privilegio, desc_priv as descripcion FROM privileges";
                            $combo = new combo($query,"privilege","inputPrivi","","Privilegio","required","","","1");
                          }
                          //$combo->combo();

                          $form -> addField(3, array(
                              "type_button"    =>  "btn btn-primary",
                              "legend"    =>  "Enviar"

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
