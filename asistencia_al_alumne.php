<?php $title = "Asistencia al alumne"; ?>
<html>
	<?php include 'header.php'; ?>
	<body >
		<div class="container-fluid main-content" id="dashboard">	 
			<div class="row">
				<?php $active = 6; ?>
				<?php include 'sidebar.php'; ?>
				<div class="col-lg-11 col-md-12 col-sm-12 col-xs-12 dashboard-data sinfondo">
					<div class="row">
                        <div class="col-md-6">
                            <div class="card p-20 anchoAsistencia">
                                <p class="parrafosAsistencia"><strong>Mandanos tus consultas</strong></p>

								<form action="">
									
									<input type="text" class="form-control mb-2 mt-3 formsass" placeholder="Nombre y Apellido">
									
									<input type="email" class="form-control my-2 formsass" placeholder="Email">

									<input type="number" class="form-control my-2 formsass" placeholder="Telefono">

									<textarea name="mensaje" class="form-control mt-2 mb-3 formsass" placeholder="Mensaje" id="" cols="30" rows="8"></textarea>

								</form>
                                <div class="d-flex justify-content-center w-100 mt-5">									
									<button class="botones">
										<a href="#" class="font-weight-bold py-5 text-reset"><strong>Enviar</strong></a>
									</button>  
                                </div>                         
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="h-100 d-flex flex-column justify-content-end">
                                <div class="d-flex">
                                    <img class="achicar mt-2 mr-2" src="./img/mail.png" alt="">    
                                    <p class="parrafoAsistencia"> Tambien nos podes mandar tus consultas a <strong>intensivocoord@gmail.com</strong></p>
                                </div>
                                <div class="d-flex">
                                    <img class="achicar mt-1 mr-2" src="./img/telefono.png" alt="">
                                    <p class="parrafoAsistencia"> O contactanos al <strong>(0351) 4343214/15/16</strong></p>
                                </div>

                            </div>
                        </div>
                    </div>


					<div class="toolbar text-center">
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