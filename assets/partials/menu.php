<?php

/*if(isset($_SESSION["user"])){
  $code = $_SESSION["user"]["code"];
  if($code == "true" and $_SESSION["user"]["code"] == "true"){*/

?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Panel de Control | 
            <span class="label label-info"><?php echo $_SESSION["user"]["id_priv"]==1?'Admin':'Registro'; ?></span></a>


        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Principal</a></li>
            <?php if(!isset($_SESSION["user"])){ ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="registro.php">Registro</a></li>
            <?php }else{ ?> 
            <?php if($_SESSION["user"]["id_priv"] == 1) { ?>
            <li><a href="../logged_in.php">Admin</a></li>
            <?php } else { ?>
            <li><a href="user.php">Usuario</a></li>
            <?php
             } 
           }

           
            ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<?php

//After login turn off code
/*$_SESSION["user"]["code"] = "false";

}else{
      $code ="false";
        //header("location:login.php");
        header("location:view/signout.php");
      }


}else {

header("location:login.php");
}*/
?>