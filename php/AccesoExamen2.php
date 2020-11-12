<?php  
	session_start();
	if (isset($_SESSION['Session']) != false) {
		header("location: ../html/Examen.php");
	}else {
		echo '<script type="text/javascript"> 
			alert("Inicia sesión por favor");
			window.location.href="../html/Temas.php";
		</script>';
	}
?>