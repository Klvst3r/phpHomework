<?php
include'../data/Form.php';
?>  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Áreas
        <small>Consulta</small>
      </h1>
      <ol class="breadcrumb">
        
        <?php
        echo '<li><a href="'. PATH .'/user/"><i class="fa fa-user"></i> Inicio</a></li>';
        ?>
        <li class="active"><?php echo isset($id_user) ? 'Actualización' : 'Nueva' ?> de Área</li>
      </ol>
    </section>
    

    <!-- Main content -->
    <section class="content">
    <!-- INICIO CONTENIDO -->
    <!-- ************************************************ -->       
   <div id="wrapper">
        
        <div class="row" style="background-color: #f9f9f9">
                <div class="col-lg-12">
                  <h1 class="page-header"><?php echo isset($id_user) ? 'Actualizar' : 'Nueva' ?> Área |
                    <a href="action.php?a=5" class="btn btn-default">
                        <i class="fa fa-users"></i> Ver Listado Áreas</a>
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
                          $form = new Form('newArea','POST','action.php?a=9', 'form', '');
                          ?>
                            <legend>Información del Área</legend>


                            <?php
                            //Data of area if is edition 
                            if(isset($id_user)) {
                                   $form -> addField(4, array(
                                    "field_name"    =>  "id_area",
                                    "value"   =>  $id_area
                                    ));
                                    //echo "Variable recibida: " . $id_area;
                                    
                             

                             //Select data for values in form
                             

                             $query = "SELECT id_area, desc_area FROM areas where id_area = :id_area";

                             $select = new Data();                                                         

                             $select::getConection();
    
                              //$query = $sql;

                              $result = $select::$cnx->prepare($query);

                              //echo $id_area;

                              //The parameters are sent the user in the form by user_name field, the object $user, to the user of the form
                              $id_area = $id_user;
                              $result->bindParam(":id_area", $id_area);

                              //We run the query the PDO connection
                              $result->execute();

                              $rows = $result->rowCount();

                              if($rows > 0){
                                $data = $result->fetch();


                                $desc = $data["desc_area"];

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
                              "field_name"    =>  "desc_area",
                              "label_field"   =>  "Nombre del área",
                              "readonly"      =>  "",
                              "disabled"      =>  "",
                              "value"         =>  $value,
                              "maxlength"     =>  "",
                              "size"          =>  "",
                              "style"         =>  "",
                              "js"            =>  "",
                              "placeholder"   =>  "Descripción del área",
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