
<?php 
	include_once("metodosCuadricula.php");
	include_once("../class/class-conexion.php");
	$conexion = new Conexion();
	$conexion->establecerConexion();
	$sql = "SELECT codigo_carpeta, 
					codigo_usuario, 
					codigo_carpeta_padre, 
					codigo_privacidad, 
					nombre_carpeta, 
					fecha_creacion, 
					descripcion 
					FROM tbl_carpetas
					WHERE (codigo_carpeta_padre IS NULL AND codigo_usuario = 1)";
	$carpetas = $conexion->ejecutarInstruccion($sql);

	$sql = "SELECT codigo_archivo, 
			codigo_usuario, 
			codigo_tipo_archivo, 
			codigo_privacidad, 
			nombre_archivo, 
			tamanio_archivo, 
			fecha_creacion, 
			archivo, 
			descripcion 
			FROM tbl_archivos 
			WHERE (codigo_usuario = 1)";
	$archivos = $conexion->ejecutarInstruccion($sql);
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
		<div>
			<div class="cabeceraContenido">Carpetas</div>
			<div>
				<?php 
				while ($fila = $conexion->obtenerRegistro($carpetas)) {
					carpeta($fila["codigo_carpeta"],$fila["nombre_carpeta"]);
				}
				?>
			</div>
		</div>
		
		<div id="div-archivos" style="margin-top: 160px">
			<div class="cabeceraContenido">Archivos</div>
			<div>
			<?php 
				while ($fila = $conexion->obtenerRegistro($archivos)) {
					archivoPDF($fila["codigo_archivo"],$fila["nombre_archivo"]);
				}
				?>

				

			</div>
		</div>
	</div>
	<input type="hidden" id="seleccion" value="0" >
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/funciones_archivos.js"></script>
</body>
</html>