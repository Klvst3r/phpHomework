<?php
include '../data/Connect.php';
include '../model/Task.php';

class TaskSQL extends Connect {

	protected static $cnx;

	private static function getConection(){

		self::$cnx = Connect::connection();
		
	}//getConection	


	private static function disconnect(){
		//This close the conection in PDO
		self::$cnx = null;
	}


	public static function getTableTasks_Pag($query_count, $sql, $action){

	/**
	 * Vars to build pagination
	 */
	$order="id_task ASC";
	$id_url = $_GET["a"];
	$url = basename($_SERVER ["PHP_SELF"]) . '?a=' . $id_url;
	$limit_end = 7;
	//safe the value of the actual position
	if(!isset($_GET["pos"])){
		$ini = 1;
	}else{
		$ini = $_GET["pos"];

	}
	$init = ($ini-1) * $limit_end;

	/*-------------------------*/

	$query = $sql;
	$query .= " LIMIT $init, $limit_end";//add limit init and limit end to the query



	self::getConection();

	/**
	 * -Execute a new query only to count the fields in the table of BD
	 */
	$count = self::$cnx->prepare($query_count);

	$count->execute();

	$rows_count = $count->fetch();

	$counted = $rows_count[0];
	/*---------------------------------------------------------*/


	//Query of data 
	$result = self::$cnx->prepare($query);

	$result->execute();

	$rows = $result->rowCount();
	$cols = $result->columnCount();

	/**
	 * Calculate pages
	 */
	$total = ceil($counted/$limit_end);

		/*-------------------------------------*/

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
			//$id = $data[$i];
			$id = $data["ID"];
			



			$edit = '<a class="btn btn-primary btn-sm" href="action.php?a=6&b='. $id .'">Editar</a>';
	    	//$delete = '<button class="btn btn-danger btn-sm" onclick="confirmar(action.php?a=6)">Eliminar</button>';
	    	
	    	$delete = '<button class="btn btn-danger btn-sm" onclick="confirmar(\'action.php?a=11&b=' . $id . '\')">Eliminar</button>';
			echo '<td>' . $edit . ' ' . $delete . '</td>';
			echo '</tr>';


		}
		echo "</tbody></table>";

		  /*
		   * numeration of records [important]
		   */ 
			  //echo "<div class='pagination'>";
			  echo '<ul class="pagination">';
			  /****************************************/
			  if(($ini - 1) == 0)
			  {
			    echo '<li class="disabled"><a href="#">&laquo;</a></li>';
			  }
			  else
			  {
			    echo '<li><a href="'.$url.'&pos='.($ini-1).'"><b>&laquo;</b></a></li>';
			  }
			  /****************************************/
			  for($k=1; $k <= $total; $k++)
			  {
			    if($ini == $k)
			    {
			      echo '<li class="active"><a href="#""><b>'.$k.'</b></a></li>';
			      
			    }
			    else
			    {
			    	
			      echo "<li><a href='$url&pos=$k'>".$k."</a></li>";
			    }
			  }
			  /****************************************/
			  if($ini == $total)
			  {
			    echo '<li class="disabled"><a href="#">&raquo;</a></li>';
			  }
			  else
			  {
			  	echo '<li><a href="'.$url.'&pos='.($ini+1).'"><b>&raquo;</b></a></li>';

			  }
			  echo "</ul>";
			  //echo "</div>";
			  /*******************END*******************/
			 /*
		   * End numeration of records [important]
		   */ 


	}else{
		echo "There aren't areas in BD to build table";
	}

	//free memory
	self::disconnect();


	}//function getTableTasks

}

?>