<!DOCTYPE html>
<html lang="en">
	<head>
		<title>TIC - Aprendizaje</title>
		<link rel="stylesheet" type="text/css" href="librerias/css/Index.css">
		<link rel="stylesheet" type="text/css" href="librerias/css/aos.css">
		<link rel="stylesheet" type="text/css" href="librerias/responsive/MediaQueries_Index.css">
		<link rel="stylesheet" type="text/css" href="librerias/css/animate.css">
		<meta charset="utf-8">
		<link rel="shortcut icon" href="librerias/imagenes/Logo.png">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<script>
			function deshabilitaRetroceso(){
		    window.location.hash="no-back-button";
		    window.location.hash="Again-No-back-button" //chrome
		    window.onhashchange=function(){window.location.hash="no-back-button";}
		}
		</script>
	</head>
	<body onload="deshabilitaRetroceso()">
		<header class="header">
			<div class="Logo animated fadeIn">
				<img src="librerias/imagenes/Logo.png">
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
						<li class="Inicio"><a href="#" class="M">Inicio</a></li>
						<li><a href="html/Temas.php" class="M">Temas</a></li>
						<li><a href="php/AccesoExamen.php" class="M">Examen</a></li>
						<li>
							<?php
								session_start();
								if(isset($_SESSION['Session']) == false) {
							?>
									<div class="Log animated fadeIn">
										<a href="html/Login.html" class="M1">Iniciar sesión</a>
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
											<li><a href="html/Tareas.php" class="M2">Tareas</a></li>
											<li><a href="html/Perfil.php" class="M2">Perfil</a></li>
											<li><a href="php/Cerrar.php" class="M2">Cerrar sesión</a></li>
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
	
		<!--Carousel-->
		<div id="slides" class="animated fadeIn">
			<!--Fondos-->
			<ul class="slides-container">
				<li>
					<img src="librerias/imagenes/C1.jpg" alt="Aprende los fundamentos de la programación y la lógica">
					<div class="Texto-carousel">
						<p class="Descripcion-carousel">Aprende los fundamentos de la programación y la lógica</p>
					</div>
				</li>
				<li>
					<img src="librerias/imagenes/C2.jpg" alt="Desarrolla los ejercicios para fortalecer tus habilidades">
					<div class="Texto-carousel">
						<p class="Descripcion-carousel">Desarrolla los ejercicios para fortalecer tus habilidades</p>
					</div>
				</li>
				<li>
					<img src="librerias/imagenes/C3.jpg" alt="Pon a prueba lo aprendido">
					<div class="Texto-carousel">
						<p class="Descripcion-carousel">Pon a prueba lo aprendido</p>
					</div>
				</li>
				<li>
					<img src="librerias/imagenes/C4.jpg" alt="Agrega nuevas tareas iniciando sesión con tu cuenta">
					<div class="Texto-carousel">
						<p class="Descripcion-carousel">Agrega nuevas tareas iniciando sesión con tu cuenta</p>
					</div>
				</li>
			</ul>
			<!--Fin Fondos-->

			<!--Botónes-->
			<nav class="slides-navigation">

				<!--Botón Siguiente-->
			    <a href="#" class="next"><img src="librerias/imagenes/Next.png"></a>

			    <!--Botón Anterior-->
			    <a href="#" class="prev"><img src="librerias/imagenes/Prev.png"></a>
			</nav>

		</div>
		<!--Fin carousel-->
		
		<!--Article-->
		<article>
			<section class="S1" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
				<div class="IMG1">
					<img src="librerias/imagenes/IMG1.jpg" alt="Algoritmos" title="Algoritmos" width="520" height="320">
					<div class="caption">
						<div class="blur"></div>
						<div class="caption-text">
							<h1>Algoritmos</h1>
						</div>
					</div>
				</div>
				<div class="P1">
					Bienvenido(a), aquí podrás aprender los fundamentos de la programación, con los cuales desarrollaras algoritmos para dar solución a un determinado problema.
				</div>
			</section>
			<section class="S2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
				<div class="P2">
					Además aquí podrás desarrollar la lógica de la programación, que es uno de los pilares de esta área, y te permitirá crear algoritmos con una secuencia racional.
				</div>
				<div class="IMG2">
					<img src="librerias/imagenes/IMG2.jpg" alt="Lógica" title="Lógica" width="520" height="320">
					<div class="caption">
						<div class="blur"></div>
						<div class="caption-text">
							<h1>Lógica</h1>
						</div>
					</div>
				</div>
			</section>
			<section class="S3">
				<div class="IMG3" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
					<img src="librerias/imagenes/IMG3.jpg" alt="Mejores resultados" title="Mejores resultados" width="520" height="320">
					<div class="caption">
						<div class="blur"></div>
						<div class="caption-text">
							<h1>Mejores resultados</h1>
						</div>
					</div>
				</div>
				<div class="P3" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
					Descarga PSeInt en tu computadora o Pseudocode en tu dispositivo móvil para desarrollar los ejercicios propuestos y reforzar los conocimientos obtenidos, por ultimo recuerda que la práctica es de suma importancia en este proceso de aprendizaje.
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
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/menu-sticky.js"></script>
		<script src="js/menu-lateral.js"></script>
		<script src="js/jquery.superslides.js"></script>
		<script src="js/aos.js"></script>
		<script>
			AOS.init({
		      duration: 600,
		      delay: 100,
		    });
		</script>
		<script>
			$(document).ready(function(){
				$(window).scroll(function(){
					if( $(this).scrollTop() > 400) {
						$('.span').css("background","#000000");
					} else {
						$('.span').css("background","#FFFFFF");
					}
				});
			});
		</script>
	</body>
</html>