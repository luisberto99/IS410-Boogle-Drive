
<?php 
	include_once("metodosCuadricula.php");
	include_once("../class/class-conexion.php");
	$conexion = new Conexion();
	$conexion->establecerConexion();
	$sql = "SELECT codigo_carpeta, 
					codigo_usuario, 
					codigo_carpeta_padre, 
					codigo_organizacion, 
					codigo_privacidad, 
					nombre_carpeta, 
					fecha_creacion, 
					descripcion 
					FROM tbl_carpetas";
	$carpetas = $conexion->ejecutarInstruccion($sql);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/personalizado.css">
</head>
<body style="background-color: #EEE">
	<div class="principal">
		<div>
			<button class="transpariencia dere ordenElementos"><strong><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></strong></button>
			<button class="transpariencia dere ordenElementos"><strong>Nombre</strong></button>
		</div>
		<div id="div-carpetas">
			<div class="cabeceraContenido">Carpetas</div>
			<div>
				<?php 
				while ($fila = $conexion->obtenerRegistro($carpetas)) {
					carpeta($fila["nombre_carpeta"]);
				}
				
				

				?>
			</div>
		</div>
		
		<div id="div-archivos" style="margin-top: 260px">
			<div class="cabeceraContenido">Archivos</div>
			<div>
				<?php 
				archivoPDF("C++ desde...pdf");
				archivoAudio("Cansion1.mp3");
				archivoAudio("Cansion2.mp3");
				archivoAudio("Cansion3.mp3");
				archivoAudio("Cansion4.mp3");
				archivoPDF("como progr...pdf");
				archivoPDF("java desde...pdf");
				archivoPDF("los hijos de...pdf");
				archivoImagen("photo-1-1600.jpg");
				archivoImagen("photo-2-1600.jpg");
				archivoImagen("photo-3-1600.jpg");
				archivoPDF("PHP desde...pdf");
				?>

				

			</div>
		</div>
	</div>

</body>
</html>