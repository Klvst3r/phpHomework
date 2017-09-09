<?php
include 'assets/partials/mainHead.php';
include 'assets/partials/menu.php';

//verifing if user's session exist
//if(isset($_SESSION["user"])){
	
?>

<div class="container">

	<div class="starter-template">
		<br/>
		<br/>
		<br/>
		<div class="jumbotron">
			<div class="container text-center">
				<h1><strong>Bienvenido</strong> <?php echo $_SESSION["user"]["name"]; ?></h1>
				<?php 
					//echo $_SESSION["user"]["privilege"]==1?'Admin':'Registro'; 
				if($_SESSION["user"]["privilege"]==1){

					?>
					<p>Panel de Control | <span class="label label-info">Redirigiendo a su menu...</span></p>
					<?php
					echo"<meta HTTP-EQUIV='Refresh' CONTENT='2; URL=administrador.php'<head/>";
					//header("location:administrador.php"); 
				}else{
					//header("location:usuario.php"); 
					?>
					<p>Panel de Control | <span class="label label-info">Redirigiendo a su menu...</span></p>
					<?php
					echo"<meta HTTP-EQUIV='Refresh' CONTENT='2; URL=usuario.php'<head/>";
				}


				?>

				<p>
					<a href="view/signout.php" class="btn btn-primary btn-lg">Cerrar Sesión</a>
				</p>
			</div>
		</div>
	</div>

</div><!-- /.container -->

<?php 

//temporaly unused
//header("location:login.php");
//}

include 'assets/partials/mainFooter.php'; ?>