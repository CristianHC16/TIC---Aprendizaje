<?php  
	include("Conexion.php");
	$titulo = $_POST["titulo"];
	$fecha = $_POST["fecha"];
	$descripcion = $_POST["descripcion"];
	session_start();
	$sql = "INSERT INTO tarea VALUES(null,'".$titulo."','".$fecha."','".$descripcion."','".$_SESSION['id']."')";
	$resultado = mysql_query($sql) or die (header("location: ../html/Error.html"));
	header("location: ../html/Tareas.php");
?>