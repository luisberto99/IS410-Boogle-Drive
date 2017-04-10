
<?php 
	include_once("metodosCuadricula.php");
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
				carpeta("musica");
				carpeta("libros");
				carpeta("documentos");
				?>
			</div>
		</div>
		
		<div id="div-archivos" style="margin-top: 70px">
			<div class="cabeceraContenido">Archivos</div>
			<div>
				<?php 
				
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