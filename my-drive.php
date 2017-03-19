<!DOCTYPE html>
<html>
<head>
	<title>Mi Unidad - Boogle Drive</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/personalizado.css">
</head>
<body>
	<div id="General" class="container-fluid">
		<div class="row cabecera">
			<div class="col-md-2 col-sm-2 cabecera">
				<a href="my-drive.php" value="Boogle Drive" class="textos"><label class="titulo">Boogle Drive</label></a>
			</div>
			<div class="col-md-6 cabecera">
			<div class="row dropdown buscador">
				<form id="buscador"">
						<button class="transpariencia glyphicon glyphicon-search" aria-hidden="true"></button>
						<input type="text" name="Buscar" id="txt-buscar" class=" transpariencia dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="buscador" placeholder="Buscar en drive">
						<button class="transpariencia bm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="buscador" placeholder="Opciones de busqueda">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu menu_buscador" aria-lablelledby="buscador">
							<li><a href="#">opci</a></li>
							<li><a href="#">asdfa</a></li>
						</ul>
						</form>
				</div>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-2 cabecera">
				<div class="row">
					<button class="transpariencia btn_lateral" type="button"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span></button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<input type="button" name="btn-Nuevo" value="Nuevo" class="btn btn-primary">
			</div>
			<div class="col-md-8">
				<div class="btn-group">
					<button type="button" class=" btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Mi unidad <span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
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
					</ul>
				</div>
			</div>
			<div class="col-md-2">
				<input type="button" name="btn1" value="bu">
				<input type="button" name="btn2" value="bu">
				<input type="button" name="btn3" value="bu">
			</div>
		</div>
		<div class="row">

			<div class="col-sm-4">

			</div>
			<div class="col-sm-8">
				
			</div>
		</div>
	</div>

	<script src="js/jquery-latest.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>