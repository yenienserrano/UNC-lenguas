<?php $title = "Clases de consulta online"; ?>
<html>
	<?php include 'header.php'; ?>
	<body >
		<div class="container-fluid main-content" id="dashboard">	 
			<div class="row">
				<?php $active = 3; ?>
				<?php include 'sidebar.php'; ?>				
				<div class="col-lg-11 col-md-12 col-sm-12 col-xs-12 dashboard-data">
					<div class="w-100">						
						<div class="card p-20 mt-3 text-left">
							<div class="d-flex">
								<div class="d-flex justify-content-between w-100">
									<div class="d-flex flex-column align-text-center w-50">
										<div class="d-flex ">					
											<h1 class='titulos3 display-4'><strong>Próxima sesión</strong></h1>
										</div>
										<div>
											<h4 class="subtituloClases ml-3 mt-3"><strong class="text-dark ">Unidad 1</strong></h4>
											<h3 class="subtituloClases2 ml-3">"Verb to be"</h3>
										</div>

										<hr>
										
										<p class="fechasClases ml-3 mt-3"><strong class="text-dark">Fecha:</strong> 12 de julio, 2020</p>
										<p class="fechasClases ml-3"><strong class="text-dark">Hora:</strong> 5:00pm - 6:00pm</p>
									</div>
									<div class="w-50 d-flex flex-column">
										<div class="d-flex justify-content-end">
											<img class="bordeImg" src="./img/imagenprofe.jpg" alt="">
										</div>
										<div class="h-100 w-100 d-flex align-items-end">
											<button class="btn btn-danger w-50 mr-3 botonesMic">
												<strong>Prueba tu microfono</strong>						
											</button>
											<button class="botones2 w-50 ">
												<a href="#" class="text-reset calendario d-flex justify-content-center font-weight-bold px-3"><strong>Ingresar</strong></a>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card p-20 mt-3 text-left w-100">
							<div class="d-flex">
								<div class="d-flex justify-content-between w-100">
									<div class="d-flex flex-column align-text-center w-50">			
										<div>
											<h4 class="parrafosHome2 ml-3 mt-3"><strong class="text-dark">Unidad 1</strong></h4>
											<h3 class="parrafosHome2 ml-3">"Verb to-have"</h3>
										</div>										
										
										<p class="parrafosHome2 ml-3 mt-3"><strong class="text-dark">Fecha:</strong> 14 de julio, 2020</p>
										<p class="parrafosHome2 ml-3"><strong class="text-dark">Hora:</strong> 5:00pm - 6:00pm</p>
									</div>									
								</div>
							</div>
						</div>
						<div class="card p-20 mt-3 text-left w-100">
							<div class="d-flex">
								<div class="d-flex justify-content-between w-100">
									<div class="d-flex flex-column align-text-center w-50">			
										<div>
											<h4 class="parrafosHome2 ml-3 mt-3"><strong class="text-dark">Unidad 1</strong></h4>
											<h3 class="parrafosHome2 ml-3">"Opcional"</h3>
										</div>										
										
										<p class="parrafosHome2 ml-3 mt-3"><strong class="text-dark">Fecha:</strong> 15 de julio, 2020</p>
										<p class="parrafosHome2 ml-3"><strong class="text-dark">Hora:</strong> 5:00pm - 6:00pm</p>
									</div>									
								</div>
							</div>
						</div>
						<div class="card p-20 mt-3 text-left w-100">
							<div class="d-flex">
								<div class="d-flex justify-content-between w-100">
									<div class="d-flex flex-column align-text-center w-50">			
										<div>
											<h4 class="parrafosHome2 ml-3 mt-3"><strong class="text-dark">Unidad 2</strong></h4>
											<h3 class="parrafosHome2 ml-3">"Opcional"</h3>
										</div>										
										
										<p class="parrafosHome2 ml-3 mt-3"><strong class="text-dark">Fecha:</strong> 15 de julio, 2020</p>
										<p class="parrafosHome2 ml-3"><strong class="text-dark">Hora:</strong> 5:00pm - 6:00pm</p>
									</div>									
								</div>
							</div>
						</div>					
						<div class="card p-20 mt-3 text-left w-100">
							<div class="d-flex">
								<div class="d-flex justify-content-between w-100">
									<div class="d-flex flex-column align-text-center w-50">			
										<div>
											<h4 class="parrafosHome2 ml-3 mt-3"><strong class="text-dark">Unidad 2</strong></h4>
											<h3 class="parrafosHome2 ml-3">"Opcional"</h3>
										</div>										
										
										<p class="parrafosHome2 ml-3 mt-3"><strong class="text-dark">Fecha:</strong> 15 de julio, 2020</p>
										<p class="parrafosHome2 ml-3"><strong class="text-dark">Hora:</strong> 5:00pm - 6:00pm</p>
									</div>									
								</div>
							</div>
						</div>										
					</div>	
							
				</div>
					
					<!-- <div class="col-md-6 agenclass d-flex flex-column justify-content-end">
						<div class="card p-20 p-5 text-center alturaClases" id="countdown">
							<h4 class="font-weight-bold"><strong>Próxima clase en vivo</strong></h4>
							<div class="clock mt-3 mb-2">
								<span class="horas">--:--:--</span>
							</div>
							<span class="text-11 mt-3 mb-3 font-weight-bold">Nombre de la clase</span>
							<div class="d-flex justify-content-center mt-2">
								<button class="botones w d-flex justify-content-center">										
									<p class="mr-2 mt-1 parrafos3"><strong>Unirse</strong></p>	
								</button>
							</div>	
						</div>
						<div class="card p-20 mt-4 text-left alturaClases p-4" id="zoomcloud">
							<h4 class="titulos2"><strong>Tus clases</strong></h4>							
							<div class="clases-content mt-4">								
								<div class="list-clase d-flex my-4">
									<div class="w-100">
										<div class="d-flex">
											<img class="achicar mr-1" src="./img/francia.jpeg"alt="">
											<h5 class="titulosClases"><strong>Clase D</strong></h5>
										</div>
										<p class="parrafo4">Lorem ipsum dolor sit amet.</p>	
									</div>
									<div class="flex-shrink-1">
										<i data-feather="more-vertical"></i>
									</div>
								</div>
								<div class="list-clase d-flex my-4">
									<div class="w-100">
										<div class="d-flex">
											<img class="achicar mr-1" src="./img/francia.jpeg"alt="">
											<h5 class="titulosClases"><strong>Clase E</strong></h5>
										</div>
										<p class="parrafo4">Lorem ipsum dolor sit amet.</p>	
									</div>
									<div class="flex-shrink-1">
										<i data-feather="more-vertical"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 agenclass">
						<div class="card p-20 text-center" id="calendario">
						<div class="d-flex text-left calendario-title"><h4 class="w-100 titulos2">Tu agenda de clases</h4></div>
							<div class="clases-content">								
								<div class="list-clase d-flex text-left mt-5 mb-3">
									<div class="w-100">
										<div class="d-flex">
											<img class="achicar mr-1" src="./img/francia.jpeg"alt="">
											<h5 class="titulosClases"><strong>Clase A</strong></h5>
										</div>
										<p class="parrafo4">Lorem ipsum dolor sit amet. <br>
										<i data-feather="calendar" class="xs"></i> 07/06/2020 - 9:00/9:45 am</p>	
									</div>
									<div class="flex-shrink-1">
										<a href="#" class="text-reset"><i data-feather="chevron-right"></i></a>
									</div>
								</div>
								<div class="list-clase d-flex text-left my-3">
									<div class="w-100">
										<div class="d-flex">
											<img class="achicar mr-1" src="./img/francia.jpeg"alt="">
											<h5 class="titulosClases"><strong>Clase B</strong></h5>
										</div>
										<p class="parrafo4">Lorem ipsum dolor sit amet. <br>
										<i data-feather="calendar" class="xs"></i> 07/06/2020 - 9:00/9:45 am</p>	
									</div>
									<div class="flex-shrink-1">
										<i data-feather="lock" class="xs mt-2"></i>
									</div>
								</div>
								<div class="list-clase d-flex text-left my-3">
									<div class="w-100">
										<div class="d-flex">
											<img class="achicar mr-1" src="./img/francia.jpeg"alt="">
											<h5 class="titulosClases"><strong>Clase C</strong></h5>
										</div>
										<p class="parrafo4">Lorem ipsum dolor sit amet. <br>
										<i data-feather="calendar" class="xs"></i> 07/06/2020 - 9:00/9:45 am</p>	
									</div>
									<div class="flex-shrink-1">
										<i data-feather="chevron-right"></i>
									</div>
								</div>
								<div class="list-clase d-flex text-left my-3">
									<div class="w-100">
										<div class="d-flex">
											<img class="achicar mr-1" src="./img/francia.jpeg"alt="">
											<h5 class="titulosClases"><strong>Clase D</strong></h5>
										</div>
										<p class="parrafo4">Lorem ipsum dolor sit amet. <br>
										<i data-feather="calendar" class="xs"></i> 07/06/2020 - 9:00/9:45 am</p>	
									</div>
									<div class="flex-shrink-1">
										<i data-feather="lock" class="xs mt-2"></i>
									</div>
								</div>
								<div class="list-clase d-flex text-left mt-3">
									<div class="w-100">
										<div class="d-flex">
											<img class="achicar mr-1" src="./img/francia.jpeg"alt="">
											<h5 class="titulosClases"><strong>Clase E</strong></h5>
										</div>
										<p class="parrafo4">Lorem ipsum dolor sit amet. <br>
										<i data-feather="calendar" class="xs"></i> 07/06/2020 - 9:00/9:45 am</p>	
									</div>
									<div class="flex-shrink-1">
										<i data-feather="lock" class="xs mt-2"></i>
									</div>
								</div>
								
							</div>

								
								<style type="text/css">
									.clasereservada.disabled{
										display:none !important;
									}
								</style>						
							</div>

						</div>
					</div>

					<div class="col-md-12 reserclass" style="display:none;">
						<div class="card p-20 text-center">
							<div >
								Confirma reserva de clase:<br><br>
								Clase 4 - 19 de Marzo a las <span class="horareserva">00</span>:00 hs
							</div>
							<div style="margin-top: 25px;">
								<div class="btn btnred" onclick="hideReserva()" >Cancelar</div>
								<div class="btn" onclick="confirmReserva()" >Confirmar</div>
							</div>
							
						</div>
					</div> -->
					

					<!-- <div class="toolbar text-center">
						<div class="toolbar-header notifications d-flex	justify-content-end mx-4">							
							<div class="avatar-icons d-flex">															
								<div class="mensajes notifications">
									<img src="img/help_icon.png">	
									<img class=" " src="img/notifications_icon.png">
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
						<div class="progreso-info">
							<div class="title"><img src="img/icon_zoomcloud.png"> Agenda</div>
							<div class="pl-5 py-3 text-11 text-left">
								Podés agendar futuras clases para activar las notificaciones y no perderte de nada.
							</div>
							<div class="referencias d-flex justify-content-around">
								<div class="habilitado">Habilitado</div>
								<div class="nodisponible">No Disponible</div>
								<div class="reservado">Reservado</div>
							</div>
							<div id="caleandar">

							</div>
							<script>
								var eventsArray = [
									// {'Date': new Date(2020, 3, 5)},
									{'Date': new Date(2020, 3, 19)},
									{'Date': new Date(2020, 3, 16), 'Title': 'Clase 3' , 'Link': '20200407'},
									// {'Date': new Date(2020, 3, 7), 'Title': 'Clase B 2' , 'Link': '20200407'},
									// {'Date': new Date(2020, 3, 18), 'Title': 'Clase C', 'Link': '202004018'},
									// {'Date': new Date(2020, 3, 27), 'Title': 'Clase D', 'Link': '202004027'},
								];
							</script>
							<div class="events-new">
								<h3>Agendar clase</h3>
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
							</div>
							<div class="events-list">
								<div class="event d-flex d-flex text-left justify-content-start" data-date="20200407">
									<div class="w-100">
										<h5>Clase 3</h5>
										16/04/2020 - 22:00 hs
									</div>
									<div class="flex-shrink-1 icono">
										<i data-feather="calendar"></i>
									</div>
								</div>
								<div class="event d-flex d-flex text-left  justify-content-start" data-date="20200407">
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
								</div>
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
					</div> -->
				</div>
			</div>
		</div>
		
		<?php include 'footer.php'; ?>
		<script defer="" type="text/javascript" src="js/clases.js"></script>
	</body>
</html>