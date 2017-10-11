
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tareas
        <small>Registro</small>
      </h1>
      <ol class="breadcrumb">
        
        <?php
        /*
        if(isset($_GET["b"])){
          $id_user = $_GET["b"];
          //echo "variable recibida via GET: " . $id_user;
          }
        */

        echo '<li><a href="'. PATH .'/user/"><i class="fa fa-user"></i> Inicio</a></li>';
       
        ?>
        <li class="active"><?php echo isset($id_user) ? 'Actualización' : 'Registro' ?> de Tarea</li>
        
      </ol>
    </section>
    

    <!-- Main content -->
    <section class="content">
    <!-- INICIO CONTENIDO -->
    <!-- ************************************************ -->       
   <div id="wrapper">
        <?php
        //echo "Id User: " . $id_user;
        ?>
        <div class="row" style="background-color: #f9f9f9">
                <div class="col-lg-12">
                  <h1 class="page-header"><?php echo isset($id_user) ? 'Actualizar' : 'Nueva' ?> Tarea |
                    <a href="action.php?a=5" class="btn btn-default">
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
                          $form = new Form('newTask','POST','action.php?a=6', 'form', '');
                          ?>
                            <legend>Información de la tarea</legend>


                            <?php
                             
                            //Form to Reg Task
                           
                            
                            $query = "SELECT id_area as area, desc_area as descripcion FROM areas ORDER BY desc_area";
                            $combo = new combo($query,"area","selectArea","","Area","required","","","1");

                            $query = "SELECT id_user as usuario, user_name as usuario FROM users ORDER BY id_user";
                            $combo = new combo($query,"usuario","selectUser","","Usuario al que se le asigna la tarea","required","","","1");


                              $form -> addField(6, array(
                              "field_name"    =>  "desc_task",
                              "label_field"   =>  "Tarea",
                              "readonly"      =>  "",
                              "disabled"      =>  "",
                              "value"         =>  "",
                              "rows"          =>  "4",
                              "style"         =>  "",
                              "js"            =>  "",
                              "placeholder"   =>  "Descripción de la tarea",
                              "required"      =>  "required",
                              "autofocus"     =>  ""
                              ));


                          if(isset($id_user)) {
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