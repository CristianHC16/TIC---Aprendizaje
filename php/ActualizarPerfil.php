<?php  
	include("Conexion.php");
	$usu = $_POST['usuario'];
	$cor = $_POST['correo'];
	$sql2 = "SELECT * FROM usuario WHERE usuario='".$usu."'";
	$resultado2 = mysql_query($sql2) or die (header("location: ../html/Error.html"));
	$sql3 = "SELECT * FROM usuario WHERE correo='".$cor."'";
	$resultado3 = mysql_query($sql3) or die (header("location: ../html/Error.html"));
	session_start();

	if ($usu == $_SESSION['Session'] AND $cor == $_SESSION['correo']) {
		echo '<script> 
			alert("No has realizado ningún cambio"); 
			window.location="../html/Perfil.php";
		</script>';
	}else {
		if (mysql_num_rows($resultado2) == 0 || mysql_num_rows($resultado3) == 0) {
			$_SESSION['Session'] = $usu;
			$_SESSION['correo'] = $cor;
			$sql = "UPDATE usuario SET usuario='".$usu."', correo='".$cor."' WHERE idusuario='".$_SESSION['id']."'";
			$resultado = mysql_query($sql) or die (header("location: ../html/Error.html"));
			echo '<script> 
				alert("Tus datos se han actualizado correctamente"); 
				window.location="../html/Perfil.php";
			</script>';
		}else {
			echo '<script> 
				alert("El usuario o el correo no se encuentran disponibles"); 
				window.location="../html/Perfil.php";
			</script>';
		}		
	}	
?>