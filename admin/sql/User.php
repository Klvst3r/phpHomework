<?php

//include '../controller/UserController.php';
include '../data/Connect.php';
include '../assets/class/SQL.php';

//UserController::tableUsers();

//SQL::test();

class User extends Connect {
	
	protected static $cnx;

	private static function getConection(){

		self::$cnx = Connect::connection();
		
	}//getConection

	private static function disconnect(){
		//This close the conection in PDO
		self::$cnx = null;
	}



	public static function getTableUsers($sql, $action){

		$query = $sql;

		self::getConection();

		$result = self::$cnx->prepare($query);

		$result->execute();

		$rows = $result->rowCount();
		$cols = $result->columnCount();

		if($rows > 0){

			echo '<table class="table table-striped table-hover">';
			echo '<thead>
			<tr>';
			foreach(range(0, $result->columnCount() - 1) as $column_index){
				$meta[] = $result->getColumnMeta($column_index);
			}

			for ($i=0; $i < $cols; $i++){
				echo '<th>' . $meta[$i]["name"] . '</td>';	
			}       		
			echo '<th>Acción</th>';

			echo '</tr>
			</thead>
			<tbody>';
			for($i = 0; $i < $rows; $i++){
				$data = $result->fetch();
				echo '<tr>';

				for($j = 0; $j < $cols; $j++){
					echo '<td>' . $data[$j] .'</td>';
				}
				//echo '<td>' . $action . '</td>';

				//Make the corrrecton to delete the rigth User not only for the number of the row in wtue query
				//$id = $i + 1;
				$id = $data["ID"];
				$edit = '<a class="btn btn-primary btn-sm" href="action.php?a=4&b='. $id .'">Editar</a>';
            	//$delete = '<button class="btn btn-danger btn-sm" onclick="confirmar(action.php?a=6)">Eliminar</button>';
            	
            	$delete = '<button class="btn btn-danger btn-sm" onclick="confirmar(\'action.php?a=11&b=' . $id . '\')">Eliminar</button>';
				echo '<td>' . $edit . ' ' . $delete . '</td>';

				echo '</tr>';


			}
			echo "</tbody></table><br/>";

		}else{
			echo "No hay usuarios en la BD";
		}

		//free memory
		self::disconnect();

	}//function getTableUsers






} //Class



?>