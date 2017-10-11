<?php
include '../data/Reconnect.php';
include '../assets/class/SQL.php';

class Combo extends Reconnect {

	protected static $cnx;

	function getConection(){

		self::$cnx = Connect::connection();

	}//getConection

	function disconnect(){
		//This close the conection in PDO

		self::$cnx = null;
	}

	function combo($sql, $name, $id, $value, $label, $req, $enable, $onchange, $iniselect){
		//echo "combo<br/>";
        /*
        echo "Query: ". $query . "<br/>";
        echo "Name: ". $name . "<br/>";
        echo "ID: ". $id . "<br/>";
        echo "Value: ". $value . "<br/>";
        echo "Enable: ". $enable . "<br/>";
        echo "On Change: ". $onchange . "<br/>";
        echo "Ini Select: " . $iniselect . "<br/>";
        */
       
       

		$query = $sql;

		self::getConection();

		$result = self::$cnx->prepare($query);

		$result->execute();

		$rows = $result->rowCount();
		$cols = $result->columnCount();

		//echo "Filas: " . $rows;
		echo '<div class="form-group">';
		echo '<label for="' . $id . '">' . $label .'</label>';
		/*<select name="privilegio" id="inputPrivi" class="form-control" required="required">*/
		echo '<select name="' . $name . '" id="' . $id. '" class="form-control" required="' . $req . '" '. $enable . " " . $onchange . '>';

		if($rows > 0){

			if ($iniselect==1){
				//If some value is received from an unpdate form
				if($value != ""){

					$divide_values = explode("-",$value);
					$id = $divide_values[0];
					$desc = $divide_values[1];

					echo "<option value='" . $id . "'>". $desc . "</option>";
       			}
                else{

                	echo "<option value='0'>[ Seleccione una opcion ]</option>";
                }
                
                while(list($id, $descrip) = $result->fetch()){
	               if ($id == $value)
	                   echo '<option selected value="' . $id . '">' . $descrip. '</option>';
	               else
	                   echo '<option value="' . $id . '">' . $descrip. '</option>';
	            }

            }

		}else{
			echo "<option value='0'>'No hay opciones !!'</option>";
		}

		echo '</select>';
		echo '<div>';

		echo "<br/>";
		//Disconect from BD
		self::disconnect();
   }//function combo

   //This method doesn*t use in the system
   function comboUpdate($sql, $name, $id, $value, $label, $req, $enable, $onchange, $iniselect){
		//echo "combo<br/>";
        /*
        echo "Query: ". $query . "<br/>";
        echo "Name: ". $name . "<br/>";
        echo "ID: ". $id . "<br/>";
        echo "Value: ". $value . "<br/>";
        echo "Enable: ". $enable . "<br/>";
        echo "On Change: ". $onchange . "<br/>";
        echo "Ini Select: " . $iniselect . "<br/>";
        */

		$query = $sql;

		self::getConection();

		$result = self::$cnx->prepare($query);

		$result->execute();

		$rows = $result->rowCount();
		$cols = $result->columnCount();

		//echo "Filas: " . $rows;
		echo '<div class="form-group">';
		echo '<label for="' . $id . '">' . $label .'</label>';
		/*<select name="privilegio" id="inputPrivi" class="form-control" required="required">*/
		echo '<select name="' . $name . '" id="' . $id. '" class="form-control" required="' . $req . '" '. $enable . " " . $onchange . '>';



		if($rows > 0){

			if ($iniselect==1){

                echo "<option value='0'>[ Seleccione una opcion ]</option>";
                while(list($id, $descrip) = $result->fetch()){
	               if ($id == $value)
	                   echo '<option selected value="' . $id . '">' . $descrip. '</option>';
	               else
	                   echo '<option value="' . $id . '">' . $descrip. '</option>';
	            }

            }

		}else{
			echo "<option value='0'>'No hay opciones !!'</option>";
		}

		echo '</select>';
		echo '<div>';

		echo "<br/>";
		//Disconect from BD
		self::disconnect();
   }//function combo



}//Class Combo
?>
