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
			<div class="cabeceraContenido">Esta semana</div>
			<div>
				<?php 
				archivoImagen("photo-2-1600.jpg");
				archivoImagen("photo-3-1600.jpg");
				archivoPDF("La vida es...pdf");
				archivoPDF("comer, resar...pdf");
				?>
			</div>
		</div>
		<div id="div-carpetas" style="margin-top: 170px">
			<div class="cabeceraContenido">Marzo 2017</div>
			<div>
				<?php 
				archivoAudio("24k.mp3");
				archivoAudio("Talking to...mp3");
				archivoImagen("Portabilidad");
				

				?>
			</div>
		</div>
	</div>

</div>
</div>
</body>
</html>