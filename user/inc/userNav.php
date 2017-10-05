<?php


if(isset($_SESSION["user"]) and isset($_SESSION["user"]["url"])){

  $code = $_SESSION["user"]["code"];
//  echo $code;
  if($code == "true" and $_SESSION["user"]["code"] == "true"){
  //Definition of Paht principal
  define("PATH", $_SESSION["user"]["url"]);

?>

<!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>K</b>H</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Klvst3r</b> Homework</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages | Notifications | Task -->

          <!-- End Messages | Notifications | Task -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/Klvst3r.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">
                <?php echo $_SESSION["user"]["name"];  ?> <i class="fa fa-caret-down"></i>
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/Klvst3r.jpg" class="img-circle" alt="User Image">

                <p>
                  Klvst3r Stark - Web Developer
                  <small>CEO since November 2016</small>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- End Menu Body -->
              
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="action.php?a=1" class="btn btn-default btn-flat">Profile 
                    <i class="fa fa-cog fa-spin fa-1x fa-fw text-green"></i></a>
                </div>
                <div class="pull-right">
                  <a href="action.php?a=2" class="btn btn-default btn-flat">Config  
                    <i class="fa fa-gears text-blue"></i></a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <!-- LogOut -->
            <a href="../view/signout.php" data-toggle="control-sidebar"><i class="fa fa-power-off fa-1x text-red"></i></a>          </li>
          <!-- End Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>

<?php

//After login turn off code
$_SESSION["user"]["code"] = "false";

}else{
      $_SESSION["user"]["code"] = "false";
      $code ="false";
        header("location:../login.php");
      }

$_SESSION["user"]["code"] = "false";

}else {

header("location:../login.php");
}
?>
