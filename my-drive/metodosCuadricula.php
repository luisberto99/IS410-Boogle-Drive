<?php
function carpeta($carpeta){
	echo '<div>
	<div id="'.$carpeta.'" class="carpeta col-md-2 col-sm-3">
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