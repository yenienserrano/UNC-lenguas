<div class="col-lg-1 col-md-12 col-sm-12 col-xs-12 login-sidebar">
	<div class="logo">
		<img src="img/logo.png">
	</div>
	<div class="breadcrumb1 titulo"><?=$title?></div>
	<div class="menu d-flex flex-column text-center ">
		<div class="dropdown my-2">
			<a class=" dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#0776A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
			</a>
			<div class="dropdown-menu p-3" aria-labelledby="dropdownMenuButton">						
				<h5 class="font-weight-bold"><strong>Juan rinke</strong></h5>
				<div class="avatar-menu">
					<a class="parrafosHome" href="#" id="configuracion">Configuración</a><br>
					<a class="parrafosHome" href="#">Notificaciones</a><br>
					<a class="parrafosHome" href="/">Salir</a>
				</div>						
			</div>
		</div>

		<a class="my-2" href="dashboard.php" data-toggle="tooltip" data-placement="right" title="Dashboard"><div class="menu-btn<?php if(isset($active) && $active == 1){ echo " active"; } ?>">
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 41 42.33" style="enable-background:new 0 0 41 42.33;" xml:space="preserve">
			<path class="st0" d="M36.78,19.75L20.5,4.9L4.22,19.75l1.71,1.88l1.48-1.35v13.34c0,2.1,1.71,3.81,3.81,3.81h18.55
				c2.1,0,3.81-1.71,3.81-3.81V20.28l1.48,1.35L36.78,19.75z M31.04,33.62c0,0.7-0.57,1.27-1.27,1.27H11.23c-0.7,0-1.27-0.57-1.27-1.27
				V17.96L20.5,8.34l10.54,9.62V33.62z M22.44,26.09h-4.1V22h4.1V26.09z"/>
			</svg>
		</div></a>

		<!-- <a class="my-2" href="idiomas.php" data-toggle="tooltip" data-placement="right" title="Idiomas"><div class="menu-btn<?php if(isset($active) && $active == 2){ echo " active"; } ?>">
			<svg width="30" height="35" viewBox="0 0 33 55" fill="none" xmlns="http://www.w3.org/2000/svg" style="enable-background:new 0 0 41 42.33;" xml:space="preserve">
				<path class="st0" d="M32.9 27.8V5.29999H8.30005V4.20001C8.30005 2.00001 6.50005 0.200012 4.30005 0.200012C2.10005 0.200012 0.300049 2.00001 0.300049 4.20001V41H8.20004V27.7H32.9V27.8ZM2.70004 38.6V27.7H5.80005V38.6H2.70004ZM4.30005 2.60001C5.20005 2.60001 5.90005 3.30001 5.90005 4.20001V5.29999H2.80005V4.20001C2.70005 3.30001 3.40005 2.60001 4.30005 2.60001ZM14.4 16.5L2.70004 24.3V8.70001L14.4 16.5ZM16.6 18L27.7 25.4H5.40005L16.6 18ZM18.8 16.5L30.5 8.70001V24.3L18.8 16.5ZM16.6 15.1L5.50005 7.70001H27.8L16.6 15.1Z" fill="#0776A8"/>
			</svg>
		</div></a> -->

		<a class="my-2" href="clases.php" data-toggle="tooltip" data-placement="right" title="Clases en vivo"><div class="menu-btn<?php if(isset($active) && $active == 3){ echo " active"; } ?>">
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 41 42.33" style="enable-background:new 0 0 41 42.33;" xml:space="preserve">
			<g>
				<path class="st0" d="M6.77,7.43H23.3v8.39H6.77V7.43L6.77,7.43z M27.37,21.48H16.3v-3.12h9.54V4.89H4.22v13.48h9.54v3.12H4.22
					v15.96h2.54V24.03h20.11L27.37,21.48L27.37,21.48z"/>
				<polygon class="st0" points="32.55,21.48 34.21,12.82 31.71,12.34 28.73,27.84 16.43,27.84 16.43,30.39 22.15,30.39 22.15,34.9 
					18.34,34.9 18.34,37.44 28.58,37.44 28.58,34.9 24.7,34.9 24.7,30.39 30.83,30.39 32.06,24.03 34.23,24.03 34.23,37.44 
					36.78,37.44 36.78,21.48 32.55,21.48 	"/>
			</g>
			</svg>
		</div></a>
		<a class="my-2" href="curso.php" data-toggle="tooltip" data-placement="right" title="Curso"><div class="menu-btn<?php if(isset($active) && $active == 4){ echo " active"; } ?>">
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 41 42.33" style="enable-background:new 0 0 41 42.33;" xml:space="preserve">
			<g>
				<path class="st0" d="M28.64,34.9h-6.87v-2.41h8.14v1.14C29.91,34.33,29.34,34.9,28.64,34.9L28.64,34.9z M11.09,33.63v-1.14h8.14
					v2.41h-6.87C11.66,34.9,11.09,34.33,11.09,33.63L11.09,33.63z M12.36,7.43h16.28c0.7,0,1.27,0.57,1.27,1.27v21.25H11.09V8.7
					C11.09,8,11.66,7.43,12.36,7.43L12.36,7.43z M28.64,4.89H12.36c-2.1,0-3.82,1.71-3.82,3.82v24.93c0,2.1,1.71,3.82,3.82,3.82h16.28
					c2.1,0,3.82-1.71,3.82-3.82V8.7C32.45,6.6,30.74,4.89,28.64,4.89L28.64,4.89z"/>
				<polygon class="st0" points="13.63,9.98 27.37,9.98 27.37,12.53 13.63,12.53 13.63,9.98 	"/>
				<polygon class="st0" points="13.63,14.94 27.37,14.94 27.37,17.49 13.63,17.49 13.63,14.94 	"/>
				<polygon class="st0" points="13.63,19.9 27.37,19.9 27.37,22.45 13.63,22.45 13.63,19.9 	"/>
				<polygon class="st0" points="13.63,24.86 23.04,24.86 23.04,27.41 13.63,27.41 13.63,24.86 	"/>
			</g>
			</svg>
		</div></a>
		<a class="mt-2 mb-3" href="recursos.php" data-toggle="tooltip" data-placement="right" title="Recursos"><div class="menu-btn<?php if(isset($active) && $active == 5){ echo " active"; } ?>">
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 41 42.33" style="enable-background:new 0 0 41 42.33;" xml:space="preserve">
			<g>
				<path class="st0" d="M16.94,27.77h4.32v2.54h-4.32V27.77z M12.17,27.46c-0.88,0-1.59,0.71-1.59,1.59c0,0.88,0.71,1.59,1.59,1.59
					c0.88,0,1.59-0.71,1.59-1.59C13.76,28.17,13.05,27.46,12.17,27.46L12.17,27.46z M29.78,19.7H16.94v2.54h12.84V19.7z M12.17,19.38
					c-0.88,0-1.59,0.71-1.59,1.59c0,0.88,0.71,1.59,1.59,1.59c0.88,0,1.59-0.71,1.59-1.59C13.76,20.09,13.05,19.38,12.17,19.38
					L12.17,19.38z M29.78,12.07H16.94v2.54h12.84V12.07z M12.17,11.75c-0.88,0-1.59,0.71-1.59,1.59c0,0.88,0.71,1.59,1.59,1.59
					c0.88,0,1.59-0.71,1.59-1.59C13.76,12.47,13.05,11.75,12.17,11.75L12.17,11.75z M6.76,33.62V8.7c0-0.7,0.57-1.27,1.27-1.27h24.92
					c0.7,0,1.27,0.57,1.27,1.27v14.37h2.54V8.7c0-2.1-1.71-3.81-3.81-3.81H8.04c-2.1,0-3.81,1.71-3.81,3.81v24.92
					c0,2.1,1.71,3.81,3.81,3.81h14.68v-2.54H8.04C7.33,34.89,6.76,34.32,6.76,33.62L6.76,33.62z M34.98,37.44l-2.53-2.53
					c-0.86,0.51-1.86,0.81-2.93,0.81c-3.15,0-5.72-2.57-5.72-5.72c0-3.15,2.57-5.72,5.72-5.72c3.15,0,5.72,2.57,5.72,5.72
					c0,1.17-0.35,2.25-0.95,3.16l2.49,2.49L34.98,37.44z M29.52,33.18c1.75,0,3.18-1.43,3.18-3.18c0-1.75-1.43-3.18-3.18-3.18
					c-1.75,0-3.18,1.43-3.18,3.18C26.34,31.75,27.77,33.18,29.52,33.18L29.52,33.18z M29.52,33.18"/>
			</g>
			</svg>
		</div></a>

		

		<!-- <a class="my2 border-top" href="asistencia_al_alumne.php" data-toggle="tooltip" data-placement="right" title="Idiomas"><div class="menu-btn<?php if(isset($active) && $active == 6){ echo " active"; } ?>">
			<svg width="45" height="60" viewBox="0 0 45 100" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path class="st0" d="M9.59995 35.8L15.4 30C17.2 31.4 19.5 32.3 21.9 32.3C24.4 32.3 26.6 31.5 28.4 30L34.2 35.8C30.9 38.7 26.6 40.4 21.9 40.4C17.2 40.4 12.8 38.6 9.59995 35.8ZM7.79996 9.5L13.6 15.3C12.2 17.1 11.3 19.4 11.3 21.8C11.3 24.3 12.1 26.5 13.6 28.3L7.79996 34.1C4.89996 30.8 3.19995 26.5 3.19995 21.8C3.19995 17.1 4.89996 12.8 7.79996 9.5ZM34.1 7.70001L28.3 13.5C26.5 12.1 24.2 11.2 21.8 11.2C19.3 11.2 17.1 12 15.3 13.5L9.49995 7.70001C12.8 4.80001 17.1 3.09998 21.8 3.09998C26.5 3.09998 30.8 4.90001 34.1 7.70001ZM13.8 21.8C13.8 17.4 17.4 13.8 21.8 13.8C26.2 13.8 29.8 17.4 29.8 21.8C29.8 26.2 26.2 29.8 21.8 29.8C17.4 29.8 13.8 26.2 13.8 21.8ZM35.8 34L30 28.2C31.4 26.4 32.3 24.1 32.3 21.7C32.3 19.3 31.5 17 30 15.2L35.8 9.40002C38.7 12.7 40.3999 17 40.3999 21.7C40.3999 26.4 38.7 30.7 35.8 34ZM36.7 6.79999C32.7 2.79999 27.4 0.599976 21.8 0.599976C16.2 0.599976 10.9 2.79999 6.89996 6.79999C2.89996 10.8 0.699951 16.1 0.699951 21.7C0.699951 27.3 2.89996 32.6 6.89996 36.6C10.9 40.6 16.2 42.8 21.8 42.8C27.4 42.8 32.7 40.6 36.7 36.6C40.7 32.6 42.8999 27.3 42.8999 21.7C42.8999 16.1 40.7 10.8 36.7 6.79999Z" fill="#0776A8"/>
			</svg>
		</div></a> -->
	</div>
</div>