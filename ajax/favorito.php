<?php
session_start();
	if(!isset($_SESSION['codigo_usuario']))
		header('Location:http://localhost/IS410-Boogle-Drive/entrarUsuario.php');


$_POST["id"] = 55;
	include_once("../class/class-conexion.php");
	$conexion = new Conexion();
	$conexion->establecerConexion();
	$sql = "INSERT INTO tbl_favoritos(codigo_carpeta, codigo_usuario, codigo_archivo, fecha_registo) VALUES ('1','".$_SESSION['codigo_usuario']."','".$_POST["id"]."','".date("Y-m-d")."')";
	echo $sql;
	$archivo = $conexion->ejecutarInstruccion($sql);
	$archivo = $conexion->obtenerRegistro($archivo);
	echo $archivo["archivo"]; 
?>