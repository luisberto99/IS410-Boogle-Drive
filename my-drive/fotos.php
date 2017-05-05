<?php  include_once("metodosCuadricula.php");

session_start(); 
	if(!isset($_SESSION['codigo_usuario']))
		header('Location:http://localhost/IS410-Boogle-Drive/entrarUsuario.php');
include_once("metodosCuadricula.php");
include_once("../class/class-conexion.php");
$conexion = new Conexion();
$conexion->establecerConexion();


			$sql = "SELECT codigo_archivo, codigo_usuario, codigo_privacidad, nombre_archivo, tamanio_archivo, fecha_creacion, archivo 
					FROM tbl_archivos a
					left join tbl_tipo_archivos t
					on ( left(t.codigo_tipo_archivo , 5 ) = 'image') 
					where codigo_usuario = ".$_SESSION['codigo_usuario'];

$imagenes = $conexion->ejecutarInstruccion($sql);
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/personalizado.css">
</head>
<body style="background-color: #EEE">
	<div class="principal">
		<!--<div>
			<button class="transpariencia dere ordenElementos"><strong><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></strong></button>
			<button class="transpariencia dere ordenElementos"><strong>Nombre</strong></button>
		</div>-->
		<div id="div-carpetas">
		<div class="container" style="margin-top: 20px; width: 100%">
			<?php 
			while ($fila = $conexion->obtenerRegistro($imagenes)) {
				archivoImagen($fila["codigo_archivo"], utf8_encode($fila["nombre_archivo"]), utf8_encode($fila["archivo"]));
			}

			?>
		</div>	
		</div>
	</div>

</div>
</div>
</body>
</html>