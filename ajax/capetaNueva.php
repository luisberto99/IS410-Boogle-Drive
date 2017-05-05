<?php
	session_start();
	if(!isset($_SESSION['codigo_usuario']))
		header('Location:http://localhost/IS410-Boogle-Drive/entrarUsuario.php');

	include_once("../class/class-conexion.php");
	$conexion = new Conexion();
	$conexion->establecerConexion();
if ($_SESSION['carpeta'] == "miUnidad") {
	$sql = sprintf("INSERT INTO tbl_carpetas(codigo_usuario, codigo_carpeta_padre, codigo_privacidad, nombre_carpeta, fecha_creacion, descripcion) VALUES ('%s',NULL,'%s','%s','".date("Y-m-d")."','%s')",
 	$conexion->getEnlace()->real_escape_string(stripslashes($_SESSION["codigo_usuario"])),
 	$conexion->getEnlace()->real_escape_string(stripslashes("1")),
 	$conexion->getEnlace()->real_escape_string(stripslashes($_POST["nombre"])),
 	$conexion->getEnlace()->real_escape_string(stripslashes(""))
);
}else{
	$sql = sprintf("INSERT INTO tbl_carpetas(codigo_usuario, codigo_carpeta_padre, codigo_privacidad, nombre_carpeta, fecha_creacion, descripcion) VALUES ('%s','".$_SESSION['carpeta']."','%s','%s','".date("Y-m-d")."','%s')",
 	$conexion->getEnlace()->real_escape_string(stripslashes($_SESSION["codigo_usuario"])),
 	$conexion->getEnlace()->real_escape_string(stripslashes("1")),
 	$conexion->getEnlace()->real_escape_string(stripslashes($_POST["nombre"])),
 	$conexion->getEnlace()->real_escape_string(stripslashes(""))
);
}
	
	$respuesta["crea"] = $conexion->ejecutarInstruccion($sql);
	$respuesta["carpeta"] = $_SESSION['carpeta'];

	echo json_encode($respuesta);
		

?>