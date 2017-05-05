<?php 
	
	include_once("../class/class-conexion.php");
	include "../conexion/funciones.php";
	$conexion = new Conexion();
	$conexion->establecerConexion();
	$query = "INSERT INTO tbl_mensaje_chat(codigo_mensaje, codigo_usuario_envia, codigo_usuario_recibe, mensaje, fecha_mensaje, leido) VALUES (NULL,"",'".["codigo_usuario_envia"]."','"["codigo_usuario_recibe"]."','".$["mensaje"]."','"["fecha_mensaje"]."','".[""]);



	$s = $conexion->ejecutarInstruccion($query);
	
	
 ?>​