<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Vectores y Matrices</title>
		<link rel="stylesheet" type="text/css" href="../librerias/css/Tema4.css">
		<link rel="shortcut icon" href="../librerias/imagenes/Logo.png">
		<link rel="stylesheet" type="text/css" href="../librerias/responsive/MediaQueries_Tema4.css">
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
					Vectores y Matrices
				</div>
				<div class="P1" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
					Se debe entender como arreglo a una estructura en la que se almacena una <br>colección de datos del mismo tipo (ejemplo: las calificaciones de los alumnos <br>de un grupo, sus edades, sus estaturas, etcétera). Estos arreglos se caracterizan por: <br> 1) Almacenar sus elementos en una posición de memoria continua. <br>2) Tener un único nombre de variable. <br>3) Tener acceso directo o aleatorio a los elementos individuales del arreglo. <br>4) Tener homogéneos sus elementos.
				</div>
			</section>

			<section class="S2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
				<div class="Titulo2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
					Arreglos unidimensionales (vectores)
				</div>
				<div class="P2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
					Los vectores son arreglos que contienen un solo índice que indica la posición que guarda el dato dentro del arreglo, esa posición inicia en 1. Para fundamentar esto se analizará el siguiente ejemplo, mediante el cual se establecen las bases para la solución de problemas de este tipo.
				</div>
				<div class="P3" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">
					Suponga que tiene las edades de cuatro alumnos; si no cuenta con un arreglo o estructura de datos tipo vector, al trabajar con estos valores al mismo tiempo, tendría que definir cuatro variables para almacenar cada una de las edades en la memoria de la máquina, sin embargo, con un vector es posible guardar estas edades en una misma variable, y tener acceso a ella en cualquier momento. En la imagen se representará mediante un esquema cómo estarían integrados estos elementos dentro del arreglo.
				</div>
				<div class="IMG" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="600">
					<img src="../librerias/imagenes/IMG1T4.PNG" alt="Representación del vector" title="Representación del vector">
				</div>
				<div class="IMG2" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">
					<img src="../librerias/imagenes/IMG2T4.PNG" alt="Diagrama de flujo y pseudocódigo para solucionar el problema" title="Diagrama de flujo y pseudocódigo para solucionar el problema" width="480">
				</div>
				<div class="P4" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="600">
					Partiendo del planteamiento del problema anteriormente mencionado, si en lugar de tener sólo cuatro edades se tuvieran todas las edades de los alumnos de una escuela o, aún más complejo, se tratara de las edades de los habitantes de una ciudad, o alguna situación semejante, utilizar variables simples resultaría, si no imposible, sí lo bastante complejo para manipular las N variables por utilizar para guardar los datos correspondientes; no obstante, con un vector se pueden almacenar estos datos en una misma variable, en la que sólo se hace referencia a la posición que ocupa dentro del arreglo. <br><br>La forma de representar la captura e impresión en un diagrama de flujo y el respectivo pseudocódigo de un vector de N elementos se muestra en la imagen.
				</div>
				<div class="P5" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
					Con los elementos establecidos anteriormente, ahora se tiene la posibilidad de plantear algoritmos para la solución de problemas donde se requiera la utilización de variables tipo estructura, sin perder de vista que el control de un arreglo también se puede realizar mediante la utilización de un ciclo Mientras, o en su caso un Repite, esto basado en las necesidades o preferencias del programador.
				</div>
			</section>

			<section class="S3" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
				<div class="Titulo2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
					Arreglos bidimensionales (tablas)
				</div>
				<div class="P2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
					Un arreglo bidimensional es un arreglo con dos índices, esto para localizar o almacenar un valor en el arreglo, por tal motivo se deben especificar dos posiciones (dos subíndices), uno para la fila y otro para la columna, a este tipo de arreglos indistintamente se les llama tablas o matrices. Para ejemplificar la forma en que están integradas y cómo se deben tratar veamos el siguiente ejemplo.
				</div>
				<div class="P6" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">
					Suponga que tiene tres calificaciones, de las cuatro que tres alumnos obtuvieron durante el período escolar. Esta información se puede almacenar de tal forma que los renglones representen las calificaciones de cada alumno, mientras que las columnas representen esas calificaciones, pero de cada materia en especial, esto lo podemos ver gráficamente en la imagen.
				</div>
				<div class="IMG3" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="600">
					<img src="../librerias/imagenes/IMG3T4.PNG" alt="Representación del vector" title="Representación del vector">
				</div>
				<div class="IMG4" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">
					<img src="../librerias/imagenes/IMG2T4.PNG" alt="Diagrama de flujo y pseudocódigo para solucionar el problema" title="Diagrama de flujo y pseudocódigo para solucionar el problema" width="480">
				</div>
				<div class="P7" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="600">
					Como se puede observar, el primer subíndice indica el renglón y el segundo la columna de la posición en que se encuentran los elementos correspondientes a la matriz de calificaciones llamada CAL. Como se puede ver, este arreglo muestra las calificaciones de cuatro materias comunes para tres alumnos diferentes, supongamos que no fuera posible guardar estos valores mediante un arreglo, nos obliga a pensar en el número de variables individuales que se requerirían para representar cada una de estas calificaciones, ahora bien, si pensáramos en N alumnos y M materias esto se complicaría N x M veces el número de variables requeridas para su representación, de aquí la importancia de poder contar con este tipo de arreglos para el tratamiento de datos. Por otro lado, la forma en que se realiza la captura e impresión de datos almacenados en un arreglo bidimensional se puede ver en la imagen.
				</div>
			</section>

			<section class="S4" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
				<div class="Titulo3" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
					Aclara tus ideas observando el siguiente video
				</div>
				<div class="Video" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000">
					<video class="responsive-video" controls poster="../librerias/imagenes/Matrices.png" width="640">
						<source src="../librerias/videos/Video4.mp4" type="video/mp4">
					</video>
				</div>
			</section>

			<section class="S5">
				<div class="Titulo4" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
					Desarrolla los siguientes ejercicios
				</div>
				<div class="P8" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000">
					<div>
						Realiza un algoritmo:
					</div>
					<ol>
						<li>
							Para alimentar una matriz de 3 filas x 3 columnas con 9 números ingresados por teclado.
						</li>
						<li>
							Que permita almacenar la cedula y el nombre de 10 estudiantes.
						</li>
						<li>
							Que llene un vector de 10 posiciones con números aleatorios entre 1 y 100.
						</li>
						<li>
							Que almacene en un arreglo de n posiciones nombres de países. Implementar una opción que al digitar una posición muestre el dato que contiene.
						</li>
						<li>
							Con una matriz de n filas y n columnas. Llenar la matriz con los números que el usuario desee.
						</li>
						<li>
							Con un array o arreglo unidimensional con un tamaño de 5, asignale los valores numéricos manualmente y muestralos por pantalla.
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