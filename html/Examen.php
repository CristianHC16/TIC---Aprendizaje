<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Examen</title>
		<link rel="stylesheet" type="text/css" href="../librerias/css/Examen.css">
		<link rel="shortcut icon" href="../librerias/imagenes/Logo.png">
		<link rel="stylesheet" type="text/css" href="../librerias/responsive/MediaQueries_Examen.css">
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
						<li><a href="Temas.php" class="M">Temas</a></li>
						<li class="Examen"><a href="#" class="M">Examen</a></li>
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
					¿Deseas apropiarte de tus conocimientos?
				</div>
				<div class="IMG1" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300"></div>
				<div class="P1" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
					Ahora, gracias a lo que has aprendido de cada uno de los temas, podrás evaluarte para que conozcas tu nivel de conocimiento respecto a cada uno. Recuerda que es de suma importancia realizar las pruebas, ya que es un instrumento para llevar a todos a adquirir el saber. Además estos exámenes te dan la oportunidad real de demostrar lo que sabes. Ahora selecciona una de las pruebas propuestas. 
				</div>
			</section>

			<section class="S2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">

				<div class="Titulo2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700">
					Pruebas
				</div>

				<div class="Contenedor">

					<div class="Animacion" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700">
						<div class="Caja1">
							<div class="TituloC1">
								QUIZ 1
							</div>
							<div class="TextoC1">
								<img src="../librerias/imagenes/Quiz.png" width="82" height="82">
							</div>
							<div class="BotonC1">
								<a href="Quiz1.htm"><span>Comenzar</span></a>
							</div>
						</div>
					</div>

					<div class="Animacion" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="900">
						<div class="Caja1">
							<div class="TituloC1">
								QUIZ 2
							</div>
							<div class="TextoC1">
								<img src="../librerias/imagenes/Quiz.png" width="82" height="82">
							</div>
							<div class="BotonC1">
								<a href="Quiz2.htm"><span>Comenzar</span></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="S3">
				<div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
					Recuerda que el no obtener un buen resultado en la prueba, no significa que no sabes nada, ten en cuenta que en muchas ocasiones de los errores se aprende, simplemente intenta dedicar un poco más de tiempo y atención a cada uno de los temas.
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