<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Temas</title>
		<link rel="stylesheet" type="text/css" href="../librerias/css/Temas.css">
		<link rel="shortcut icon" href="../librerias/imagenes/Logo.png">
		<link rel="stylesheet" type="text/css" href="../librerias/responsive/MediaQueries_Temas.css">
		<link rel="stylesheet" type="text/css" href="../librerias/css/animate.css">
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
				    <span class="span"></span>
				    <span class="span"></span>
				    <span class="span"></span>
				</div>
				<nav class="BarraH animated fadeIn">
					<ul class="menu">
						<li><a href="../index.php" class="M">Inicio</a></li>
						<li class="Temas"><a href="#" class="M">Temas</a></li>
						<li><a href="../php/AccesoExamen2.php" class="M">Examen</a></li>
						<li>
							<?php
								session_start();
								if(isset($_SESSION['Session']) == false) {
							?>
									<div class="Log animated fadeIn">
										<a href="Login.html" class="M1">Iniciar sesión</a>
									</div>
							<?php
								}else {
							?>
									<div class="Usuario">
										<span>
											<?php 
												echo $_SESSION['Session'];
											?>
										</span>
										<ul class="menu2">
											<li><a href="Tareas.php" class="M2">Tareas</a></li>
											<li><a href="Perfil.php" class="M2">Perfil</a></li>
											<li><a href="../php/Cerrar.php" class="M2">Cerrar sesión</a></li>
										</ul>
									</div>	
							<?php
								}
							?>
						</li>		
					</ul>
				</nav>
			</div>
		</header>

		<div class="FondoHeader animated fadeIn"></div>
		
		<!--Article-->
		<article>

			<section class="S1">
				<div class="Titulo" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
					¿Quieres aprender los fundamentos de la programación?
				</div>
				<div class="IMG1" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300"></div>
				<div class="P1" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
					A continuación encontraras los principales temas relacionados con PSeInt, aportándote cada uno de ellos conceptos básicos, los cuales son de vital importancia en este proceso de aprendizaje. Cada uno de estos posee una estructura ordenada la cual es: descripción, ejemplos, video y por último ejercicios. Ahora selecciona uno de los 4 temas propuestos y prepárate para aprender.
				</div>
			</section>

			<section class="S2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">

				<div class="Titulo2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700">
					Temas
				</div>

				<div class="Contenedor">

					<div class="Animacion" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700">
						<div class="Caja1">
							<div class="TituloC1">
								DIAGRAMAS DE FLUJO
							</div>
							<div class="TextoC1">
								<img src="../librerias/imagenes/DiagramadeFlujo.png" width="82" height="82">
							</div>
							<div class="BotonC1">
								<a href="Tema1.php"><span>Más</span></a>
							</div>
						</div>
					</div>

					<div class="Animacion" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="900">
						<div class="Caja1">
							<div class="TituloC1">
								ESTRUCTURAS SELECTIVAS
							</div>
							<div class="TextoC1">
								<img src="../librerias/imagenes/Condicional.png" width="82" height="82">
							</div>
							<div class="BotonC1">
								<a href="Tema2.php"><span>Más</span></a>
							</div>
						</div>
					</div>

					<div class="Animacion" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1200">
						<div class="Caja1">
							<div class="TituloC1">
								ESTRUCTURAS REPETITIVAS
							</div>
							<div class="TextoC1">
								<img src="../librerias/imagenes/Ciclo.png" width="82" height="82">
							</div>
							<div class="BotonC1">
								<a href="Tema3.php"><span>Más</span></a>
							</div>
						</div>
					</div>

				</div>

				<div class="Contenedor2">

					<div class="Animacion" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="700">
						<div class="CajaI">
							<div class="IMG2">
								<img src="../librerias/imagenes/IconT1.png" width="110" height="110">
							</div>
						</div>
					</div>

					<div class="Animacion" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
						<div class="Caja1">
							<div class="TituloC1">
								VECTORES Y MATRICES
							</div>
							<div class="TextoC1">
								<img src="../librerias/imagenes/Matrices.png" width="82" height="82">
							</div>
							<div class="BotonC1">
								<a href="Tema4.php"><span>Más</span></a>
							</div>
						</div>
					</div>

					<div class="Animacion" data-aos="fade-down-right" data-aos-duration="1500" data-aos-delay="700">
						<div class="CajaI">
							<div class="IMG2">
								<img src="../librerias/imagenes/IconT2.png" width="110" height="110">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="S3">
				<div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
					Recuerda que puedes descargar PSeInt en tu computadora o Pseudocode en tu dispositivo móvil para desarrollar los ejercicios propuestos y practicar. <br><br> Nota: La información presentada en cada uno de los temas fue tomada de: 
					<cite> 
						“Algoritmos resueltos con diagramas de flujo y pseudocódigo”, realizado por Francisco Javier Pinales Delgado y César Eduardo Velázquez Amador - Universidad Autónoma de Aguascalientes.
					</cite>
				</div>
			</section>
		</article>
		<!--Fin Article-->

		<!--Footer-->
		<footer>
			<div class="Nom">
				Copyright © 2017. Cristian Hernández Castaño - Brayan Hernández Castaño. Todos los derechos reservados.
			</div>
		</footer>
		<!--Fin Footer-->
		<script src="../js/jquery-3.2.1.min.js"></script>
		<script src="../js/menu-sticky.js"></script>
		<script src="../js/menu-lateral.js"></script>
		<script src="../js/aos.js"></script>
		<script>
			AOS.init({
		      duration: 600,
		      delay: 100,
		    });
		</script>
		<script>
			$(document).ready(function(){
				$(window).scroll(function(){
					if( $(this).scrollTop() > 170) {
						$('.span').css("background","#000000");
					} else {
						$('.span').css("background","#FFFFFF");
					}
				});
			});
		</script>
	</body>
</html>