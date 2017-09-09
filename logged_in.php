<?php
include 'assets/partials/mainHead.php';
include 'assets/partials/menu.php';
?>

<div class="container">

	<div class="starter-template">
		<br/>
		<br/>
		<br/>
		<div class="jumbotron">
			<div class="container text-center">
				<h1><strong>Bienvenido</strong> <?php echo $_SESSION["user"]["name"]; ?></h1>
				<p>Panel de Control | <span class="label label-info"><?php echo $_SESSION["user"]["privilege"]==1?'Admin':'Registro'; ?></span></p>
				<p>
					<a href="cerrar-sesion.php" class="btn btn-primary btn-lg">Cerrar Sesión</a>
				</p>
			</div>
		</div>
	</div>

</div><!-- /.container -->

<?php include 'assets/partials/mainFooter.php'; ?>