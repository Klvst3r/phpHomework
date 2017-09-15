<?php


class form {
    
  function form($name, $method, $action, $role, $enctype){
  	echo "<form name='$name' method='$method' action='$action' role='$role' $enctype>";

  }//form function

  function closeForm(){
    echo "</form>";
        return 1;
    }//closeForm


}//Class Form
?>