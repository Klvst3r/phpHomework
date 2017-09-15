<?php
include 'assets/partials/mainHead.php';
include 'assets/partials/menu.php';

//verifing if user's session exist
//if(isset($_SESSION["user"])){

//$code = $_SESSION["user"]["code"];

	
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
					//echo $_SESSION["user"]["id_priv"]==1?'Admin':'Registro'; 
			//if($code == "true" and $_SESSION["user"]["code"] == "true"){
				if($_SESSION["user"]["id_priv"]==1){


					?>
					<p>Panel de Control | <span class="label label-info">Redirigiendo a su menu...</span></p>
					<?php
					//echo"<meta HTTP-EQUIV='Refresh' CONTENT='2; URL=administrador.php'<head/>";
					header("location:admin/"); 
					//$_SESSION["user"]["code"] = "false";
				}else{
					//header("location:usuario.php"); 
					?>
					<p>Panel de Control | <span class="label label-info">Redirigiendo a su menu...</span></p>
					<?php
					echo"<meta HTTP-EQUIV='Refresh' CONTENT='2; URL=usuario.php'<head/>";
				}

			/*}
			else{
			$code ="false";
				header("location:login.php");
			}*/


				?>

				<p>
					<a href="view/signout.php" class="btn btn-primary btn-lg">Cerrar Sesión</a>
				</p>
			</div>
		</div>
	</div>

</div><!-- /.container -->

<?php 
/*echo $code;
echo "<br/>";
echo $_SESSION["user"]["code"];*/




//temporaly unused
//header("location:login.php");
//}

include 'assets/partials/mainFooter.php'; ?>