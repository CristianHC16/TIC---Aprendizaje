<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Diagramas de flujo</title>
		<link rel="stylesheet" type="text/css" href="../librerias/css/Tema1.css">
		<link rel="shortcut icon" href="../librerias/imagenes/Logo.png">
		<link rel="stylesheet" type="text/css" href="../librerias/responsive/MediaQueries_Tema1.css">
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
						<li class="Temas"><a href="Temas.php" class="M">Temas</a></li>
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
					Diagramas de flujo
				</div>
				<div class="P1" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
					Los diagramas de flujo son una herramienta que permite representar visualmente qué operaciones se requieren y en qué secuencia se deben efectuar para solucionar un problema dado. Por consiguiente, un diagrama de flujo es la representación gráfica mediante símbolos especiales, de los pasos o procedimientos de manera secuencial y lógica que se deben realizar para solucionar un problema dado.
				</div>
			</section>

			<section class="S2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
				<div class="IMG1" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="600">
					<img src="../librerias/imagenes/IMG1T1.PNG" alt="Símbolos utilizados para construir un diagrama de flujo" title="Símbolos utilizados para construir un diagrama de flujo" class="IMG1C1">
					<img src="../librerias/imagenes/IMG2T1.PNG" class="IMG1C" alt="Operadores aritméticos" title="Operadores aritméticos">
				</div>
				<div class="P2" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">
					Los diagramas de flujo desempeñan un papel vital en la programación de un problema, ya que facilitan la comprensión de problemas complicados y sobre todo aquellos en que sus procesos son muy largos; generalmente, los diagramas de flujo se dibujan antes de comenzar a programar el código fuente, que se ingresará posteriormente a la computadora. Los diagramas de flujo facilitan la comunicación entre los programadores y los usuarios, además de que permiten de una manera más rápida detectar los posibles errores de lógica que se presenten al implementar el algoritmo. <br> <br>En la primera tabla se muestran algunos de los principales símbolos utilizados para construir un diagrama de flujo. <br> <br>Dentro de los diagramas de flujo se pueden utilizar los símbolos que se presentan en la segunda tabla, con los cuales se indican las operaciones que se efectuarán a los datos con el fin de producir un resultado.
				</div>
			</section>

			<section class="S3">
				<div class="IMG2" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">
					<img src="../librerias/imagenes/IMG3T1.PNG" alt="Diagrama de flujo para determinar el volumen de una caja de dimensiones A, B y C" title="Diagrama de flujo para determinar el volumen de una caja de dimensiones A, B y C">
				</div>
				<div class="P3" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="600">
					Por ejemplo, se puede establecer la solución del diagrama de flujo para determinar el volumen de una caja de dimensiones A, B y C como se muestra en la imagen.	<br><br>Y como se puede ver de manera gráfica, se establece de forma precisa la secuencia de los pasos por realizar para obtener el resultado del volumen.
				</div>
			</section>

			<section class="S4" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
				<div class="Titulo2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
					Aclara tus ideas observando el siguiente video
				</div>
				<div class="Video" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000">
					<video class="responsive-video" controls poster="../librerias/imagenes/DiagramadeFlujo.png">
						<source src="../librerias/videos/Video1.mp4" type="video/mp4">
					</video>
				</div>
			</section>

			<section class="S5">
				<div class="Titulo3" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
					Desarrolla los siguientes ejercicios
				</div>
				<div class="P4" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000">
					<div>
						Realizar el diagrama de flujo:
					</div>
					<ol>
						<li>
							De un programa que muestre en pantalla los 100 primeros números pares.
						</li>
						<li>
							Para calcular el volumen de un prisma recto.
						</li>
						<li>
							Para hallar el perímetro de un triangulo, el valor de los lados del triangulo se debe ingresar por teclado.
						</li>
						<li>
							De un programa que permita la carga de 10 valores por teclado y muestre la suma de los valores ingresados y su promedio.
						</li>
						<li>
							De un algoritmo que lea N números e imprima el porcentaje de números pares e impares.
						</li>
						<li>
							De un programa que permita la carga de 10 valores por teclado y muestre la suma de los valores ingresados y su promedio.
						</li>
						<li>
							De un programa que realice la suma de los números pares en un rango dado, los números  inferior y superior del rango deben ser ingresados por teclado.
						</li>
						<li>
							De un programa para calcular la suma de los 10 primeros números pares.
						</li>
						<li>
							De un programa que permita convertir una cantidad ingresada en kilogramos a libras.
						</li>
						<li>
							De un programa que permita  elevar un numero entero ingresado por teclado, a una potencia dada.
						</li>
					</ol>
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