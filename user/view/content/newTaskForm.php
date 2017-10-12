
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <?php

      if(isset($_GET["b"])){
          $id_task = $_GET["b"];
          //echo "variable recibida via GET: " . $id_task;
          }

      ?>

      <h1>
        Tareas
        <small><?php echo isset($id_task) ? 'Edición' : 'Registro' ?></small>
      </h1>
      <ol class="breadcrumb">
        
        <?php
        
        
        

        echo '<li><a href="'. PATH .'/user/"><i class="fa fa-user"></i> Inicio</a></li>';
       
        ?>
        <li class="active"><?php echo isset($id_task) ? 'Actualización' : 'Registro' ?> de Tarea</li>
        
      </ol>
    </section>
    

    <!-- Main content -->
    <section class="content">
    <!-- INICIO CONTENIDO -->
    <!-- ************************************************ -->       
   <div id="wrapper">
        <?php
        //echo "Id User: " . $id_task;
        ?>
        <div class="row" style="background-color: #f9f9f9">
                <div class="col-lg-12">
                  <h1 class="page-header"><?php echo isset($id_task) ? 'Actualizar' : 'Nueva' ?> Tarea |
                    <a href="action.php?a=4" class="btn btn-default">
                        <i class="fa fa-users"></i> Ver Listado Tareas</a>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
        </div>

          <!-- Begin Work Area to New Area Form -->
            <br/>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="panel panel-default">
                     <div class="panel-body">

                          <?php
                          $form = new Form('newTask','POST','action.php?a=7', 'form', '');
                          ?>
                            <legend>Información de la tarea</legend>
                        
                      <?php
                          //Proccess to Update
                      if(isset($id_task)) {
                          /*<input type="hidden" value="<?php echo $usuario->id ?>" name="usuario_id" />*/
                          $form -> addField(4, array(
                           "field_name"    =>  "id_task",
                           "value"   =>  $id_task
                           ));

                           $form -> addField(4, array(
                           "field_name"    =>  "update",
                           "value"   =>  "true"
                          ));

                            //Select data for values in form

                             $query = "SELECT B.id_area, B.desc_area, A.id_user, A.user_name, C.id_task, C.desc_task FROM users A, areas B, tasks C where C.id_area = B.id_area and A.id_user = C.id_user and C.id_task = :id_task";

                             $select = new Data();

                             $select::getConection();

                             $result = $select::$cnx->prepare($query);

                             $id = $id_task;
                             $result->bindParam(":id_task", $id);

                             $result->execute();

                              $rows = $result->rowCount();

                              if($rows > 0){
                                $data = $result->fetch();

                                $id_area      = $data["id_area"];
                                $desc_area    = $data["desc_area"];
                                $id_user      = $data["id_user"];
                                $user_name         = $data["user_name"];
                                $task         = $data["id_task"];
                                $desc_task    = $data["desc_task"];
                                
                              }else {
                                echo "No Data in Query";
                              }



                             }


                   else{
                      $id_area        = "";
                      $desc_area      = "";
                      $id_user        = "";
                      $user_name          = "";
                      $task           = "";
                      $desc_task      = "";
                    }//if(isset($id_task))

                   ?>



                            <?php
                             
                            //Form to Reg Task
                            $val1 = $id_area . "-"  . $desc_area;
                            $val2 = $id_user . "-"  . $user_name;

                            if(isset($id_task)) {
                              $query = "SELECT id_area, desc_area FROM areas EXCEPT where id_area <> '$id_area'";
                              $combo = new combo($query,"area","selectArea", $val1 ,"Area","required","","","1");

                              $query = "SELECT id_user, user_name FROM users EXCEPT where id_user <> '$id_user'";
                              $combo = new combo($query,"usuario","selectUser", $val2 ,"Usuario al que se le asigna la tarea","required","","","1");


                            }else{
                              $query = "SELECT id_area as area, desc_area as descripcion FROM areas ORDER BY desc_area";
                              $combo = new combo($query,"area","selectArea","","Area","required","","","1");

                              $query = "SELECT id_user as usuario, user_name as usuario FROM users ORDER BY id_user";
                              $combo = new combo($query,"usuario","selectUser","","Usuario al que se le asigna la tarea","required","","","1");

                            }


                              $form -> addField(6, array(
                              "field_name"    =>  "desc_task",
                              "label_field"   =>  "Tarea",
                              "readonly"      =>  "",
                              "disabled"      =>  "",
                              "value"         =>  $desc_task,
                              "rows"          =>  "4",
                              "style"         =>  "",
                              "js"            =>  "",
                              "placeholder"   =>  "Descripción de la tarea",
                              "required"      =>  "required",
                              "autofocus"     =>  ""
                              ));


                          if(isset($id_task)) {
                            $form -> addField(3, array(
                                "type_button"    =>  "btn btn-primary",
                                "legend"    =>  "Actualizar"

                                ));

                          }else{

                             $form -> addField(3, array(
                                "type_button"    =>  "btn btn-primary",
                                "legend"    =>  "Registrar"

                                ));
                          }

                      $form->closeForm();

                            ?>

                  </div>
              </div>

          </div>
      </div>
  <!-- End Work Area -->



            
            <!-- INICIO CONTENIDO -->
   <?php
      
  

  ?>
       </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- ************************************************ -->       
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->