<?php $title = "Idiomas"; ?>
<html>
	<?php include 'header.php'; ?>
	<body >
		<div class="container-fluid main-content" id="dashboard">	 
			<div class="row">
				<?php $active = 2; ?>
				<?php include 'sidebar.php'; ?>
				<div class="col-lg-11 col-md-12 col-sm-12 col-xs-12 dashboard-data">
					<div class="d-flex flex-column">
						<div class="card p-20 altura mb-3">
							<div class="d-flex">
								<div class="d-flex justify-content-between w-100">
									<div class="d-flex flex-column align-text-center">
										<div class="d-flex">
											<img class="banderachica mr-3" src="./img/francia.jpeg"alt="">											
											<h4 class='titulos3'>Ingles</h4>
										</div>
										<p class="parrafos">Estas cursando el <strong class="text-dark"> nivel 1 </strong></p>	
									</div>
									<div class="botoneschicos mt-2">
										<a href="#" class="text-reset"><i data-feather="chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="card p-20 w-100 altura mb-3">
							<div class="d-flex">
								<div class="d-flex justify-content-between w-100">
									<div class="d-flex flex-column align-text-center">
										<div class="d-flex">
											<img class="banderachica mr-3" src="./img/francia.jpeg"alt="">											
											<h4 class='titulos3'>Frances</h4>
										</div>
										<p class="parrafos">Podes sumar este curso <strong class="text-dark"></strong></p>	
									</div>
									<div class="botoneschicos mt-2">
										<a href="#" class="text-reset"><i data-feather="chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card p-20 w-50 altura mb-3">
							<div class="d-flex">
								<div class="d-flex justify-content-between w-100">
									<div class="d-flex flex-column align-text-center">
										<div class="d-flex">
											<img class="banderachica mr-3" src="./img/francia.jpeg"alt="">											
											<h4 class='titulos3'>Italiano</h4>
										</div>
										<p class="parrafos">Podes sumar este curso <strong class="text-dark"></strong></p>	
									</div>
									<div class="botoneschicos mt-2">
										<a href="#" class="text-reset"><i data-feather="chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card p-20 w-50 altura mb-3">
							<div class="d-flex">
								<div class="d-flex justify-content-between w-100">
									<div class="d-flex flex-column align-text-center">
										<div class="d-flex">
											<img class="banderachica mr-3" src="./img/francia.jpeg"alt="">											
											<h4 class='titulos3'>Aleman</h4>
										</div>
										<p class="parrafos">Podes sumar este curso <strong class="text-dark"></strong></p>	
									</div>
									<div class="botoneschicos mt-2">
										<a href="#" class="text-reset"><i data-feather="chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card p-20 w-50 altura mb-3">
							<div class="d-flex">
								<div class="d-flex justify-content-between w-100">
									<div class="d-flex flex-column align-text-center">
										<div class="d-flex">
											<img class="banderachica mr-3" src="./img/francia.jpeg"alt="">											
											<h4 class='titulos3'>Portuges</h4>
										</div>
										<p class="parrafos">Podes sumar este curso <strong class="text-dark"></strong></p>	
									</div>
									<div class="botoneschicos mt-2">
										<a href="#" class="text-reset"><i data-feather="chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					

					<div class="toolbar text-center progreso max active">
						<div class="toolbar-header notifications d-flex	justify-content-end mx-4">							
							<div class="avatar-icons d-flex">															
								<div class="mensajes notifications ">
									<img src="img/help_icon.png">	
									<img src="img/notifications_icon.png">
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
						<div class="progreso-info mx-4">
							<div class="d-flex border-bottom">
								<img class="banderachica mr-3" src="./img/francia.jpeg"alt="">											
								<h4 class='titulos3'>Ingles</h4>
							</div>
							<div class="py-3 mr-5 text-11 text-left achicarletra4">
								Selecciona el curso que queres comprar y luego eligi el medio de pago
							</div>
							<select class="form-control p-2 mb-3 background" name="nivel" id="nivel">
								<option value="Seleccionar Nivel">Seleccionar Nivel</option>
								<option value="Nivel 1">Nivel 1</option>
								<option value="Nivel 2">Nivel 2</option>
								<option value="Nivel 3">Nivel 3</option>
							</select>
							<div class="border-bottom">
								<p class="text-left achicarletra4">Descripcion minima del nivel <br>
								 Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime porro facilis autem voluptate vel corporis.</p>	

							
							</div>
							<div class="mt-4 pagos border-bottom">
								<div class="d-flex justify-content-center">
                                    <img class="w-50 my-3" src="./img/tarjetadis.png" alt=""> 									
								</div>
								<div class="d-flex justify-content-center my-3">
									<img class="w-50 my-3" src="./img/efectivodis.png" alt=""> 
								</div>
								<div>
									<img class="w-50 mb-5 mt-3" src="./img/mercadodis.png" alt="">
								</div>
							</div>

							</script>
							<div class="events-new">
								<!-- <h3>Agendar clase</h3>
								<div class="d-flex d-flex text-left justify-content-start">
									<div class="w-100">
										<select id="clase">
											<option value="20">20:00hs</option>
											<option value="22">22:00hs</option>
										</select>
									</div>
									<div class="flex-shrink-1 icono" onclick="setReserva()" style="cursor: pointer;">
										<a><i data-feather="plus"></i></a>
									</div>
								</div>
							</div> -->
							<!-- <div class="events-list">
								<div class="event d-flex d-flex text-left justify-content-start" data-date="20200407">
									<div class="w-100">
										<h5>Clase 3</h5>
										16/04/2020 - 22:00 hs
									</div>
									<div class="flex-shrink-1 icono">
										<i data-feather="calendar"></i>
									</div>
								</div> -->
								<!-- <div class="event d-flex d-flex text-left  justify-content-start" data-date="20200407">
									<div class="w-100">
										<h5>Clase B 2</h5>
										Lorem ipsum dolor sit amet.
									</div>
									<div class="flex-shrink-1 icono">
										<i data-feather="calendar"></i>
									</div>
								</div>
								<div class="event d-flex d-flex text-left  justify-content-start" data-date="202004018">
									<div class="w-100">
										<h5>Clase C</h5>
										Lorem ipsum dolor sit amet.
									</div>
									<div class="flex-shrink-1 icono">
										<i data-feather="calendar"></i>
									</div>
								</div>
								<div class="event d-flex d-flex text-left  justify-content-start" data-date="202004027">
									<div class="w-100">
										<h5>Clase D</h5>
										Lorem ipsum dolor sit amet.
									</div>
									<div class="flex-shrink-1 icono">
										<i data-feather="calendar"></i>
									</div>
								</div> -->
							</div>
						</div>
						<div class="zoomcloud-info">
							<div class="title"><img src="img/tus_clases_icon.png"> Clases cursadas</div>
							<div class="pl-5 py-3 text-11 text-left">
								Acá se guardan tus clases, para que puedas repasarlas.
							</div>
							<div class="clases-content text-left">
								<div class="list-clase d-flex">
									<div class="w-100">
										<h5>Clase 1</h5>
										07/04/2020 - 22:00 hs
									</div>
									<div class="flex-shrink-1">
										<i data-feather="more-vertical" class="xs mt-2"></i>
									</div>
								</div>
								<div class="list-clase d-flex">
									<div class="w-100">
										<h5>Clase 2</h5>
										10/04/2020 - 22:00 hs
									</div>
									<div class="flex-shrink-1">
										<i data-feather="more-vertical" class="xs mt-2"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php include 'footer.php'; ?>
		<script defer="" type="text/javascript" src="js/clases.js"></script>
	</body>
</html>