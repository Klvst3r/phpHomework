<?php


class form {
    
  function form($name, $method, $action, $role, $enctype){
  	echo "<form name='$name' method='$method' action='$action' role='$role' $enctype>";

  }//form function


  function verifyParams($array, $limit, $type){
           if (count($array) <> $limit){
                echo 'faltan par�metros para agregar un campo tipo <b>' . $type . '</b>... solo pasó <b>' . count($array) . '</b> de <b>' . $limit . '</b>.';   
                return 0;
           }
           else{
                return 1;  //Return1=true         
           }
  }//function verifyParams

  function addField($type, $p){
  	switch ($type){
  		case 1: //text
        	if ($check = $this -> verifyParams($p, 12, "TEXTO")){
     
		    /*
		    1. nombre del campo = user_name -> $p["field_name"]
		    2. etiqueta texto  -> $p["label_field"]
		    3. solo lectura -> $p["readonly"]
		    4. deshabilitado -> $p["disabled"]
		    5. value -> $p["val_field"]
		    6. longitud maxima -> $p["maxlength"]
		    7. tamaño -> $p["size"]
		    8. style -> $["style"]
		    9. javascript ->$p["js"]
		    10.placeholder -> $p["placeholder"]
		    11. required -> $p["required"]
		    12. autofocus -> $p["autofocus"]*/

                 echo '<div class="form-group">
                        <label for=" '. $p["field_name"] . ' "> ' . $p["label_field"] . '</label>
                          <input type="text" name="' . $p["field_name"] . '" class="form-control" id=" ' . $p["field_name"] . '" ' .  
                          $p["readonly"] . ' ' . $p["disabled"] . ' value="' . $p["value"] . '" maxlength=' . $p["maxlength"] .
                          'size=' . $p["size"] . 'style='. $p["style"] . ' ' . $p["js"] . '    placeholder="' . $p["placeholder"] . 
                          '" '. $p["required"]. ' ' . $p["autofocus"] . '/>
                      </div>';



            }            
        break;
       
        /*case 3: //submit
  			if ($check = $this -> verifyParams($p, 5, "SUBMIT")){
            	echo "<input type='submit' $p[disabled]  name='$p[nombre]' value='$p[value]' style='$p[style]' $p[js]>";   
            }
        break;
        case 4: //hidden
            if ($check = $this -> verifyParams($p, 2, "HIDDEN")){
                echo "<input name='$p[nombre]' type='hidden' value='$p[value]'/>";
            }
        break; */
        default: //
                echo 'Error al agregar el campo, opción no valida <b>' . ($type). '</b>...el programa abortó.';
        exit;

  	}//switch

  }//function addFlield




  function closeForm(){
    echo "</form>";
        return 1;
    }//closeForm


}//Class Form
?>