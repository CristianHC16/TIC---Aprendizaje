<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Estructuras repetitivas</title>
		<link rel="stylesheet" type="text/css" href="../librerias/css/Tema3.css">
		<link rel="shortcut icon" href="../librerias/imagenes/Logo.png">
		<link rel="stylesheet" type="text/css" href="../librerias/responsive/MediaQueries_Tema3.css">
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
					Estructuras repetitivas
				</div>
				<div class="IMG1" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="200">
					<img src="../librerias/imagenes/IMG1T3.PNG" alt="Formas de las estructuras “Mientras que”, “Repite hasta que” y “Desde, hasta que” mediante un diagrama de flujo" title="Formas de las estructuras “Mientras que”, “Repite hasta que” y “Desde, hasta que” mediante un diagrama de flujo">
				</div>
				<div class="P1" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="200">
					Cuando se requiere que un proceso se efectúe de manera cíclica, se emplean estructuras que permiten el control de ciclos, esas estructuras se emplean con base en las condiciones propias de cada problema, los nombres con los que se conocen éstas son: “Mientras que”, “Repite hasta que” y “Desde, hasta que”. En la imagen se presentan las formas de estas estructuras mediante un diagrama de flujo y el pseudocódigo correspondiente. 
				</div>
				<div class="P1-1" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
					Para el caso de la estructura “Mientras que”, el ciclo se repite hasta que la condición lógica resulta ser falsa; en tanto que en la estructura “Hasta que”, el ciclo se repite siempre y cuando el resultado de la condición lógica sea falso; además, como se puede ver en la imagen, en la estructura “Mientras que” primero se evalúa y luego se realiza el proceso; y para el caso de “Hasta que”, primero se realiza el proceso y luego se evalúa, por consiguiente este tipo de estructura siempre realizará por lo menos un proceso. <br><br>Las estructuras de tipo “Desde” se aplican cuando se tiene definido el número de veces que se realizará el proceso dentro del ciclo, lo que la hace diferente de las otras es que aquellas se pueden utilizar hasta que las condiciones cambien dentro del mismo ciclo, estas condiciones pueden deberse a un dato proporcionado desde el exterior, o bien, al resultado de un proceso ejecutado dentro del mismo, el cual marca el final. Además, en el ciclo “Desde”, su incremento es automático, por lo cual no se tiene que efectuar mediante un proceso adicional, como en los otros dos tipos. En los siguientes ejemplos se mostrará la aplicación de los tres tipos de ciclos antes mencionados.
				</div>
			</section>

			<section class="S2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
				<div class="P2" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">
					Se requiere un algoritmo para obtener la suma de diez cantidades mediante la utilización de un ciclo “Mientras”. Realice el diagrama de flujo y pseudocódigo. <br>Con base en lo que se requiere determinar se puede establecer que las variables requeridas para la solución del problema son las mostradas en la imagen.
				</div>
				<div class="IMG" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="600">
					<img src="../librerias/imagenes/IMG2T3.PNG" alt="Variables requeridas para la solución del problema" title="Variables requeridas para la solución del problema">
				</div>
				<div class="IMG2" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">
					<img src="../librerias/imagenes/IMG3T3.PNG" alt="Diagrama de flujo para solucionar el problema" title="Diagrama de flujo para solucionar el problema">
				</div>
				<div class="P3" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="600">
					La solución de este problema mediante el ciclo Mientras, que también es conocido como ciclo While en los diferentes lenguajes de programación, se puede establecer mediante el diagrama de flujo que se observa en la imagen. <br><br>De esta solución planteada se puede ver, primeramente, que el contador del ciclo “C” se inicializa en uno, posteriormente se verifica que éste sea menor o igual a diez, que es lo que debe durar el ciclo (diez veces), ya dentro del ciclo el contador se incrementa por cada vuelta que dé y se realice el proceso de leer un valor y acumularlo en la suma. 
				</div>
				<div class="P4" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">
					En general, todo ciclo debe tener un valor inicial, un incremento y un verificador que establezca el límite de ejecución (inicializa, incrementa, “mientras que”). <br><br>El pseudocódigo mostrado en la imagen presenta el algoritmo correspondiente a la solución de este problema mediante la utilización de esta herramienta.
				</div>
				<div class="IMG3" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="600">
					<img src="../librerias/imagenes/IMG4T3.PNG" alt="Pseudocódigo para solucionar el problema" width="250" height="190" title="Pseudocódigo para solucionar el problema">
				</div>
			</section>

			<section class="S3" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
				<div class="IMG4" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">
					<img src="../librerias/imagenes/IMG5T3.PNG" alt="Diagrama de flujo para solucionar el problema" title="Diagrama de flujo para solucionar el problema">
				</div>
				<div class="P5" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="600">
					Se requiere un algoritmo para obtener la suma de diez cantidades mediante la utilización de un ciclo Repite. Realice el diagrama de flujo y el pseudocódigo para representarlo. <br><br>La solución de este problema mediante el ciclo Repite, que también es conocido como ciclo Repeat en los diferentes lenguajes de programación, se puede establecer mediante el diagrama de flujo presentado en la imagen. <br><br>Las variables que se requieren son las que se mostraron anteriormente (el ejemplo anterior y el presente son el mismo, lo que cambia es el planteamiento de solución del problema en lo que respecta al tipo de ciclo por utilizar). <br><br>El diagrama de flujo muestra la solución correspondiente mediante la utilización de este tipo de ciclo.
				</div>
				<div class="P6" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">
					El pseudocódigo mostrado en la imagen presenta el algoritmo correspondiente a la solución de este problema mediante la utilización de esta herramienta. <br><br>Como se puede ver, el ciclo tiene un valor inicial, un incremento y un verificador, el cual establece el límite de ejecución, tal y como se tiene para el ciclo Mientras, mostrado en el ejemplo anterior; si se compara la solución planteada en el ejemplo anterior con ésta, se podrá observar que cuando se emplea el ciclo Mientras, primero se evalúa la terminación del ciclo y posteriormente se realiza el proceso, y en este caso, primero se ejecuta el proceso y posteriormente se evalúa la terminación del ciclo.
				</div>
				<div class="IMG5" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="600">
					<img src="../librerias/imagenes/IMG6T3.PNG" alt="Pseudocódigo para solucionar el problema" width="250" height="190" title="Pseudocódigo para solucionar el problema">
				</div>
				<hr color="#666" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
				<div class="IMG6" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">
					<img src="../librerias/imagenes/IMG7T3.PNG" alt="Diagrama de flujo para solucionar el problema" title="Diagrama de flujo para solucionar el problema">
				</div>
				<div class="P7" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="600">
					Se requiere un algoritmo para obtener la suma de diez cantidades mediante la utilización de un ciclo Desde. Realice el diagrama de flujo y pseudocódigo para representarlo. <br><br>El ciclo Desde también es conocido como ciclo For en los diferentes lenguajes de programación. Se utilizarán las mismas variables mostradas en la tabla anterior. El diagrama de flujo que se presenta en la imagen muestra la solución correspondiente utilizando el ciclo Desde.
				</div>
				<div class="P8" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">
					El pseudocódigo mostrado en la imagen presenta el algoritmo correspondiente a la solución de este problema mediante la utilización de esta herramienta. <br><br>Como se mencionó, este tipo de estructura para el control de ciclos se utiliza exclusivamente cuando el número de veces que se realizará el ciclo está bien definido; sin embargo, como se pudo ver en los dos ejemplos anteriores, esta condición está presente y no fue un impedimento para utilizarlos en la solución del problema.
				</div>
				<div class="IMG7" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="600">
					<img src="../librerias/imagenes/IMG8T3.PNG" alt="Pseudocódigo para solucionar el problema" width="250" height="190" title="Pseudocódigo para solucionar el problema">
				</div>
			</section>
			<section class="S4" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
				<div class="Titulo2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
					Aclara tus ideas observando el siguiente video
				</div>
				<div class="Video" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000">
					<video class="responsive-video" controls poster="../librerias/imagenes/Ciclo.png" width="640">
						<source src="../librerias/videos/Video3.mp4" type="video/mp4">
					</video>
				</div>
			</section>

			<section class="S5">
				<div class="Titulo3" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
					Desarrolla los siguientes ejercicios
				</div>
				<div class="P9" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000">
					<div>
						Realiza un algoritmo (utilizar un ciclo diferente en cada ejercicio):
					</div>
					<ol>
						<li>
							Que reciba 5 notas y como resultado de el promedio final.
						</li>
						<li>
							Que imprima la tabla del 3.
						</li>
						<li>
							Que reciba 5 letras e imprima cuantas son vocales.
						</li>
						<li>
							Que leea 10 números y determine cuántos son pares y cuántos son impares.
						</li>
						<li>
							Que permita calcular la suma de n números.
						</li>
						<li>
							Que permita saber los números primos comprendidos entre 1 y 100.
						</li>
						<li>
							Que pida al usuario un código de usuario y una contraseña. Deberá repetirse hasta que el código sea "1" y la contraseña sea "1234".
						</li>
						<li>
							Para calcular el resto y cociente por medio de restas sucesivas.
						</li>
						<li>
							Para calcular la suma de los primeros cien números.
						</li>
						<li>
							Para calcular la suma de los números impares menores o iguales a n.
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