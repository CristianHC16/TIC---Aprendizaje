<?php  
	include("Conexion.php");
	$passA = $_POST['passA'];
	$passN = $_POST['passN'];
	$passN2 = $_POST['passN2'];
	$passAEncriptada = md5($passA);
	session_start();
	$sql = "SELECT * FROM usuario WHERE usuario='".$_SESSION['Session']."' AND contrasena='".$passAEncriptada."'";
	$resultado = mysql_query($sql);

	if (mysql_num_rows($resultado) > 0) {
		if ($passN == $passN2) {
			$passNEncriptada = md5($passN);
			$sql2 = "UPDATE usuario SET contrasena='".$passNEncriptada."' WHERE idusuario='".$_SESSION['id']."'";
			$resultado2 = mysql_query($sql2) or die (header("location: ../html/Error.html"));
			echo '<script> 
				alert("Tu contraseña se ha actualizado correctamente"); 
				window.location="../html/Perfil.php";
			</script>';
		}else {
			echo '<script> 
				alert("Las contraseñas no coinciden"); 
				window.location="../html/PerfilChange.php";
			</script>';
		}
	}else {
		echo '<script> 
			alert("Esta no es tu contraseña actual"); 
			window.location="../html/PerfilChange.php";
		</script>';
	}
?>