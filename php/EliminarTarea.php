<?php  
	include("Conexion.php");
	$idtarea = $_REQUEST['idtarea'];
	session_start();
	$sql = "DELETE FROM tarea WHERE usuario_idusuario='".$_SESSION['id']."' AND idtarea='".$idtarea."'";
	$resultado = mysql_query($sql) or die (header("location: ../html/Error.html"));
	header("location: ../html/Tareas.php");
?>