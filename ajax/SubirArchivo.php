<?php
session_start(); 
 if(!isset($_SESSION['codigo_usuario']))
    header('Location:http://localhost/IS410-Boogle-Drive/entrarUsuario.php');

$repuesta = array();

if(isset($_FILES["subir"])) {
    include_once("../class/class-conexion.php");
  $conexion = new Conexion();
  $conexion->establecerConexion();
    $file = $_FILES["subir"];
    $nombre = $file["name"];
    $tipo = $file["type"];
    $tamaño = $file["size"];
    $tempo = $file["tmp_name"];
    echo $tipo;
    $sql = "SELECT codigo_tipo_archivo, tipo_archivo, extension FROM tbl_tipo_archivos WHERE tipo_archivo ='".$tipo."'";
    $tipo = $conexion->obtenerRegistro($conexion->ejecutarInstruccion($sql));
  $sql =sprintf(
  	"INSERT INTO tbl_archivos(codigo_usuario, codigo_tipo_archivo, codigo_privacidad, nombre_archivo, tamanio_archivo, fecha_creacion, archivo, descripcion) VALUES('%s','".$tipo["codigo_tipo_archivo"]."','%s','%s','%s','".date ("Y-m-d")."','%s','%s')",
  	$conexion->getEnlace()->real_escape_string(stripslashes($_SESSION['codigo_usuario'])),
	$conexion->getEnlace()->real_escape_string(stripslashes("1")),
	$conexion->getEnlace()->real_escape_string(stripslashes($nombre)),
	$conexion->getEnlace()->real_escape_string(stripslashes($tamaño)),
	$conexion->getEnlace()->real_escape_string(stripslashes("../archivos/".$nombre)),
	$conexion->getEnlace()->real_escape_string(stripslashes(""))
  	);
	if($conexion->ejecutarInstruccion($sql))
		$respuesta["envio"] = true;
	else
		$respuesta["envio"] = false;
	
}else{
$respuesta["envio"] = false;
}

//echo json_decode($repuesta);
?>