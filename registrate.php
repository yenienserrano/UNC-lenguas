<?php $title = "Registrate - Facultad de Lenguas - LMS"; ?>
<html>
	<?php include 'header.php'; ?>
	<body>     
		<div class="container-fluid main-content" id="login">	 
			<div class="row">
				<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 login-sidebar">
					<div class="logo"><img src="img/logo.png"></div>
					<div class="info">
						<h3>Instrucciones de acceso</h3>
						Para entrar a un curso, debe ingresar a la plataforma utilizando su DNI, tanto en su nombre de usuario como en su contraseña (sin puntos ni espacios). Por ejemplo:
						<br><br>
						<b>Usuario: 26333444</b>
						<br><br>
						<b>Contraseña: 26333444</b>
						<br><br>
						Si tiene inconvenientes para ingresar, contáctese a través de este <a href="#">formulario</a>.
					</div>
				</div>  
				<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 login-data justify-content-end">
					<div class="card-content ">
						<h1>Registro!</h1>
						<div class="card w-100">							
							<div>Por favor ingresá tus datos</div>
							<form id="login-form" method="post" action="dashboard.php">
								<div class="form-group has-feedback">
								<input type="text" class="form-control" name="user" id="user" placeholder="Ingresá tu DNI">
								<span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
								</div>
								<div class="form-group has-feedback">
									<input type="email" class="form-control" name="email" id="email" placeholder="Ingresá tu Email">
									<span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
									</div>
								<div class="form-group has-feedback">
								<input type="password" class="form-control" name="password" id="password" placeholder="Ingresá tu Password">
								<span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
								</div>
								<div class="form-group has-feedback">
									<input type="password" class="form-control" name="password2" id="password2" placeholder="Reingresá tu Password">
									<span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
									</div>
								
								<input type="submit" class="btn" value=">">
							</form><br>
							<img src="img/card-decorator.png" class="decorator" style="width:50%; margin-top:20px;">
						</div>						
					</div>					
				</div>
				<div class="logo-unc">
					<img src="img/logo-unc.png">
				</div>
			</div>
		</div>
		
		<?php include 'footer.php'; ?>
	</body>
</html>