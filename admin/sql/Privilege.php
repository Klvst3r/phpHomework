<?php

include '../data/Connect.php';
include '../assets/class/SQL.php';


class Privilege extends Connect {
	
	protected static $cnx;

	private static function getConection(){

		self::$cnx = Connect::connection();
		
	}//getConection

	private static function disconnect(){
		//This close the conection in PDO
		self::$cnx = null;
	}


	public static function getTablePrivileges($sql, $action){

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
				echo '<td>' . $action . '</td>';
				echo '</tr>';


			}
			echo "</tbody></table><br/>";

		}else{
			echo "No hay privilegios en la BD";
		}

		//free memory
		self::disconnect();


}//function getTableUsers

public static function regPrivilege($sql){

	$query = $sql;

	echo $query;

		//self::getConection();

		//$resultado = self::$cnx->prepare($query);

}// function regPrivilege

} //Class