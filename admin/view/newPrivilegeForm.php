<!DOCTYPE html>
<html lang="en">
<head>

    <?php
    include'inc/adminHead.php';
    include'../data/Form.php';
    include 'sql/Combo.php';
    include 'sql/Data.php';
    //include 'Select_Privilege.php';
    //include '../model/Privilege.php';
    ?>

</head>
<body>
<div id="wrapper">

	<!-- Navigation -->
        <?php
        include'inc/adminMenu.php';
        $_SESSION["user"]["code"] = "true";

        //Receive var $id_user
        if(isset($_GET["b"])){
        $id_user = $_GET["b"];
        }

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



                             //Select data for values in form


                             $query = "SELECT id_priv, desc_priv FROM privileges where id_priv = :id_priv";

                             //Data::makeQuery($query, $id_user);

                             //$privilegio = new Privilege();

                             //$privilege = $privilegio->getDesc_priv();

                             $select = new Data();

                             $select::getConection();

                              //$query = $sql;

                              $result = $select::$cnx->prepare($query);

                              //echo $id_user;

                              //The parameters are sent the user in the form by user_name field, the object $user, to the user of the form
                              $id_priv = $id_user;
                              $result->bindParam(":id_priv", $id_priv);

                              //We run the query the PDO connection
                              $result->execute();

                              $rows = $result->rowCount();

                              if($rows > 0){
                                $data = $result->fetch();

                                //$privilegio = new Privilege();

                                $desc = $data["desc_priv"];
                                //$desc = $id_user;

                                //$privilegio->setDesc_priv($desc);

                                //$desc = $privilegio->getDesc_priv($privilegio);

                                //echo $desc;



                              }else {
                                echo "No Data in Query";
                              }



                              $value = $desc;


                              }
                              else{
                                $value = "";
                              }//if(isset($id_user))



                            $form -> addField(1, array(
                              "field_name"    =>  "desc_priv",
                              "label_field"   =>  "Nombre del privilegio",
                              "readonly"      =>  "",
                              "disabled"      =>  "",
                              "value"         =>  $value,
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
