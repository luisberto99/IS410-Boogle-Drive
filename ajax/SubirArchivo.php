<?php
session_start(); 
 if(!isset($_SESSION['codigo_usuario']))
    header('Location:http://localhost/IS410-Boogle-Drive/entrarUsuario.php');

if(isset($_POST["src"])) {
    include_once("../class/class-conexion.php");
  $conexion = new Conexion();
  $conexion->establecerConexion();
	$nombrenombre = $_POST["src"];
  $sql =sprintf(
  	"INSERT INTO tbl_archivos(codigo_usuario, codigo_tipo_archivo, codigo_privacidad, nombre_archivo, tamanio_archivo, fecha_creacion, archivo, descripcion) VALUES('%s','%s','%s','%s','%s','%s','%s','%s')",
  	$conexion->getEnlace()->real_escape_string(stripslashes($_SESSION['codigo_usuario'])),
	$conexion->getEnlace()->real_escape_string(stripslashes("81")),
	$conexion->getEnlace()->real_escape_string(stripslashes("1")),
	$conexion->getEnlace()->real_escape_string(stripslashes("archivo...")),
	$conexion->getEnlace()->real_escape_string(stripslashes("45")),
	$conexion->getEnlace()->real_escape_string(stripslashes("2017-05-06")),
	$conexion->getEnlace()->real_escape_string(stripslashes($_POST["src"])),
	$conexion->getEnlace()->real_escape_string(stripslashes(""))
  	);

	if($conexion->ejecutarInstruccion($sql))
		echo "true";
	else
		echo "false";
}
?>