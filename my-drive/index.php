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
		echo '<button class="transpariencia dropdown-toggle dere icono_lateral" data-toggle="dropdown" aria-haspopup="true" aria-expanded="iconos1" type="button" ><span class="'.$icon.'" style="font-size:20px" aria-hidden="true"></span></button>';
	}

	function btn_lateral($icono,$texto){
		echo '<tr><td>
		<button class="transpariencia btn_lateral">
			<span class="'.$icono.' izq" aria-hidden="true" style="margin-right: 10px"></span>'.$texto.'
		</button></td></tr>';
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mi Unidad - Boogle Drive</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/personalizado.css">
</head>
<body style="background-color: #EEE;">
	<div id="general" style="background-color: #FFF">
		<div class="barra_superior">
			<div class="cabecera row" style="margin-right: 1px;">
				<div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 cabecera">
					<a href="index.php" value="Boogle Drive"><img class="titulo" src="../img/boogledrive.jpg" ></a>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 cabecera">
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
				<div class="col-md-1 col-sm-1 col-lg-1 col-xs-1"></div>
				<div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 cabecera dere">
					<div id="iconos1" class="row dere">
						<div class="row col-md-2 col-sm-2 col-lg-2 col-xs-2 dere">
							<?php btn_superiores("glyphicon glyphicon-user") ?>
							<div class="dropdown-menu menu_buscador" style="right: 0">
								Perfil del usuario
							</div>
						</div>
						<div class="row col-md-2 col-sm-2 col-lg-2 col-xs-2 dere">
							<?php btn_superiores("glyphicon glyphicon-bell") ?>
							<div class="dropdown-menu notificaciones menu_buscador " style="right: 0">
							<div>
								<button class="configuracionNotificaciones transpariencia">
									<span class="glyphicon glyphicon-cog " aria-hidden="true"></span>
								</button>
								<span class="configuracionNotificaciones">Google</span><br>
							</div>
							<div align="center">
							<br>
							<br>
							<br>
							<br>
							<br>
							Has leído todas las notificaciones.
							</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="cabecera row" style="margin-right: 1px;">
				<div class="col-md-2 col-sm-2 col-lg-2 col-xs-2">
					<button type="button" value="Nuevo" id="btn_nuevo" class="botton2 dropdown-toggle" data-toggle="dropdown" aria-hapopup="true" aria-expanded="false">
						NUEVO
					</button>
					<?php menu_nuevo() ?>
				</div>
				<div class="col-md-7 col-sm-7 col-lg-7 col-xs-7">
					<div class="btn-group">
						<button type="button" class="transpariencia btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Mi unidad <span class="caret"></span>
						</button>
						<?php menu_nuevo() ?>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 dere">
					<div id="iconos1" >
						<?php btn_superiores("glyphicon glyphicon-cog") ?>
						<ul class="dropdown-menu" style="width: 235px;height: 130px;">
							<li><a href="#" class="transpariencia" data-toggle="modal" data-target="#modal-configuarion">Configuración</a></li>
							<li><a href="https://g.co/getdrive" target="_blank">Descargar Drive</a></li>
							<li><a href="#">Combinaciones de teclas</a></li>
							<li><a href="#">Ayuda</a></li>
						</ul>
					</div>
					<div>
						<button class="transpariencia icono_lateral dere"><span class="glyphicon glyphicon-info-sign" aria-hiddet="true" style="font-size:20px"></span></button>
					</div>
					<div >
						<button class="transpariencia icono_lateral dere"><span class="glyphicon glyphicon-list" aria-hiddent="true" style="font-size:14px"></span></button>
					</div>
					
				</div>
			</div>
		</div>
		<div id="principal" >
			<div data-togge="sidebar" class="sidebar col-md-2 col-sm-2 col-xs-2 col-lg-2" style="height: 480px;">
			<iframe src="aside.php" class="transpariencia frame"></iframe>
			</div>
		<div class="col-md-10 col-sm-10 col-lg-10 col-xs-10" style="height: 480px">
			<iframe src="vacio.php" class="transpariencia frame"></iframe>
		</div>
	</div>
</div>

<!-- DIV MODAL DE CONFIGURACION  -->
<div class="modal fade" id="modal-configuarion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-sizee" role="document">
    <div class="modal-content ">
      <div class="modal-header modalConfiguracionTitulo">
		<label class="modal-title">Configuracion</label>
      	<button type="button" class="botton dere" data-dismiss="modal">LISTO</button>
      </div>
      <div class="modalbod">
        <div class="col-lg-2">
        <table  style="margin-top: 20px;">
        <tr>
           
             <td onclick="ifra(1)" class="link">
               <a href="#"><p><strong>General</strong></p></a>
        	 </td>
        	
        </tr>
        <tr>
        	<td onclick="ifra(2)" class="link">
        		<a href="#"><p><strong>Notificaciones</strong></p></a>
        	</td>
        </tr>
        <tr>
        	<td onclick="ifra(3)" class="link">
        		<a href="#"><p><strong>Administrar Aplicaciones</strong></p></a>
        	</td>
        </tr>
        
        </table> 
       </div>
        <div class="col-lg-10 " id="ifra">
          <iframe id="contenido2" name="principal" src="../configuraciones/general.php" ></iframe>
        </div>
      </div>
    </div>
  </div>
</div>




	<script src="../js/jquery.min.js"></script>	
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/my-drive.js"></script>
	<script type="text/javascript">
		 $(function () {
    $('[data-toggle="popover"]').popover();
      });
		 $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

	</script>
</body>
</html>
