<?php  
	include("Conexion.php");
	$usu = $_POST["usuario"];
	$pass = $_POST["password"];
	$passEncriptado = md5($pass);
	$sql = "SELECT * FROM usuario WHERE usuario='".$usu."' AND contrasena='".$passEncriptado."'";
	$resultado =  mysql_query($sql) or die (header("location: ../html/Error.html"));
	if (mysql_num_rows($resultado) > 0) {
		session_start();
		$_SESSION['Session'] = $usu;
		echo ' <script type="text/javascript"> 
			alert("Has iniciado sesión con éxito");
			window.location="../index.php";
		</script>';
		$fila = mysql_fetch_array($resultado);
		$_SESSION['id'] = $fila['idusuario']; 
		$_SESSION['correo'] = $fila['correo'];
	} else {
		echo '<script type="text/javascript"> 
			alert("El usuario o la contraseña son incorrectos. Inténtalo de nuevo");
			window.location="../html/Login.html";
		</script> ';
	}
?>
