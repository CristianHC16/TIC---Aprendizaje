<?php  
	include("Conexion.php");
	$pass = $_POST['pass'];
	$passEncriptada = md5($pass);
	session_start();
	$sql = "SELECT * FROM usuario WHERE usuario='".$_SESSION['Session']."' AND contrasena='".$passEncriptada."'";
	$resultado = mysql_query($sql) or die (header("location: ../html/Error.html"));

	if (mysql_num_rows($resultado) > 0) {
		$sql3 = "DELETE FROM tarea WHERE usuario_idusuario='".$_SESSION['id']."'";
		$resultado3 = mysql_query($sql3);
		$sql2 = "DELETE FROM usuario WHERE idusuario='".$_SESSION['id']."'";
		$resultado2 = mysql_query($sql2) or die (header("location: ../html/Error.html"));
		echo '<script> 
			alert("Tu cuenta ha sido eliminada"); 
			window.location="../index.php";
		</script>';
		session_destroy();
	}else {
		echo '<script> 
			alert("La contraseña es incorrecta"); 
			window.location="../html/Perfil.php";
		</script>';
	}
?>