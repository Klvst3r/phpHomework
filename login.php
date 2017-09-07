<?php include 'assets/partials/head.php'; ?>




<div class="container">

	<div class="starter-template">
		<br/>
		<br/>
		<br/>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<form id="loginForm" action="validarCode.php" method="POST" role="form">
							<legend>Iniciar Sesión</legend>
						
							<div class="form-group">
								<label for="user_name">Usuario</label>
								<input type="text" name="user_name" class="form-control" id="user_name" autocomplete="off" autofocus required placeholder="Usuario">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="txtPassword" class="form-control" id="password" required placeholder="*****">
							</div>
							
						
							<button type="submit" class="btn btn-success">Ingresar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>

</div><!-- /.container -->

<?php include 'assets/partials/footer.php'; ?>