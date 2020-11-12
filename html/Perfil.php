<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Perfil</title>
		<link rel="stylesheet" type="text/css" href="../librerias/css/Perfil.css">
		<link rel="shortcut icon" href="../librerias/imagenes/Logo.png">
		<link rel="stylesheet" type="text/css" href="../librerias/responsive/MediaQueries_Perfil.css">
		<link rel="stylesheet" type="text/css" href="../librerias/css/animate.css">
		<link rel="stylesheet" type="text/css" href="../librerias/css/aos.css">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<script>
			function AbrirChange() {
				window.location="PerfilChange.php";
			}
		</script>
	</head>
	<body>
		<!--Ventana Modal-->
		<div id="modal1" class="modal-wrapper">
		    <div class="popup-contenedor">

		    	<div class="Encabezado">
		    		<div class="Titulo2">
		    			Eliminar cuenta
		    		</div>
		    		<div class="Cerrar">
		    			<a class="popup-cerrar" href="#">x</a>
		    		</div>
		    	</div>

		    	<div class="P1">
		    		Por favor introuduce la contraseña de tu cuenta para realizar una verificación.
		    	</div>

		    	<div class="Eliminar">
					<form class="Formulario" method="POST" action="../php/EliminarCuenta.php">
						<div class="Container">
							<div class="input-group-delete">
								<span id="change" class="eye"></span><input type="password" name="pass" class="pass" id="pass" autocomplete="off" placeholder="Contraseña" required />
							</div>

							<div class="P2">
					    		Al momento de presionar este botón, todos los datos relacionados con esta cuenta serán eliminados de la base de datos.
					    	</div>

							<input type="submit" class="btn-submit" value="Eliminar" />
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
									<li class="Perfil"><a href="" class="M2">Perfil</a></li>
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
					Actualiza o elimina tu perfil
				</div>

				<div class="Profile" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
					<form class="Formulario" method="POST" action="../php/ActualizarPerfil.php" id="Form">
						<?php  
							include("../php/Conexion.php");
							$sql = "SELECT * FROM usuario WHERE idusuario='".$_SESSION['id']."'";
							$resultado = mysql_query($sql) or die (header("location: ../html/Error.html"));
							$fila = mysql_fetch_array($resultado);
						?>
						<div class="Container">
							<div class="input-group">
								<label for="usuario">Usuario</label>
								<input type="text" name="usuario" class="usuario" id="usuario" autocomplete="off" maxlength="12" required value="<?php echo $fila['usuario']; ?>" />
							</div>
							<div class="input-group">
								<label for="correo">Correo</label>
								<input type="email" name="correo" class="correo" id="correo" autocomplete="off" required value="<?php echo $fila['correo']; ?>" />
							</div>
						</div>
					</form>
					<div class="Buttons">
						<input type="submit" class="btn-update" value="Guardar cambios" form="Form" />
						<input type="submit" class="btn-change" value="Cambiar contraseña"onclick="AbrirChange()" />
					</div>
					<div class="Delete">
						<a href="#modal1">Eliminar cuenta</a>
					</div>
				</div>
			</div>
		</article>

		<script src="../js/jquery-3.2.1.min.js"></script>
		<script src="../js/changeeye.js"></script>
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