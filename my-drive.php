		<?php
		function menu_nuevo(){
			echo '<ul class="dropdown-menu">
			<li>
				<a href="#">
					<span class="glyphicon glyphicon-folder-open" aria-hiden="true">
					</span>
					Carpeta nueva...
				</a>
			</li>
			<li role="separator" class="divider"></li>
			<li>
				<a href="#">
					<span class="glyphicon glyphicon-folder-open" aria-hiden="true"></span>
					Subir Archivos...
				</a>
			</li>
			<li>
				<a href="#">
					<span class="glyphicon glyphicon-folder-open" aria-hiden="true"></span>
					Subir Archivos...
				</a>
			</li>
			<li>
				<a href="#">
					<span class="glyphicon glyphicon-folder-open" aria-hiden="true"></span>
					Subir Carpeta...
				</a>
			</li>
			<li role="separator" class="divider"></li>
			<li>
				<a href="#">
					<span class="glyphicon glyphicon-folder-open" aria-hiden="true"></span>
					Documento de boogle
				</a>
			</li>
			<li>
				<a href="#">
					<span class="glyphicon glyphicon-folder-open" aria-hiden="true"></span>
					Hoja de calculo de boogle
				</a>
			</li>
		</ul>';
	}

	function btn_superiores($icon){
		echo '<button class="transpariencia dropdown-toggle dere icono_lateral" data-toggle="dropdown" aria-haspopup="true" aria-expanded="iconos1" type="button" ><span class="'.$icon.'" aria-hidden="true"></span></button>';
	}

	function btn_lateral($icono,$texto){
		echo '<tr><td>
		<button class="transpariencia btn_lateral">
			<span class="'.$icono.' izq" aria-hidden="true" style="margin-right: 10px"></span>'.$texto.'
		</button></td></tr>';
	}
	function btn_carpeta_expandible($icono,$nombre, $texto){
		echo '<div class="btn-group" style="margin-left: 15px; width:100%">
		<button class="transpariencia" type="button" data-toggle="collapse" data-target="#'. $nombre .'" aria-expanded="false" aria-controls="'.$nombre.'">
			<span class="glyphicon glyphicon-play izq" aria-hidden="true"></span>
		</button>
		<button class="transpariencia btn_lateral">
			<span class="glyphicon '.$icono.' izq" aria-hidden="true"></span> '.$texto.'
		</button>
	</div>';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mi Unidad - Boogle Drive</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/personalizado.css">
</head>
<body style="background-color: rgba(0,0,0,0.08);">
	<div id="general" style="background-color: #FFF">
		<div class="barra_superior">
			<div class="cabecera row">
				<div class="col-md-2 col-sm-2 cabecera">
					<a href="my-drivle.php" value="Boogle Drive"><img class="titulo" src="img/boogledrive.jpg" ></a>
				</div>
				<div class="col-md-6 cabecera">
					<div class="dropdown buscador">
						<form id="buscador"">
							<button class="transpariencia glyphicon glyphicon-search" aria-hidden="true"></button>
							<input type="text" name="Buscar" id="txt-buscar" class=" transpariencia dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="buscador" placeholder="Buscar en drive" style="width: 88%">
							<button class="transpariencia bm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="buscador" placeholder="Opciones de busqueda">
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu menu_buscador" aria-lablelledby="buscador">
								<li><a href="#">Archivos PDF</a></li>
								<li><a href="#">Documentos de texto</a></li>
								<li><a href="#">Hojas de calculo</a></li>
								<li><a href="#">Presentaciones</a></li>
								<li><a href="#">Fotos e imagenes</a></li>
								<li><a href="#">Videos</a></li>
							</ul>
						</form>
					</div>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-2 cabecera dere">
					<div id="iconos1" class="row dere">
						<div class="row col-md-2 dere">
							<?php btn_superiores("glyphicon glyphicon-user") ?>
							<div class="notificaciones dropdown-menu menu_buscador" style="right: 0">
								Perfil del usuario
							</div>
						</div>
						<div class="row col-md-2 dere">
							<?php btn_superiores("glyphicon glyphicon-bell") ?>
							<div class="dropdown-menu notificaciones menu_buscador" style="right: 0">
								Notificaciones
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="cabecera row">
				<div class="col-md-2">
					<button type="button" value="Nuevo" id="btn_nuevo" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-hapopup="true" aria-expanded="false">
						Nuevo
					</button>
					<?php menu_nuevo() ?>
				</div>
				<div class="col-md-7">
					<div class="btn-group">
						<button type="button" class="transpariencia btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Mi unidad <span class="caret"></span>
						</button>
						<?php menu_nuevo() ?>
					</div>
				</div>
				<div class="col-md-2 dere">
					<div id="iconos1">
						<?php btn_superiores("glyphicon glyphicon-cog") ?>
						<ul class="dropdown-menu">
							<li><a href="#">Configuracion</a></li>
							<li><a href="#">Combinaciones de teclas</a></li>
							<li><a href="#">Ayuda</a></li>
						</ul>
					</div>
					<div>
						<button class="transpariencia icono_lateral dere"><span class="glyphicon glyphicon-info-sign" aria-hiddet="true"></span></button>
					</div>
					<div>
						<button class="transpariencia icono_lateral dere"><span class="glyphicon glyphicon-list" aria-hiddent=true></span></button>
					</div>
					
				</div>
			</div>
		</div>
		<div class="principal">
			<aside class="sidebar">
				<div>
					<div>
						<table class="table-hover">
							<tr>
								<td>
									<div class="btn-group">
										<button class="transpariencia" type="button" data-toggle="collapse" data-target="#Miunidad" aria-expanded="false" aria-controls="Miunidad">
											<span class="glyphicon glyphicon-play izq" aria-hidden="true"></span>
										</button>
										<button class="transpariencia btn_lateral">
											<span class="glyphicon glyphicon-hdd izq" aria-hidden="true"></span> Mi unidad
										</button>
									</div>
									<div id="Miunidad" class="collapse">
										<?php btn_carpeta_expandible("glyphicon-folder-close", "carpeta1", "carpeta 1") ?>
										<div id="carpeta1" class="collapse">
											Contenido de carpeta 1
										</div>

										<?php btn_carpeta_expandible("glyphicon-folder-close" ,"carpeta2", "carpeta 2") ?>
										<div id="carpeta2" class="collapse">
											Contenido de carpeta 2
										</div>

										<?php btn_carpeta_expandible("glyphicon-folder-close", "carpeta3", "carpeta 3") ?>
										<div id="carpeta3" class="collapse">
											Contenido de carpeta 3
										</div>

										<?php btn_carpeta_expandible("glyphicon-folder-close", "carpeta4", "carpeta 4") ?>
										<div id="carpeta4" class="collapse">
											Contenido de carpeta 4
										</div>
									</div>
								</td>
							</div>
						</tr>
						<?php btn_lateral("glyphicon glyphicon-user","Compartido conmigo")	 ?>
						<?php btn_lateral("glyphicon glyphicon-time","Reciente")	 ?>
						<?php btn_lateral("glyphicon glyphicon-picture", "fotos")	 ?>
						<?php btn_lateral("glyphicon glyphicon-star","Destacado")	 ?>
						<?php btn_lateral("glyphicon glyphicon-trash","Papelera")	 ?>
					</table>
				</div>
				<div>
					<hr>
				</div>
				<div>
					<p style="color: rgba(0,0,0,0.4);" data-toggle="popover" title="7 GB de 14 GB utilizados">7 GB de 14 GB utilizados</p>
				</div>
				<div>
					<button class="transpariencia btn_lateral">
						<span class="glyphicon glyphicon-list izq" aria-hidden="true" style="margin-right: 10px"></span>Adquirir mas almacenamiento
					</button>
				</div>
			</div>
		</aside>
	</div>
</div>
<script src="js/jquery-latest.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
