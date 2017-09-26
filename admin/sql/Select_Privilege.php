<?php

function doSelect($param){

$query = "SELECT id_priv, desc_priv FROM privileges where id_priv = :id_priv";

                             //Data::makeQuery($query, $id_user);

                             //$privilegio = new Privilege();

                             //$privilege = $privilegio->getDesc_priv();
                              
                             $select = new Data();                                                         

                             $select::getConection();
    
                              //$query = $sql;

                              $result = $select::$cnx->prepare($query);

                              //The parameters are sent the user in the form by user_name field, the object $user, to the user of the form
                              $id_priv = $param;
                              $result->bindParam(":id_priv", $id_priv);

                              //We run the query the PDO connection
                              $result->execute();

                              $rows = $result->rowCount();

                              if($rows > 0){
                                $data = $result->fetch();

                                //$privilegio = new Privilege();

                                $desc = $data["desc_priv"];

                                //$privilegio->setDesc_priv($desc);

                                //$desc = $privilegio->getDesc_priv($privilegio);

                                //echo $desc;
                                


                              }else {
                                echo "No Data in Query";
                              }

    return $desc;

}
?>