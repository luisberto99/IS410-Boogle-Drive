<?php

session_start(); 
 if(!isset($_SESSION['codigo_usuario']))
    header('Location:http://localhost/IS410-Boogle-Drive/entrarUsuario.php');
include_once("../class/class-conexion.php");
include_once("metodosCuadricula.php");
$conexion = new Conexion();
$conexion->establecerConexion();

$sql= "SELECT * FROM tbl_carpetas WHERE codigo_carpeta_padre =".$_GET["carpeta"];
$carpetas = $conexion->ejecutarInstruccion($sql);

$sql="SELECT a.codigo_archivo,
 a.nombre_archivo,
  a.archivo, 
  ta.tipo_archivo, 
  ta.extension
FROM tbl_archivos_x_carpetas ac, tbl_archivos a, tbl_carpetas c, tbl_tipo_archivos ta
where ac.codigo_archivo = a.codigo_archivo and ac.codigo_carpeta = c.codigo_carpeta and ta.codigo_tipo_archivo = a.codigo_tipo_archivo and c.codigo_carpeta ='".$_GET["carpeta"]."'" ;

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
	$_SESSION['carpeta']=$_GET["carpeta"]; ;
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
			if ($conexion->cantidadRegistros($archivos) > 0) {
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
		<span style="color: rgba(0,0,0,0.6);font-size: 50px;margin-left: 30%;">Carpeta vacia</span>
		<img style="margin-left: 30%" src="../img/carpeta_vacia.png">


		<?php
	}
?>
	

		<input type="hidden" id="seleccion" value="0" >
		<script src="../js/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/funciones_archivos.js"></script>
	</body>
	</html>
	<?php $conexion->cerrarConexion() ?>