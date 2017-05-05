
<?php 
 session_start(); 
	if(!isset($_SESSION['codigo_usuario']))
		header('Location:http://localhost/IS410-Boogle-Drive/entrarUsuario.php');
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
WHERE (codigo_carpeta_padre IS NULL AND codigo_usuario = ".$_SESSION['codigo_usuario'].")";
$carpetas = $conexion->ejecutarInstruccion($sql);

$sql = sprintf( "SELECT a.codigo_archivo, 
a.codigo_usuario, 
a.codigo_tipo_archivo, 
a.codigo_privacidad, 
a.nombre_archivo, 
a.tamanio_archivo, 
a.fecha_creacion, 
a.archivo, 
a.descripcion,
t.tipo_archivo,
t.extension
FROM tbl_archivos a, tbl_tipo_archivos t
WHERE a.codigo_archivo not in 
(
	select tbl.codigo_archivo 
	from tbl_archivos_x_carpetas tbl
	) 
	AND a.codigo_usuario = '%s' AND a.codigo_tipo_archivo = t.codigo_tipo_archivo",
		 $conexion->getEnlace()->real_escape_string(stripslashes($_SESSION["codigo_usuario"]))
	);


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
		<?php 

		$_SESSION['carpeta']="miUnidad";
		if ($conexion->cantidadRegistros($archivos) > 0 || $conexion->cantidadRegistros($carpetas) > 0) {
			?>
			<div class="principal">
				<div>
					<button class="transpariencia dere ordenElementos"><strong><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></strong></button>
					<button class="transpariencia dere ordenElementos"><strong>Nombre</strong></button>
				</div>

				<?php 
				if ($conexion->cantidadRegistros($carpetas) > 0) {
					?>
					<div id="div-carpetas" class="container" style="width: 100%;">
						<div>
							<div class="cabeceraContenido">Carpetas</div>
							<div>
								<?php 
								while ($fila = $conexion->obtenerRegistro($carpetas)) {
									carpeta(utf8_encode($fila["codigo_carpeta"]),utf8_encode($fila["nombre_carpeta"]));
								}
								?>
							</div>
						</div>
					</div>

					<?php 
				}
				if ($conexion->cantidadRegistros($archivos)) {
					?>
					<div id="div-archivos" class="container" style="width: 100%;">
						<div class="cabeceraContenido">Archivos</div>
						<div>
							<?php
							mostrar($conexion,$archivos);
							?>
						</div>
					</div>
					<?php } ?>
				</div>
				<?php
			}else{
				?>
				<span style="color: rgba(0,0,0,0.6);font-size: 50px;margin-left: 30%;">No hay archivos</span>
				<img style="margin-left: 30%" src="../img/carpeta_vacia.png">


				<?php
			}
			?>
			
			<input type="hidden" id="seleccion" value="0" >
			<script src="../js/jquery.min.js"></script>
			<script src="../js/bootstrap.min.js"></script>
			<script src="../js/funciones_archivos.js"></script>
			<script src="../js/my-drive.js"></script>
		</body>
		</html>