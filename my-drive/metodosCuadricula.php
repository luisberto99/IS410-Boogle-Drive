<?php
function carpeta($id,$carpeta){
	echo '<div>
	<div id="carpeta_'.$id.'" class="carpeta col-md-2 col-lg-2 col-sm-2 " onclick="seleccion(\'#carpeta_'.$id.'\')" ondblclick="abrirCarpeta('.$id.')">
		<div style="padding-top: 14px"><span class="glyphicon glyphicon-folder-close" style="padding-left: : 8px" aria-hidden="true">&nbsp;</span> '.substr($carpeta, 0 , 15 ).'</div>
	</div>
</div>';
}

function archivoImagen($id,$imagen,$foto){
	echo '<div id="imagen_'.$id.'" class="archivo col-md-2 col-lg-2 col-sm-2" ondblclick="abrir('.$id.')" onclick="seleccion(\'#imagen_'.$id.'\')">
	<div style="width: 100%; height: 80%">
		<img class="archivo-imagen" src="'.$foto.'">
		
	</div>
	<div>
		<span class="glyphicon glyphicon-picture" style="font-size: 20px; color: #C43C27" aria-hidden="true"></span> &nbsp;'.substr($imagen, 0 , 15 ).'
	</div>
</div>';
}

function archivoComprimido($id,$archivo){
	echo '<div class="archivo col-md-2 col-lg-2 col-sm-2" ondblclick="abrir('.$id.')" onclick="seleccion(\'#comprimido_'.$id.'\')">
	<div style="width: 100%; height: 80%">
		<span class="glyphicon glyphicon-compressed archivo-audio" aria-hidden="true" ></span>
	</div>
	<div id="comprimido_'.$id.'" class="nombreArchivo">
		<span class="glyphicon glyphicon-compressed" style="font-size: 20px; color: #C43C27" aria-hidden="true"></span> &nbsp;'.$archivo.'
	</div>
</div>';
}
function otro($id,$archivo){
	echo '<div class="archivo col-md-2 col-lg-2 col-sm-2" ondblclick="abrir('.$id.')" onclick="seleccion(\'#comprimido_'.$id.'\')">
	<div style="width: 100%; height: 80%">
		<span class="glyphicon glyphicon-compressed archivo-audio" aria-hidden="true" ></span>
	</div>
	<div id="comprimido_'.$id.'" class="nombreArchivo">
		<span class="glyphicon glyphicon-file" style="font-size: 20px; color: #C43C27" aria-hidden="true"></span> &nbsp;'.$archivo.'
	</div>
</div>';
}

function archivoAudio($id,$audio){
	echo '<div class="archivo col-md-2 col-lg-2 col-sm-2" ondblclick="abrir('.$id.')" onclick="seleccion(\'#audio_'.$id.'\')">
					<div style="width: 100%; height: 80%">
						<span class="glyphicon glyphicon-music archivo-audio" aria-hidden="true" ></span>
					</div>
					<div id="audio_'.$id.'" class="nombreArchivo">
						<span class="glyphicon glyphicon-music" style="font-size: 20px; color: blue" aria-hidden="true"></span> &nbsp;'.$audio.'
					</div>
				</div>';
}

function archivovideo($id,$audio){
	echo '<div class="archivo col-md-2 col-lg-2 col-sm-2" ondblclick="abrir('.$id.')" onclick="seleccion(\'#audio_'.$id.'\')">
					<div style="width: 100%; height: 80%">
						<span class="glyphicon glyphicon-facetime-video archivo-audio" aria-hidden="true" ></span>
					</div>
					<div id="audio_'.$id.'" class="nombreArchivo">
						<span class="glyphicon glyphicon-facetime-video" style="font-size: 20px; color: blue" aria-hidden="true"></span> &nbsp;'.$audio.'
					</div>
				</div>';
}

function archivoPDF($id,$archivo){
	echo '<div class="archivo col-md-2 col-lg-2 col-sm-2" ondblclick="abrir('.$id.')"  onclick="seleccion(\'#archivo_'.$id.'\')">
					<div style="width: 100%; height: 80%">
						<span class="glyphicon glyphicon-book archivo-audio" aria-hidden="true" ></span>
					</div>
					<div id="archivo_'.$id.'" class="nombreArchivo">
						<span class="glyphicon glyphicon-book" style="font-size: 20px; color: #00993A" aria-hidden="true"></span> &nbsp;'.$archivo.'
					</div>
				</div>';
}

function mostrar($conexion,$archivos){
	while ($fila = $conexion->obtenerRegistro($archivos)) {
		$img = 'image/'.$fila["extension"];
		$audio ="audio/".$fila["extension"];
		if ($fila["tipo_archivo"] == $img) {
			archivoImagen(utf8_encode($fila["codigo_archivo"]),utf8_encode($fila["nombre_archivo"]),$fila["archivo"]);
		}elseif ($fila["tipo_archivo"] == $audio) {
			archivoAudio(utf8_encode($fila["codigo_archivo"]),utf8_encode($fila["nombre_archivo"]));
		}elseif ($fila["tipo_archivo"] == 'application/pdf') {
			archivoPDF(utf8_encode($fila["codigo_archivo"]),utf8_encode($fila["nombre_archivo"]));
		}elseif ($fila["tipo_archivo"] == "application/octet-stream") {
			archivoComprimido(utf8_encode($fila["codigo_archivo"]),utf8_encode($fila["nombre_archivo"]));
		}elseif ($fila["tipo_archivo"] == "application/x-msdownload") {
			otro(utf8_encode($fila["codigo_archivo"]),utf8_encode($fila["nombre_archivo"]));
		}elseif ($fila["tipo_archivo"] == "otro") {
			otro(utf8_encode($fila["codigo_archivo"]),utf8_encode($fila["nombre_archivo"]));
		}

	}
}
?>