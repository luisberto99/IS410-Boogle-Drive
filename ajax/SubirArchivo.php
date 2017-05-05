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
    $carpeta = "../archivos/";
    $respuesta["tipo"]= $tipo;

    $src = $carpeta.$nombre;
    $sql = "SELECT codigo_tipo_archivo, tipo_archivo, extension FROM tbl_tipo_archivos WHERE tipo_archivo ='".$tipo."'";
    $tipo = $conexion->ejecutarInstruccion($sql);

    if ($conexion->cantidadRegistros($tipo) > 0) {
     $tipo = $conexion->obtenerRegistro($tipo);
    }else{
      $tipo["codigo_tipo_archivo"] = 1;
    }

  $respuesta["tipo"] = $tipo["codigo_tipo_archivo"];
  $sql =sprintf(
  	"INSERT INTO tbl_archivos(codigo_usuario, codigo_tipo_archivo, codigo_privacidad, nombre_archivo, tamanio_archivo, fecha_creacion, archivo, descripcion) VALUES('%s','".$tipo["codigo_tipo_archivo"]."','%s','%s','%s','".date ("Y-m-d")."','%s','%s')",
  	$conexion->getEnlace()->real_escape_string(stripslashes($_SESSION['codigo_usuario'])),
	$conexion->getEnlace()->real_escape_string(stripslashes("1")),
	$conexion->getEnlace()->real_escape_string(stripslashes($nombre)),
	$conexion->getEnlace()->real_escape_string(stripslashes($tamaño)),
	$conexion->getEnlace()->real_escape_string(stripslashes($src)),
	$conexion->getEnlace()->real_escape_string(stripslashes(""))
  	);

	if($conexion->ejecutarInstruccion($sql)){
    $sql = "SELECT codigo_archivo FROM tbl_archivos WHERE nombre_archivo = '".$nombre."'";
    $nuevo = $conexion->ejecutarInstruccion($sql);
    $nuevo = $conexion->obtenerRegistro($nuevo);
    $sql= "INSERT INTO tbl_archivos_x_carpetas(codigo_archivo, codigo_carpeta) VALUES ('".$nuevo["codigo_archivo"]."','".$_SESSION['carpeta']."')";
    $conexion->ejecutarInstruccion($sql);
		$respuesta["envio"] = true;
    $respuesta["carpeta"]= $_SESSION["carpeta"];
  move_uploaded_file($tempo, $src);
	}else
		$respuesta["envio"] = false;
}else{
$respuesta["envio"] = false;
}

echo json_encode($respuesta);
?>