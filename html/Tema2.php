<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Estructuras selectivas</title>
		<link rel="stylesheet" type="text/css" href="../librerias/css/Tema2.css">
		<link rel="shortcut icon" href="../librerias/imagenes/Logo.png">
		<link rel="stylesheet" type="text/css" href="../librerias/responsive/MediaQueries_Tema2.css">
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
					Estructuras selectivas
				</div>
				<div class="IMG1" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="100">
					<img src="../librerias/imagenes/IMG1T2.PNG" alt="Diagrama de flujo y pseudocódigo de una estructura selectiva" title="Diagrama de flujo y pseudocódigo de una estructura selectiva">
				</div>
				<div class="P1" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="100">
					En los algoritmos para la solución de problemas donde se utilizan estructuras selectivas se emplean frases que están estructuradas de forma adecuada dentro del pseudocódigo. En el caso del diagrama de flujo, también se estructura de una forma semejante. Ambos casos se muestran en la imagen.
				</div>
			</section>

			<section class="S2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
				<div class="P2" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">
					Se desea implementar un algoritmo para determinar cuál de dos valores proporcionados es el mayor. Representarlo con pseudocódigo y diagrama de flujo. El pseudocódigo que se oberva en la imagen presenta el algoritmo que permite determinar cuál de dos cantidades proporcionadas es la mayor.
				</div>
				<div class="IMG" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="600">
					<img src="../librerias/imagenes/IMG2T2.PNG" width="250" height="190" alt="Pseudocódigo para determinar cuál de dos valores proporcionados es el mayor" title="Pseudocódigo para determinar cuál de dos valores proporcionados es el mayor">
				</div>
				<div class="P3" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
					Como se puede ver, lo que se hace es comparar los dos valores que están asignados en las variables A y B respectivamente, que previamente se deben obtener mediante su lectura; posteriormente se comparan para determinar qué proceso hacer, en el caso de que A sea mayor que B, lo que procede es asignar A en la variable M; en caso contrario, el valor que se asigna a M es el que se guarda en B. <br><br>Una vez que se ha determinado cuál es el mayor y que se guardó en la variable M, lo que procede es escribir el resultado, con lo cual se concluye el proceso de solución. <br><br>Se puede establecer que la lectura del pseudocódigo o del diagrama de flujo debe ser de la siguiente forma: <br>Leer A y B, comparar si A es mayor que B, de ser verdad asignar el valor de A en la variable M, escribir M y fin. Éste sería el seguimiento que se daría en caso de ser verdad la comparación de variables, pero en caso de ser falso el proceso cambia, dado que el valor que tomaría la variable M es el de B para escribir este valor y finalizar el proceso. Como se puede ver, primeramente se debe seguir el camino de afirmación hasta llegar al fin, y después se recorre el de negación, esto es sólo para verificar la funcionalidad del algoritmo. 
				</div>
			</section>
			<section class="S3">
				<div class="IMG2" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">
					<img src="../librerias/imagenes/IMG3T2.PNG" alt="Variables generadas a partir del problema" title="Variables generadas a partir del problema">
				</div>
				<div class="P4" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="600">
					Partiendo del planteamiento del problema se puede establecer que las variables que se deben utilizar son las mostradas en la tabla.
				</div>
				<div class="P5" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">
					De la misma forma, el diagrama de flujo muestra el algoritmo que permite establecer cuál de las dos cantidades es la mayor.
				</div>
				<div class="IMG3" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="600">
					<img src="../librerias/imagenes/IMG4T2.PNG" alt="Diagrama de flujo generado partir del problema" title="Diagrama de flujo generado partir del problema">
				</div>
			</section>

			<section class="S4" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
				<div class="Titulo2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
					Aclara tus ideas observando el siguiente video
				</div>
				<div class="Video" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000">
					<video class="responsive-video" controls poster="../librerias/imagenes/Condicional.png" width="640">
						<source src="../librerias/videos/Video2.mp4" type="video/mp4">
					</video>
				</div>
			</section>

			<section class="S5">
				<div class="Titulo3" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
					Desarrolla los siguientes ejercicios
				</div>
				<div class="P6" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000">
					<div>
						Realiza un algoritmo:
					</div>
					<ol>
						<li>
							Donde muestre como resultado si el número ingresado es par, de lo contrario no indicar nada.
						</li>
						<li>
							Donde muestre como resultado si el número es mayor que 6, aprobó la materia, de lo contrario no indicar nada.
						</li>
						<li>
							Que el ingresar el carácter F indique que es femenino y si es el carácter M, indique que es masculino.
						</li>
						<li>
							Que al ingresar un número del 1 al 7, indique qué día de la semana es, siendo 1=lunes. 2=martes, 3=miércoles, 4=jueves, 5=vienres, 6=sábado y 7=domingo.
						</li>
						<li>
							Que al ingresar una letra, indique si es consonante o vocal.
						</li>
						<li>
							Que lea un número por el teclado y determinar si tiene tres dígitos.
						</li>
						<li>
							Que lea un número entero por el teclado y determinar si es negativo.
						</li>
						<li>
							Que lea un número y determinar si termina en 4.
						</li>
						<li>
							Que lea tres números enteros y los muestre de menor a mayor.
						</li>
						<li>
							Para una tienda de zapatos que tiene una promoción de descuento para vender al mayor, esta dependerá del número de zapatos que se compren. Si son más de diez, se les dará un 10% de descuento sobre el total de la compra; si el número de zapatos es mayor de veinte pero menor de treinta, se le otorga un 20% de descuento; y si son más treinta zapatos se otorgará un 40% de descuento. El precio de cada zapato es de $80.
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