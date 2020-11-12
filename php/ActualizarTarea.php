<?php  
	include("Conexion.php");
	$titulo = $_POST['titulo'];
	$fecha = $_POST['fecha'];
	$descripcion = $_POST['descripcion'];
	session_start();
	
	if ($titulo == $_SESSION['tituloTa'] AND $fecha == $_SESSION['fechaTa'] AND $descripcion== $_SESSION['descripcionTa']) {
		echo '<script> 
			alert("No has realizado ningún cambio"); 
			window.location="../html/Tareas.php";
		</script>';
	}else {
		$sql2 = "UPDATE tarea SET titulo='".$titulo."', fecha='".$fecha."', descripcion='".$descripcion."' WHERE usuario_idusuario='".$_SESSION['id']."' AND idtarea='".$_SESSION['idtarea']."'";
		$resultado2 = mysql_query($sql2) or die (header("location: ../html/Error.html"));
		echo '<script> 
			alert("Tu tarea se ha actualizado"); 
			window.location="../html/Tareas.php";
		</script>';
	}
?>