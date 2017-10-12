<?php


class form {
    
  function form($name, $method, $action, $role, $enctype){
  	echo "<form name='$name' method='$method' action='$action' role='$role' $enctype>";

  }//form function


  function verifyParams($array, $limit, $type){
           if (count($array) <> $limit){
                echo 'faltan parámetros para agregar un campo tipo <b>' . $type . '</b>... solo pasó <b>' . count($array) . '</b> de <b>' . $limit . '</b>.';   
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
               case 2: //password
                   if ($check = $this -> verifyParams($p, 6, "PASSWORD")){
                       /*echo "<input type='password' name='$p[nombre]' maxlength='$p[maxlength]' size='$p[size]' style='$p[style]' $p[js]>";   */
                    /*   
       		    	1. nombre del campo = user_name -> $p["field_name"]
       		    	2. etiqueta texto  -> $p["label_field"]
       		    	3. placeholder -> p["placeholder"]
       		    	*/

                    echo '<div class="form-group">
                            <label for="' . $p["field_name"] . '">' . $p["label_field"] . '</label>
                              <input type="password" name="' . $p["field_name"] . '" value = "' . $p["value"] . '" class="form-control" id="' . $p["field_name"] .
                              '" placeholder="'. $p["placeholder"] . '" '. $p["required"].' ' . $p["autofocus"] .'/>
                          </div>';
                   }
               break;
        case 3: //submit-button
  			if ($check = $this -> verifyParams($p, 2, "SUBMIT")){
            	/*echo "<input type='submit' $p[disabled]  name='$p[nombre]' value='$p[value]' style='$p[style]' $p[js]>";   */
            	/*<button type="submit" class="btn btn-primary">Registrar</button>*/
              /*
              <button type="button" class="btn btn-default">Default</button>
              <button type="button" class="btn btn-primary">Botón primario</button>
              <button type="button" class="btn btn-success">Acción Positiva</button>
              <button type="button" class="btn btn-info">Información</button>
              <button type="button" class="btn btn-warning">Aviso</button>
              <button type="button" class="btn btn-danger">Error</button>
               */
            	echo '<button type="submit" class="' . $p["type_button"] . '">' . $p["legend"] . '</button>';
            }
        break;
        case 4: //hidden
            if ($check = $this -> verifyParams($p, 2, "HIDDEN")){
                /*echo "<input name='$p[nombre]' type='hidden' value='$p[value]'/>";*/
                /*<input type="hidden" value="<?php echo $usuario->id ?>" name="usuario_id" />*/
                echo '<input type="hidden" value="' . $p["value"] . '" name="' . $p["field_name"] . '" />';
            }
        break; 
        case 5:
        	if ($check = $this -> verifyParams($p, 5, "EMAIL")){
        		/*
		    	1. nombre del campo = user_name -> $p["field_name"]
		    	2. etiqueta texto  -> $p["label_field"]
				3. value -> $p["value"]
				4. placeholder -> $p["placeholder"]
				5. required -> $p["required"]
		    	*/

        		echo '<div class="form-group">
                        <label for="' . $p["field_name"] . '">' . $p["label_field"] . '</label>
                          <input type="email" value="' .$p["value"] . '" name="' . $p["field_name"] . '" class="form-control" id="' .
                           $p["field_name"] . '" placeholder="' . $p["placeholder"] . '" ' . $p["required"]. '/>
                      </div>';
        	}
        break;
        case 6:
          if ($check = $this -> verifyParams($p, 11, "EMAIL")){
            /*
          1. nombre del campo = user_name -> $p["field_name"] ->ok
          2. etiqueta texto  -> $p["label_field"] -> ok
          3. value -> $p["value"] -> ok
          4. placeholder -> $p["placeholder"] ->
          5. id -> $p["required"]
            rows ->
          */

            echo '<div class="form-group">
                        <label for="' . $p["field_name"] . '">' . $p["label_field"] . '</label>
                          <textarea  value="' .$p["value"] . '" name="' . $p["field_name"] . '" class="form-control" id="' .
                           $p["field_name"] . '" placeholder="' . $p["placeholder"] . '" ' . $p["required"]. ' rows=' . $p["rows"] . '>' . $p["value"] . '</textarea>
                  </div>';
          }
        break;
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