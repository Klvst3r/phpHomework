<?php

include 'assets/partials/head.php';
/*include 'assets/partials/menu.php';*/
?>

<!-- HEADER -->
    <header>

      <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button><!-- .navbar-toggle -->

            <a class="navbar-brand" href="#">
                <img src="assets/img/logo/hw.jpg" alt="PHP HomeWork Project" class="logo-home">
            </a>

        </div><!-- .navbar-header -->
        <div class="collapse navbar-collapse">

        	<ul class="nav navbar-nav navbar-left">
                <li class="nav-title">phpHomework</li>
                
            </ul>
            
        </div><!-- .collapse -->
    </div><!-- .container -->
</nav> <!-- .navbar -->   
</header >
<!-- HEADER -->
<!-- CONTENT -->
<section class="container-fluid wrap">
	<div class="starter-template" id="title-enroll">
		<div class="jumbotron jumbotron-ks">
			<div class="container-fluid">
				<h1 class="text-center">HomeWork</h1>
				<p class="text-center">Project in PHP native to construct a Control System of Homework</p>
				<p class="text-center">
					<a href="login.php" class="btn btn-success btn-lg">Login</a>
				</p>
			</div>
		</div>
	</div>

</section><!-- /.container -->
<!-- END CONTENT -->

<!--  FEATURES -->
<section class="wrap" id="system-features">
    <div class="container">
        <div class="header-section">
            <img src="assets/img/features.png" class="img-circle">
            <h2>Características del curso</h2>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <span class="glyphicon glyphicon-user"></span>
                <h4>Administración de Usuarios</h4>
            </div>
            <div class="col-sm-3">
                <i class="fa fa-clock-o fa-2x"></i>
                <h4>Registro de Tareas</h4>
            </div>
            <div class="col-sm-3">
                <i class="fa fa-graduation-cap fa-2x"></i>
                <h4>Informes en PDF</h4>
            </div>
            <div class="col-sm-3">
                <i class="fa fa-mobile fa-2x"></i>
                <h4>Accesible desde cualquier dispositivo</h4>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</section>
<!-- END FEATURES -->

<!-- FOOTER -->
<footer id="footer">
    <div class="container-fluid">
        <p>phpHomework - Boostrap 3 y PHP &copy; 2017 | Made with <i class="fa fa-heart"> 
            by <a href="#" class="">Klvst3r</a></i></p>
        </div><!-- .container-fluid -->
    </footer>
    <!-- FOOTER -->

<?php 

include 'assets/partials/footer.php'; 
?>