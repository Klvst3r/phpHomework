
<?php

include '../data/Connect.php';
include '../assets/class/SQL.php';
include '../model/Privilege.php';
//include '../data/PrivilegeDAO.php';


class PrivilegeSQL extends Connect {
	
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
				//echo '<td>' . $action . '</td>';
				$id = $i + 1;
				$edit = '<a class="btn btn-primary btn-sm" href="action.php?a=6&b='. $id .'">Editar</a>';
            	//$delete = '<button class="btn btn-danger btn-sm" onclick="confirmar(action.php?a=6)">Eliminar</button>';
            	
            	$delete = '<button class="btn btn-danger btn-sm" onclick="confirmar(\'action.php?a=10\')">Eliminar</button>';
				echo '<td>' . $edit . ' ' . $delete . '</td>';
				echo '</tr>';


			}
			echo "</tbody></table><br/>";

		}else{
			echo "No hay privilegios en la BD";
		}

		//free memory
		self::disconnect();


}//function getTableUsers

/*public static function regPrivilege($priv){

	//echo $priv;

	$query = "INSERT INTO privileges (id_priv, desc_priv) VALUES (NULL, :desc_priv)";

	self::getConection();
	
	$result = self::$cnx->prepare($query);

	//echo "<br/>";

	//echo $query;
	//$priv = $privilege->getDesc_priv();
	

	echo "Insercion Exitosa";
	$desc_priv = $priv;
	$result->bindParam(":desc_priv", $desc_priv);
*/
	/*if($result->execute()){
			//return true;
			return "true";
		}

		return "false";*/

		//disconect
		//self::disconnect();

	/*$obj_priv = new Privilege();

	$obj_priv->setDesc_priv($data);*/

	//Send the object from model
	//return $obj_priv;
//}// function regPrivilege

} //Class