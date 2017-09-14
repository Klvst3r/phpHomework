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

		if($rows > 0){

			echo "Hay " . $rows . " usuarios en la BD <br/>";

			$cols = $result->columnCount();
			

    		printf("EL resultado tiene %d campos.\n", $cols);

    		echo "<br/>";

			for($i = 0; $i < $rows; $i++){
				$data = $result->fetch();
				echo $data["user_name"]."<br/>";
			}

		}else{
			echo "No hay usuarios en la BD";
		}

		//$rows;
		



 	}

} //Class

$data = "hola SQL";

$query = "select "

/*
query
eject query
num rows
 */

?>