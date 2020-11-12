<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Tareas</title>
		<link rel="stylesheet" type="text/css" href="../librerias/css/Tareas.css">
		<link rel="shortcut icon" href="../librerias/imagenes/Logo.png">
		<link rel="stylesheet" type="text/css" href="../librerias/responsive/MediaQueries_Tareas.css">
		<link rel="stylesheet" type="text/css" href="../librerias/css/animate.css">
		<link rel="stylesheet" type="text/css" href="../librerias/css/aos.css">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	</head>
	<body>
		<!--Boton Flotante-->
		<div class="fixed-action-btn animated2 fadeIn">
			<a class="btn-floating btn-large" href="#modal1">
			    <i class="material-icons">add</i>
			</a>
		</div>
		
		<!--Ventana Modal-->
		<div id="modal1" class="modal-wrapper">
		    <div class="popup-contenedor">

		    	<div class="Encabezado">
		    		<div class="Titulo2">
		    			Tarea
		    		</div>
		    		<div class="Cerrar">
		    			<a class="popup-cerrar" href="#S2">x</a>
		    		</div>
		    	</div>

		    	<div class="Tarea">
					<form class="Formulario" method="POST" action="../php/AgregarTarea.php">
						<div class="Container">
							<div class="input-group">
								<input type="text" name="titulo" class="titulo" placeholder="Título" autocomplete="off" required />
							</div>
							<div class="input-group">
								<input type="date" name="fecha" class="fecha" placeholder="Fecha de entrega" autocomplete="off" required />
							</div>
							<div class="input-group">
								<textarea type="text" name="descripcion" class="descripcion" placeholder="Descripción (si es necesario)" autocomplete="off" rows="5" ></textarea>
							</div>
							<input type="submit" class="btn-submit" value="Agregar" />
						</div>
					</form>
				</div>
		    </div>
		</div>

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
									<li class="Tareas"><a href="" class="M2">Tareas</a></li>
									<li><a href="Perfil.php" class="M2">Perfil</a></li>
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
			
			<section class="S1">
				<div class="Titulo1" id="Titulo" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
					Agrega nuevas tareas
				</div>
				<div class="IMG1" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300"></div>
				<div class="P1" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
					Agregar una tarea es fácil y rápido.  Simplemente debes presionar el botón azul  que se encuentra en la parte inferior-derecha y posteriormente introducir un título, la fecha de entrega y una descripción. <br><br>
					Además te recomendamos observar tus tareas constantemente, esto te permitirá mantener un mejor control sobre tu tiempo y un orden sobre las actividades que debes realizar, ya que sabrás en qué fecha debes entregar tus trabajos, talleres, etc.
				</div>
			</section>

			<section class="S2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
				<div class="Titulo3" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700">
					Mis tareas
				</div>

				<?php  
					include("../php/Conexion.php");
					$sql = "SELECT * FROM tarea WHERE usuario_idusuario='".$_SESSION['id']."'";
					$resultado = mysql_query($sql) or die (header("location: ../html/Error.html"));
					if (mysql_num_rows($resultado) > 0) {
						while ($fila = mysql_fetch_array($resultado)) {			
				?>
							<div class="Contenedor">
								<div class="Animacion" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="900">
									<div class="Caja1">
										<div class="TituloC1">
											<?php echo $fila['titulo']; ?>
										</div>
										<div class="TextoC1">
											<?php
												echo $fila['fecha'] . "<br>";
											?>

											<div>
												<?php 
													echo $fila['descripcion']; 
												?>
											</div>
										</div>
										<div class="Botones">
											<a class="Delete" href="../php/EliminarTarea.php?idtarea=<?php echo $fila['idtarea']; ?>">
												<img src="../librerias/imagenes/DeleteTa.png">
											</a>
											<a href="ActualizarTarea.php?idtarea=<?php echo $fila['idtarea']; ?>">
												<img src="../librerias/imagenes/EditTa.png">
											</a>
										</div>
									</div>
								</div>
							</div>
				<?php
						}	
					}else {
				?>
						<div class="P2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="900">
							Aún no has agregado una tarea
						</div>
				<?php
					}
				?>
			</section>

			<section class="S3">
				<div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
					Por último recuerda agregar también las evaluaciones pendientes, ya que sabrás los contenidos que debes estudiar, y podrás prepararte para obtener un buen resultado en el examen.
				</div>
			</section>

		</article>

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