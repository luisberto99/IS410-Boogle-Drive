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
	echo '<button class="transpariencia icono_lateral dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="button" ><span class="'.$icon.'" aria-hidden="true"></span></button>';
}

function btn_lateral($icono,$texto){
	echo '<tr><td>
	<button class="transpariencia btn_lateral">
	<span class="'.$icono.' izq" aria-hidden="true" style="margin-right: 10px"></span>
	<label class="izq">'.$texto.'</label>
</button></td></tr>';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mi Unidad - Boogle Drive</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/personalizado.css">
</head>
<body>
	<div id="General" class="barra_superior">
		<div class="row cabecera">
			<div class="col-md-2 col-sm-2 cabecera">
				<a href="my-drive.php" value="Boogle Drive"><img class="titulo" src="img/boogledrive.jpg" ></a>
			</div>
			<div class="col-md-6 cabecera">
				<div class="row dropdown buscador">
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
						<?php btn_superiores("glyphicon glyphicon-bell") ?>
						<div class="dropdown-menu notificaciones menu_buscador">
							Notificaciones
						</div>
					</div>
					<div class="row col-md-2 dere">
						<?php btn_superiores("glyphicon glyphicon-user") ?>
						<div class="notificaciones dropdown-menu menu_buscador">
							Perfil del usuario
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<button type="button" value="Nuevo" id="btn_nuevo" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-hapopup="true" aria-expanded="false">
					Nuevo
				</button>
				<?php menu_nuevo() ?>
			</div>
			<div class="col-md-8">
				<div class="btn-group">
					<button type="button" class="transpariencia btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Mi unidad <span class="caret"></span>
					</button>
					<?php menu_nuevo() ?>
				</div>
			</div>
			<div class="col-md-2 dere">
				<button class="transpariencia icono_lateral"><span class="glyphicon glyphicon-list" aria-hiddent=true></span></button>
				<button class="transpariencia icono_lateral"><span class="glyphicon glyphicon-info-sign" aria-hiddet="true"></span></button>
				<?php btn_superiores("glyphicon glyphicon-cog") ?>
			</div>
		</div>
		<div class="principal">
			<nav class="col-md-2 sidebar" >
				<div>
					<div>
					<table class="table-hover">
						<tr>
							<td><button class="transpariencia btn_lateral">
							<span class="glyphicon glyphicon-play izq" aria-hidden="true"></span>
							<span class="glyphicon glyphicon-hdd izq" aria-hidden="true"></span>
							<label class="izq">Mi unidad</label>
						</button></td>
						</tr>
						<?php btn_lateral("glyphicon glyphicon-user","Compartido conmigo")	 ?>
						<?php btn_lateral("glyphicon glyphicon-time","Reciente")	 ?>
						<?php btn_lateral("glyphicon glyphicon-picture","Fotos")	 ?>
						<?php btn_lateral("glyphicon glyphicon-star","Destacado")	 ?>
						<?php btn_lateral("glyphicon glyphicon-trash","Papelera")	 ?>
					</table>
					</div>
				</div>
				<div class="col-md-2">
				</div>
			</nav>
		</div>
	</div>

	<script src="js/jquery-latest.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>
