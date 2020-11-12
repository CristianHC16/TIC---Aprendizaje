<?php
	include("Conexion.php");
	$usu = $_POST["usuario"];
	$cor = $_POST["correo"];
	$pass = $_POST["pass"];
	$pass2 = $_POST["pass2"];
	$passEncriptado;
	$sql2 = "SELECT * FROM usuario WHERE usuario='".$usu."'";
	$resultado2 = mysql_query($sql2) or die (header("location: ../html/Error.html"));
	$sql3 = "SELECT * FROM usuario WHERE correo='".$cor."'";
	$resultado3 = mysql_query($sql3) or die (header("location: ../html/Error.html"));

	if (mysql_num_rows($resultado2) == 0 AND mysql_num_rows($resultado3) == 0) {
		if ($pass==$pass2) {
			$passEncriptado = md5($pass);
			$sql = "INSERT INTO usuario VALUES(null,'".$usu."','".$passEncriptado."','".$cor."')";
			$respuesta = mysql_query($sql) or die ("Error") or die (header("location: ../html/Error.html"));
			echo ' <script type="text/javascript"> 
				alert("Te has registrado con éxito");
				window.location="../html/Login.html";
			</script>';
		}else{
			echo ' <script type="text/javascript"> 
				alert("Las contraseñas no coinciden");
				window.location="../html/Registro.html";
			</script>';
		}
	}else {
		echo '<script> 
			alert("El usuario o el correo no se encuentran disponibles"); 
			window.location="../html/Registro.html";
		</script>';
	}
?>
