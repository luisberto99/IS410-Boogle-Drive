<?php
session_start();
	if(!isset($_SESSION['codigo_usuario']))
		header('Location:http://localhost/IS410-Boogle-Drive/entrarUsuario.php');

	include_once("../class/class-conexion.php");
	$conexion = new Conexion();
	$conexion->establecerConexion();

	$sql = "SELECT archivo FROM tbl_archivos WHERE codigo_archivo =".$_POST["id"];
	
	$link = $conexion->ejecutarInstruccion($sql);
	$link = $conexion->obtenerRegistro($link);
	echo $link["archivo"]; 
?>

