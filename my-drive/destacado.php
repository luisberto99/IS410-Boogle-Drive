<?php  include_once("metodosCuadricula.php") ?>

<!DOCTYPE html>
<html>
<head>
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
				carpeta("Carpeta1");
				carpeta("Carpeta4");
				carpeta("Carpeta6");
				carpeta("Carpeta10");
				carpeta("Carpeta12");

				?>
			</div>
		</div>
		<div style="padding-top: 80px">
			<div class="cabeceraContenido">Archivos</div>
			<div>
				<?php 
				archivoPDF("como progr...pdf");
				archivoPDF("java desde...pdf");
				archivoPDF("los hijos de...pdf");
				archivoImagen("photo-1-1600.jpg");
				archivoImagen("photo-2-1600.jpg");
				archivoImagen("photo-3-1600.jpg");
				?>
			</div>
		</div>

	</div>

</div>
</div>
</body>
</html>