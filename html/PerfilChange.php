<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Perfil</title>
		<link rel="stylesheet" type="text/css" href="../librerias/css/PerfilChange.css">
		<link rel="shortcut icon" href="../librerias/imagenes/Logo.png">
		<link rel="stylesheet" type="text/css" href="../librerias/css/animate.css">
		<link rel="stylesheet" type="text/css" href="../librerias/responsive/MediaQueries_PerfilChange.css">
		<link rel="stylesheet" type="text/css" href="../librerias/css/aos.css">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	</head>
	<body>
		<header class="header">
			<div class="Logo animated fadeIn">
				<img src="../librerias/imagenes/Logo.png">
			</div>
			<div class="Nombre animated fadeIn">
				TIC - Aprendizaje
			</div>
			<div id="sidebar">
				<div class="toggle-btn" onclick="toggleSidebar()">
				    <span></span>
				    <span></span>
				    <span></span>
				</div>
				<nav class="BarraH animated fadeIn">
					<ul class="menu">
						<li><a href="../index.php" class="M">Inicio</a></li>
						<li><a href="Temas.php" class="M">Temas</a></li>
						<li><a href="Examen.php" class="M">Examen</a></li>
						<li>
							<div class="Usuario">
								<span class="Usu">
									<?php 
										session_start();
										echo $_SESSION['Session'];
									?>
								</span>
								<ul class="menu2">
									<li><a href="Tareas.php" class="M2">Tareas</a></li>
									<li class="Perfil"><a href="Perfil.php" class="M2">Perfil</a></li>
									<li><a href="../php/Cerrar.php" class="M2">Cerrar sesión</a></li>
								</ul>
							</div>
						</li>		
					</ul>
				</nav>
			</div>
		</header>

		<div class="FondoHeader animated fadeIn"></div>

		<article>
			<div class="Contenedor animated2 fadeIn-1">

				<div class="Titulo" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
					Cambia tu contraseña
				</div>

				<div class="Profile" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
					<form class="Formulario" method="POST" action="../php/CambiarContrasena.php" id="Form">
						<div class="Container">
							<div class="input-group">
								<label for="passA">Contraseña actual</label>
								<input type="password" name="passA" class="passA" id="passA" autocomplete="off" required />
							</div>
							<div class="input-group">
								<label for="passN">Nueva contraseña</label>
								<input type="password" name="passN" class="passN" id="passN" autocomplete="off" minlength="4" required />
							</div>
							<div class="input-group">
								<label for="passN2">Confirmar contraseña</label>
								<span id="change" class="eye"></span><input type="password" name="passN2" class="passN2" id="passN2" autocomplete="off" minlength="4" required/>
							</div>
						</div>
					</form>
					<div class="Buttons">
						<input type="submit" class="btn-update" value="Guardar cambios" form="Form" />
					</div>	
				</div>
			</div>
		</article>

		<script src="../js/jquery-3.2.1.min.js"></script>
		<script src="../js/changeeye2.js"></script>
		<script src="../js/menu-lateral.js"></script>
		<script src="../js/aos.js"></script>
		<script>
			AOS.init({
		      duration: 600,
		      delay: 100,
		    });
		</script>
	</body>
</html>