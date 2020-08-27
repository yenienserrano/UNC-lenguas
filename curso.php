<?php $title = "Curso"; ?>
<html>
	<?php include 'header.php'; ?>
  </head>
	<body >
		<div class="container-fluid main-content" id="dashboard">	 
			<div class="row">
				<?php $active = 4; ?>
				<?php include 'sidebar.php'; ?>

				<div class="col-lg-11 col-md-12 col-sm-12 col-xs-12 dashboard-data">
					<div class="col-md-6 active" id="unidades">
						<div class="card p-20 text-left" data-u="1">
							<h4>Unidad 1</h4>
							<!-- Lorem ipsum dolor sit amet. -->
							<div class="btn"><i data-feather="plus"></i> Abrir</div>
						</div>
						<div class="card p-20 text-left" data-u="2">
							<h4>Unidad 2</h4>
							<!-- Lorem ipsum dolor sit amet. -->
							<div class="btn"><i data-feather="plus"></i> Abrir</div>
						</div>
						<div class="card p-20 text-left disabled" data-u="2">
							<h4>Unidad 3</h4>
							<!-- Lorem ipsum dolor sit amet. -->
							<div class="btn"><i data-feather="lock"></i> Abrir</div>
						</div>						
					</div>
					<div class="col-md-6 unlessons" id="u1">
						<div class="card p-20" data-u="1" data-l="1">
							<div class="text-left d-flex justify-content-start">
								<div class="w-100">
									<h4>Lección 1</h4>
								</div>						
								<div class="flex-shrink-1 icono">
									<i data-feather="chevron-right"></i>
								</div>
							</div>
						</div>
						<div class="card p-20" data-u="1" data-l="2">
							<div class="text-left d-flex justify-content-start">
								<div class="w-100">
									<h4>Lección 2</h4>
								</div>						
								<div class="flex-shrink-1 icono">
									<i data-feather="chevron-right"></i>
								</div>
							</div>
						</div>
						<div class="card p-20" data-u="1" data-l="3">
							<div class="text-left d-flex justify-content-start">
								<div class="w-100">
									<h4>Lección 3</h4>
								</div>						
								<div class="flex-shrink-1 icono">
									<i data-feather="chevron-right"></i>
								</div>
							</div>
						</div>
						<div class="card p-20 test" data-u="1" data-l="5">
							<div class="text-left d-flex justify-content-start">
								<div class="w-100">
									<h4>Autoevaluación</h4>
								</div>						
								<div class="flex-shrink-1 icono">
									<i data-feather="chevron-right"></i>
								</div>
							</div>
						</div>
						<div class="card p-20 autoevaluacion" data-u="1" data-l="4">
							<div class="text-left d-flex justify-content-start">
								<div class="w-100">
									<h4>Encuesta</h4>					
								</div>						
								<div class="flex-shrink-1 icono">
									<i data-feather="chevron-right"></i>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6 unlessons" id="u2">
						<div class="card p-20" data-u="2" data-l="1">
							<div class="text-left d-flex justify-content-start">
								<div class="w-100">
									<h4>Lección 1</h4>
								</div>						
								<div class="flex-shrink-1 icono">
									<i data-feather="chevron-right"></i>
								</div>
							</div>
						</div>
						<div class="card p-20 disabled" data-u="2" data-l="2">
							<div class="text-left d-flex justify-content-start">
								<div class="w-100">
									<h4>Lección 2</h4>
								</div>						
								<div class="flex-shrink-1 icono">
									<i data-feather="lock"></i>
								</div>
							</div>
						</div>
						<div class="card p-20 disabled" data-u="2" data-l="3">
							<div class="text-left d-flex justify-content-start">
								<div class="w-100">
									<h4>Lección 3</h4>
								</div>						
								<div class="flex-shrink-1 icono">
									<i data-feather="lock"></i>
								</div>
							</div>
						</div>
						<div class="card p-20 test disabled" data-u="2" data-l="4">
							<div class="text-left d-flex justify-content-start">
								<div class="w-100">
									<h4>Autoevaluación</h4>
								</div>						
								<div class="flex-shrink-1 icono">
									<i data-feather="lock"></i>
								</div>
							</div>
						</div>
						<div class="card p-20 autoevaluacion disabled" data-u="2" data-l="5">
							<div class="text-left d-flex justify-content-start">
								<div class="w-100">
									<h4>Encuesta</h4>					
								</div>						
								<div class="flex-shrink-1 icono">
									<i data-feather="lock"></i>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12 ipless" id="ul11" data-u="1" style="height: 100%;">
						<div class="card p-20 text-center" style="height: 100%;">
							<div class="close" data-u="1"><i data-feather="x-square"></i></div>
							<iframe src="units/1/1/curso.php" width="100%" height="100%" frameborder="0"></iframe>
						</div>
					</div>

					<div class="col-md-12 ipless" id="ul12" data-u="1" style="height: 100%;">
						<div class="card p-20 text-center" style="height: 100%;">
							<div class="close" data-u="1"><i data-feather="x-square"></i></div>
							<iframe src="units/1/2/curso.php" width="100%" height="100%" frameborder="0"></iframe>
						</div>
					</div>

					<div class="col-md-12 ipless" id="ul13" data-u="1" style="height: 100%;">
						<div class="card p-20 text-center" style="height: 100%;">
							<div class="close" data-u="1"><i data-feather="x-square"></i></div>
							<iframe src="units/1/3/curso.php" width="100%" height="100%" frameborder="0"></iframe>
						</div>
					</div>

					<div class="col-md-12 ipless" id="ul14" data-u="1" style="height: 100%;">
						<div class="card p-20 text-center" style="height: 100%;">
							<div class="close" data-u="1"><i data-feather="x-square"></i></div>
							<iframe src="units/1/4/curso.php" width="100%" height="100%" frameborder="0"></iframe>
						</div>
					</div>

					<div class="col-md-12 ipless" id="ul15" data-u="1" style="height: 100%;">
						<div class="card p-20 text-center" style="height: 100%;">
							<div class="close" data-u="1"><i data-feather="x-square"></i></div>
							<iframe src="units/1/5/curso.php" width="100%" height="100%" frameborder="0"></iframe>
						</div>
					</div>

					<div class="col-md-12 ipless" id="ul21" data-u="2" style="height: 100%;">
						<div class="card p-20 text-center" style="height: 100%;">
							<div class="close" data-u="2"><i data-feather="x-square"></i></div>
							<iframe src="units/2/1/curso.php" width="100%" height="100%" frameborder="0"></iframe>
						</div>
					</div>

					<!-- <div class="toolbar text-center">
						<div class="toolbar-header notifications d-flex	justify-content-end mx-4">							
							<div class="avatar-icons d-flex">															
								<div class="mensajes notifications">
									<img src="img/help_icon.png">	
									<img class="mx-5 " src="img/notifications_icon.png">
								</div>								
							</div>
							<div class="avatar notifications">							
								<img class="w-100" src="img/avatar.jpg">
							</div>
						</div>
						<div class="avatar-info text-left">
							Juan Rinke
							<div class="avatar-menu">
								<a href="#" id="configuracion">Configuración</a><br>
								<a href="#">Notificaciones</a><br>
								<a href="/">Salir</a>
							</div>
						</div>
						<div class="profile-info text-left">
							<div class="title">PERFIL</div>
							<b>Información de la cuenta</b>
							<div class="form-group has-feedback">
								<input type="text" class="form-control" name="user" id="user" placeholder="DNI">
								<span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
							</div>
							<div class="form-group has-feedback">
								<a href="#" class="forgot">Modificá tu contraseña?</a>
							</div>
							<b>Información personal</b>
							<div class="form-group has-feedback">
								<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
								<span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
							</div>
							<div class="form-group has-feedback">
								<input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido">
								<span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
							</div>
							<div class="form-group has-feedback">
								<input type="text" class="form-control" name="email" id="email" placeholder="Email">
								<span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
							</div>
							<div class="form-group has-feedback">
								<input type="text" class="form-control" name="celular" id="celular" placeholder="Teléfono">
								<span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
							</div>
							<input type="submit" class="btn" value=">">
						</div>						
					</div> -->
				</div>
			</div>
		</div>
		
		<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>	
		<script type="text/javascript" src="js/circle-progress.min.js"></script>
		<script type="text/javascript" src="js/popper.min.js"></script>
		<script type="text/javascript" src="js/feather.min.js"></script>
		<script type="text/javascript" src="js/caleandar.js"></script>
		<script defer="" type="text/javascript" src="js/main.js"></script> 
		<script defer="" type="text/javascript" src="js/bootstrap.min.js"></script>
		
	</body>
</html>