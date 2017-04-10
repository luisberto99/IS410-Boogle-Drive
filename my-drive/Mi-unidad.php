<?php
function carpeta($carpeta){
	echo '<div>
	<div id="'.$carpeta.'" class="carpeta col-md-2">
		<div style="padding-top: 14px"><span class="glyphicon glyphicon-folder-close" style="padding-left: : 8px" aria-hidden="true">&nbsp;</span> '.$carpeta.'</div>
	</div>
</div>';
}

function archivoImagen($imagen){
	echo '<div class="archivo col-md-2">
	<div style="width: 100$; height: 80%">
		<img class="archivo-imagen" src="../img/'.$imagen.'">
	</div>
	<div>
		<span class="glyphicon glyphicon-picture" style="font-size: 20px; color: #C43C27" aria-hidden="true"></span> &nbsp;'.$imagen.'
	</div>
</div>';
}

function archivoAudio($audio){
	echo '<div class="archivo col-md-2">
					<div style="width: 100$; height: 80%">
						<span class="glyphicon glyphicon-music archivo-audio" aria-hidden="true" ></span>
					</div>
					<div>
						<span class="glyphicon glyphicon-music" style="font-size: 20px; color: blue" aria-hidden="true"></span> &nbsp;'.$audio.'
					</div>
				</div>';
}

function archivoPDF($archivo){
	echo '<div class="archivo col-md-2">
					<div style="width: 100$; height: 80%">
						<span class="glyphicon glyphicon-book archivo-audio" aria-hidden="true" ></span>
					</div>
					<div>
						<span class="glyphicon glyphicon-book" style="font-size: 20px; color: #00993A" aria-hidden="true"></span> &nbsp;'.$archivo.'
					</div>
				</div>';
}
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
				carpeta("Carpeta1");
				carpeta("Carpeta2");
				carpeta("Carpeta3");
				carpeta("Carpeta4");
				carpeta("Carpeta5");
				carpeta("Carpeta6");
				carpeta("Carpeta7");
				carpeta("Carpeta8");
				carpeta("Carpeta9");
				carpeta("Carpeta10");
				carpeta("Carpeta11");
				carpeta("Carpeta12");
				carpeta("Carpeta13");

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
				archivoPDF("como programar...pdf");
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