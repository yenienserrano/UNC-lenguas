<?php $title = "Login - Facultad de Lenguas - LMS"; ?>
<html>
	<?php include 'header.php'; ?>
	<body>     
		<div class="container-fluid main-content" id="login">	 
			<div class="row">
				<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 login-sidebar">
					<div class="logo"><img src="img/logo.png"></div>
					<div class="info ml-3 mb-4">
						<h2 class="achicartitulo border-bottom pb-2">Instrucciones de acceso</h2>
						<p class="achicarletra2 mt-3">Para entrar a un curso, debe ingresar a la plataforma utilizando su DNI, tanto en su nombre de usuario como en su contraseña (sin puntos ni espacios). Por ejemplo:</p>
						
						<p class="achicarletra3"><b>Usuario: 26333444</b></p>
						
						<p class="achicarletra3"><b>Contraseña: 26333444</b></p>
						
						<p class="achicarletra2">Si tiene inconvenientes para ingresar, contáctese a través de este <a href="#">formulario</a>.</p>
						<div class="d-flex">
							<img class="achicar" src="./img/whatsapp.png" alt="">
							<p class="achicartitulo ml-2 mt-1"> 3512102936</p>
						</div>
					</div>
				</div>  
				<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 login-data justify-content-end">
					<div class="bg2">
						<div class="card-content">							
							<div class="card w-100">
								<div class="social-login">
									<h3>Podés ingresar con tus cuentas de:</h3>
									<a href="javascript:void(0)" onclick="document.querySelector('form').submit()"><img src="img/facebook_btn_login.png"></a><br>
									<a href="javascript:void(0)" onclick="document.querySelector('form').submit()"><img src="img/google_btn_login.png"></a>
								</div>
								<div>o con tu documento</div>
									<form id="login-form" method="post" action="dashboard.php">
										<div class="form-group has-feedback">
										<input type="text" class="form-control" name="user" id="user" placeholder="DNI">
										<span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
										</div>
										<div class="form-group has-feedback">
										<input type="text" class="form-control" name="password" id="password" placeholder="Password">
										<span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
										</div>
										<div class="text-right"><a href="#" class="forgot achicarletra" onclick="return false;">Olvidaste tu contraseña?</a></div>
										<input type="submit" class="btn" value="Entrar">
									</form><br>
								<div class="signup mb-4 achicarletra">No tenés cuenta? <a href="registrate.php">Registrate</a></div>
							</div>												
						</div>
					</div>
				<div class="logo-unc mb-3 mr-3">
					<img src="img/logo-unc.png">
				</div>
			</div>
		</div>
		
		<?php include 'footer.php'; ?>
	</body>
</html>