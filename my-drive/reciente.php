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
			<button class="transpariencia dere ordenElementos"><strong>Fecha en que se compartio</strong></button>
		</div>
		<div id="div-carpetas">
			<div style="padding-top: 25px">
				<?php 
				archivoAudio("todo me gusta...");
				archivoAudio("mi vida sin...");
				archivoAudio("Cansion3.mp3");
				archivoAudio("Cansion4.mp3");
				archivoPDF("PHP desde...pdf");

				?>
			</div>
		</div>
		</div>
	</div>
</body>
</html>