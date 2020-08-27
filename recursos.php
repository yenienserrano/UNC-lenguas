<?php $title = "Recursos"; ?>
<html>
	<?php include 'header.php'; ?>
	<body >
		<div class="container-fluid main-content" id="dashboard">	 
			<div class="row">
				<?php $active = 5; ?>
				<?php include 'sidebar.php'; ?>
				<div class="col-lg-11 col-md-12 col-sm-12 col-xs-12 dashboard-data">					
					<div class="col-md-6 active" id="categorias">
						<div class="card p-20 categoria" data-category="Glosario">
							<div class="text-left d-flex justify-content-start">
								<div class="w-100">
									<h4>Glosario gramatical</h4>
								</div>						
								<div class="flex-shrink-1 icono">
									<i data-feather="chevron-right"></i>
								</div>
							</div>
						</div>
						<div class="card p-20 categoria" data-category="Explicaciones">
							<div class="text-left d-flex justify-content-start">
								<div class="w-100">
									<h4>Diccionario</h4>
								</div>						
								<div class="flex-shrink-1 icono">
									<i data-feather="chevron-right"></i>
								</div>
							</div>
						</div>
						<!-- <div class="card p-20 categoria" data-category="Glosario">
							<div class="text-left d-flex justify-content-start">
								<div class="w-100">
									<h4>Glosario</h4>
									Lorem ipsum dolor sit amet.							
								</div>						
								<div class="flex-shrink-1 icono">
									<i data-feather="chevron-right"></i>
								</div>
							</div>
						</div> -->
						<!-- <div class="card p-20">
							<div class="text-left d-flex justify-content-start">
								<div class="w-100">
									Lorem ipsum dolor sit amet.		
									<form>
										<input type="text" placeholder="Buscar por nombre">					
									</form>
								</div>						
							</div>
						</div> -->			
					</div>
					<div class="col-md-6" id="topicos">
						<div class="card p-20">
							<div class="text-left d-flex justify-content-start topico" data-info="1" data-category="Glosario" data-topic="Adjetivos">
								<div class="w-100">
									<h4>Adjetivos (Adjectives)</h4>
															
								</div>						
								<div class="flex-shrink-1 icono">
									<i data-feather="chevron-right"></i>
								</div>
							</div>
							<div class="text-left d-flex justify-content-start topico" data-info="2" data-category="Glosario" data-topic="Antónimo">
								<div class="w-100">
									<h4>Antónimo (Antonym)</h4>
														
								</div>						
								<div class="flex-shrink-1 icono">
									<i data-feather="chevron-right"></i>
								</div>
							</div>
							<div class="text-left d-flex justify-content-start topico" data-info="3" data-category="Glosario" data-topic="Artículo">
								<div class="w-100">
									<h4>Artículo (Article)</h4>
									
								</div>						
								<div class="flex-shrink-1 icono">
									<i data-feather="chevron-right"></i>
								</div>
							</div>
							<div class="text-left d-flex justify-content-start topico" data-info="4" data-category="Glosario" data-topic="Voz activa">
								<div class="w-100">
									<h4>Voz activa (Active voice)</h4>
														
								</div>						
								<div class="flex-shrink-1 icono">
									<i data-feather="chevron-right"></i>
								</div>
							</div>
							<div class="text-left d-flex justify-content-start topico" data-category="Explicaciones" data-topic="Nostrud exerci tation">
								<div class="w-100">
									<h4>Explicación 1</h4>
									Lorem ipsum dolor sit amet.							
								</div>						
								<div class="flex-shrink-1 icono">
									<i data-feather="chevron-right"></i>
								</div>
							</div>
							<div class="text-left d-flex justify-content-start topico" data-category="Explicaciones" data-topic="Nostrud exerci tation">
								<div class="w-100">
									<h4>Explicación 2</h4>
									Lorem ipsum dolor sit amet.							
								</div>						
								<div class="flex-shrink-1 icono">
									<i data-feather="chevron-right"></i>
								</div>
							</div>
							<!-- <div class="text-left d-flex justify-content-start topico" data-category="Glosario" data-topic="Adjetives">
								<div class="w-100">
									<h4>Adjetives</h4>						
								</div>						
								<div class="flex-shrink-1 icono">
									<i data-feather="chevron-right"></i>
								</div>
							</div>
							<div class="text-left d-flex justify-content-start topico" data-category="Glosario" data-topic="Adverbs">
								<div class="w-100">
									<h4>Adverbs</h4>															
								</div>						
								<div class="flex-shrink-1 icono">
									<i data-feather="chevron-right"></i>
								</div>
							</div> -->
						</div>						
					</div>
					<div class="col-md-12 detalle_topico" id="info1">
						<div class="card p-20 text-center">
							<div class="close"><i data-feather="x-square"></i></div>
							<h2>Adjetivos (Adjectives)</h2>
							<p style="text-align: justify;">Una palabra que da información sobre un sustantivo o pronombre. En español, los adjetivos tienen que estar de acuerdo con la palabra que modifican tanto en género (femenino / masculino) como en número (singular / plural).</p>
							<p style="text-align: justify;"><b>Risky investments.</b></p>
							<p style="text-align: justify;"><b>The luxurious hotels</b></p>
						</div>
					</div>
					<div class="col-md-12 detalle_topico" id="info2">
						<div class="card p-20 text-center">
							<div class="close"><i data-feather="x-square"></i></div>
							<h2>Antónimo (Antonym)</h2>
							<p style="text-align: justify;">Una palabra que significa lo opuesto, o aproximadamente lo opuesto, de otra palabra. Dos palabras pueden considerarse antónimos incluso si no son opuestos exactos en todos los contextos.</p>
							<p style="text-align: justify;"><b>Happy - Sad</b></p>
							<p style="text-align: justify;"><b>Big - Small</b></p>
						</div>
					</div>
					<div class="col-md-12 detalle_topico" id="info3">
						<div class="card p-20 text-center">
							<div class="close"><i data-feather="x-square"></i></div>
							<h2>Artículo (Article)</h2>
							<p style="text-align: justify;">Un pequeño grupo de determinantes que se colocan antes de los sustantivos. Los artículos solos tienen poco significado; cuando se usan con un sustantivo, pueden indicar si el sustantivo se refiere a un individuo específico o a un grupo indeterminado de individuos (es decir: artículos definidos versus artículos indefinidos). Además, los artículos especifican el género y el número del sustantivo (ver también: Neutro)</p>
							<p style="text-align: justify;"><b>The architect designed a building</b></p>
							<p style="text-align: justify;"><b>A man asks about you</b></p>
						</div>
					</div>
					<div class="col-md-12 detalle_topico" id="info4">
						<div class="card p-20 text-center">
							<div class="close"><i data-feather="x-square"></i></div>
							<h2>Voz activa (Active voice)</h2>
							<p style="text-align: justify;">El término "active voice" se refiere a oraciones donde el sujeto realiza la acción del verbo.</p>
							<p style="text-align: justify;"><b>María reads a Magazine.</b></p>
							<p style="text-align: justify;"><b>(Ver también: Voz pasiva)</b></p>
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
		
		<?php include 'footer.php'; ?>
		
	</body>
</html>