<?php

//include '../controller/UserController.php';
include '../data/Connect.php';
include '../assets/class/SQL.php';

//UserController::tableUsers();

//SQL::test();

class ListUser extends Connect {
	
	protected static $cnx;

	private static function getConection(){

		self::$cnx = Connect::connection();
		
	}//getConection


	function tableUsers($link, $query){
        if ($this->runQuery($link, $query)){
                $columnas=mysqli_num_fields($this->IdConexion);
                echo '<table class="table table-hover">';
                echo '<thead>
                        <tr>';
                while ($nameField = mysqli_fetch_field($this->IdConexion)){                    
                     echo '<th>'.$nameField->name.'</th>';
                }
                echo '</tr>
                      </thead>
                      <tbody>';
                for($i=0; $i<$this->filas(); $i++){
                    echo "<tr>";
                    $dump = $this -> data();                        
                    for ($j=0; $j<$columnas; $j++){                        
                         echo '<td>'.$dump[$j].'</td>';
                    }
                    echo "</tr>";
                }                                                                                        
                echo "</tbody></table><br/>";
        }
}//table

	public static function getTableUsers(){

		$query = " SELECT id_user, user_name, user_email, name, date_reg FROM users";

		self::getConection();

		$result = self::$cnx->prepare($query);

		$result->execute();


		$rows = $result->rowCount();
		$cols = $result->columnCount();

		/* -- Cols -- */
    		printf("El resultado tiene %d campos.\n", $cols);
		echo "<br/>";

		foreach(range(0, $result->columnCount() - 1) as $column_index)
			{
				$meta[] = $result->getColumnMeta($column_index);
			}


			for ($i=0; $i < $cols; $i++){
				echo $meta[$i]["name"]."<br/>";	
			}
			


		/* -- End Cols -- */			
		echo "<br/>";

		/* -- Rows -- */

		if($rows > 0){

			echo "Hay " . $rows . " usuarios en la BD <br/>";


			for($i = 0; $i < $rows; $i++){
				$data = $result->fetch();
				echo $data["user_name"]."<br/>";
			}

		/* -- End Rows -- */			

    		

    		
    
    


		}else{
			echo "No hay usuarios en la BD";
		}

		//$rows;
		





 	}



		public static function nCols(){

			self::getConection();

			$dbh = self::$cnx->prepare($query);

			$pdo_stmt = $dbh->execute(' SELECT id_user, user_name, user_email, name, date_reg FROM users');

			foreach(range(0, $pdo_stmt->columnCount() - 1) as $column_index)
			{
				$meta[] = $pdo_stmt->getColumnMeta($column_index);
			}

			while($row = $pdo_stmt->fetch(PDO::FETCH_NUM))
			{
				foreach($row as $column_index => $column_value)
				{
    //do something with the data, using the ids to establish the discussion.has_many(comments) relationship.
				}
			}
}//function nameCols


} //Class

$data = "hola SQL";

$query = "select "

/*
query
eject query
num rows
 */

?>