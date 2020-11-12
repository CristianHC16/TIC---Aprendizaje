<?php 
	$con = mysql_connect("localhost","root","") or die (header("location: ../html/Error.html"));
	mysql_select_db("apptic") or die (header("location: ../html/Error.html"));
?>