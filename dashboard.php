<?php $title = "Home"; ?>
<html>
	<?php include 'header.php'; ?>
	<body >
		<div class="container-fluid main-content" id="dashboard">	 
			<div class="row">
				<?php $active = 1; ?>
				<?php include 'sidebar.php'; ?>



				<div class="col-lg-11 col-md-12 col-sm-12 col-xs-12 d-flex flex-wrap dashboard-data" id="#sinDerecha">
					<div class="row w-100">
						<div class="col-12 d-flex justify-content-center flex-column">
							<div class="card p-20 sinDerechaModulos" id="progreso">
								<div class="d-flex flex-column mb-2">
									<h4 class="boldHome"><strong>Tu progreso: "Ingles 1"</strong></h4>								
								</div>

								<div class="d-flex text-center">
									<div class="mx-1 w-25 d-flex flex-column justify-content-center">
										<div class="progress" style="height:10px;">
											<div class="progress-bar" role="progressbar"style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="parrafosHome w-100 mt-3 text-dark">Unidad 1</p>
									</div>
									<div class="mx-1 w-25 d-flex flex-column justify-content-center">
										<div class="progress" style="height:10px;">
											<div class="progress-bar" role="progressbar"style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="parrafosHome w-100 mt-3 text-dark">Unidad 2</p>
									</div>
									<div class="mx-1 w-25 d-flex flex-column justify-content-center">
										<div class="progress" style="height:10px;">
											<div class="progress-bar" role="progressbar"style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="parrafosHome w-100 mt-3 text-dark">Unidad 3</p>
									</div>
									<div class="mx-1 w-25 d-flex flex-column justify-content-center">
										<div class="progress" style="height:10px;">
											<div class="progress-bar" role="progressbar"style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="parrafosHome w-100 mt-3 text-dark"><strong>Unidad 4</strong></p>
									</div>
									<div class="mx-1 w-25 d-flex flex-column justify-content-center">
										<div class="progress" style="height:10px;">
											<div class="progress-bar" role="progressbar"style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="parrafosHome w-100 mt-3 text-dark">Unidad 5</p>
									</div>
									<div class="mx-1 w-25 d-flex flex-column justify-content-center">
										<div class="progress" style="height:10px;">
											<div class="progress-bar" role="progressbar"style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="parrafosHome w-100 mt-3 text-dark">Unidad 6</p>
									</div>
									<div class="mx-1 w-25 d-flex flex-column justify-content-center">
										<div class="progress" style="height:10px;">
											<div class="progress-bar" role="progressbar"style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="parrafosHome w-100 mt-3 text-dark">Unidad 7</p>
									</div>
									<div class="mx-1 w-25 d-flex flex-column justify-content-center">
										<div class="progress" style="height:10px;">
											<div class="progress-bar" role="progressbar"style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="parrafosHome w-100 mt-3 text-dark">Unidad 8</p>
									</div>

								</div>							

							
						</div>		
						<div class="card p-20 mt-3 text-left">
								<div class="d-flex">
									<div class="d-flex justify-content-between w-100">
										<div class="d-flex flex-column align-text-center">
											<div class="d-flex">																						
												<h4 class='titulos3'><strong>Tu unidad actual</strong></h4>
											</div>
											<p class="parrafosHome2 ml-3 mt-3"><strong class="text-dark agrandar-unidad">Unidad 4: </strong>"Verb to be"</p>	
										</div>
										<div class="h-100 d-flex align-items-center">
											<button class="botones2 w-100">
												<a href="#" class="text-reset calendario d-flex justify-content-center font-weight-bold px-3"><strong>CONTINUAR</strong></a>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="card p-20 mt-3 text-left">
								<div class="d-flex">
									<div class="d-flex justify-content-between w-100">
										<div class="d-flex flex-column align-text-center">
											<div class="d-flex">																						
												<h4 class='titulos3'><strong>Tu próxima clase de consulta</strong></h4>
											</div>
											<p class="parrafosHome2 ml-3 mt-3"><strong class="text-dark">Fecha:</strong> 15 de julio, 2020</p>
											<p class="parrafosHome2 ml-3"><strong class="text-dark">Hora:</strong> 5:00pm - 6:00pm</p>	

										</div>
										<div class="h-100 d-flex align-items-center">
											<button class="botones2 w-100">
												<a href="#" class="text-reset calendario d-flex justify-content-center font-weight-bold px-3"><strong>IR A CLASE</strong></a>
											</button>
										</div>
									</div>
								</div>
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
							Juan rinke
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
						<div class="progreso-info">
							<div class="title"><img src="img/icon_progreso.png"> PROGRESO</div>
							<div class="unidades">
								<div class="list-unidad">
									<h3>Unidad <b>1</b></h3>
									<div class="unidad complete">Lección 1</div>
									<div class="unidad complete">Lección 2</div>
									<div class="unidad complete">Lección 3</div>
								</div>
								<div class="list-unidad">
									<h3>Unidad <b>2</b></h3>
									<div class="unidad complete">Lección 1</div>
									<div class="unidad ">Lección 2</div>
									<div class="unidad ">Lección 3</div>
								</div>
								<div class="list-unidad">
									<h3>Unidad <b>3</b></h3>
									<div class="unidad ">Lección 1</div>
									<div class="unidad ">Lección 2</div>
									<div class="unidad ">Lección 3</div>
								</div>								
							</div>
						</div>
						<div class="zoomcloud-info">
							<div class="title"><img src="img/icon_zoomcloud.png"> ZOOMCLOUD</div>
							<div class="pl-5 py-3 text-11 text-left">
								App requerida para realizar las clases en vivo.<br>
								Con opciones para los distintos sistemas operativos y escritorio.
							</div>
							<div class="icons text-left">
								<a href="#"><div class="d-flex align-items-center"><img src="./img/app_store_icon.png"> <span>IOS</span></div></a>
								<a href="#"><div class="d-flex align-items-center"><a href="#"><img src="./img/play_store_icon.png"> <span>Android</span></div></a>
							</div>
						</div>
						
					</div> -->
					

				</div>
				
			</div>
		</div>

		
		<?php include 'footer.php'; ?>
	</body>
</html>