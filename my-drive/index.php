		<?php
       session_start(); 
	if(!isset($_SESSION['codigo_usuario']))
		header('Location:http://localhost/IS410-Boogle-Drive/entrarUsuario.php');

    
	include_once("../class/class-conexion.php");
	$conexion = new Conexion();
	$conexion->establecerConexion();

    $resultadoUsuario=$conexion->ejecutarInstruccion("SELECT * FROM tbl_usuarios WHERE codigo_usuario=".$_SESSION["codigo_usuario"]."");
    $resultadoUsuario2=$conexion->ejecutarInstruccion("SELECT * FROM tbl_usuarios WHERE codigo_usuario=".$_SESSION["codigo_usuario"]."");

   

		function menu_nuevo(){
			echo '<ul class="dropdown-menu">
			<li>
				<a href="#" id="agregarCarpeta">
					<span class="glyphicon glyphicon-folder-open" aria-hiden="true">
					</span>
					Carpeta nueva...
				</a>
			</li>
			<li role="separator" class="divider"></li>
			<li>
				<a href="#" onclick="subirArchivo()">
					<span class="glyphicon glyphicon-folder-open" aria-hiden="true"></span>
					Subir Archivos...
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

	function btn_carpeta_expandible($icono,$nombre,$id){
		echo '<div class="btn-group" style="margin-left: 15px; width:100%">
		<button class="transpariencia" type="button" data-toggle="collapse" data-target="#carpeta_'. $id .'" aria-expanded="false" aria-controls="carpeta_'. $id .'">
			<span id="'.$id.'" onclick="iconos(\'#'.$id.'\')" class="glyphicon glyphicon-triangle-right izq" aria-hidden="true"></span>
		</button>
		<button class="transpariencia btn_lateral">
			<span class="glyphicon '.$icono.' izq" aria-hidden="true"></span>'.$nombre.'
		</button>
	</div>';
}
function btn_lateral($icono,$texto,$archivo){
	echo '<tr><td>
	<button class="transpariencia btn_lateral" onclick="contenidos(\''.$archivo.'\')">
		<span class="'.$icono.' izq" aria-hidden="true" style="margin-right: 10px"></span>'.$texto.'
	</button></td></tr>';
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Mi Unidad - Boogle Drive</title>
	<link rel="icon" href="img/logo.ico" type="image/x-icon">
	<meta charset="ISO-8">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/personalizado.css">

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="facivon.ico">



</head>
<body style="background-color: #EEE;">
	<div id="general" style="background-color: #FFF; position: relative;">
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
							<div class="dropdown-menu menu_buscador perfilUsuario" style="right: 0; border: 0; margin: 0">
								<div style="height: 70%; margin: 0">
									<div class="col-md-3" id="fotoo">
									<?php if($conexion->cantidadRegistros($resultadoUsuario2) >0) {
											$fila = $conexion->obtenerRegistro($resultadoUsuario2);
											echo '<img src='.$fila["fotografia"].' class="configuracionNotificaciones" width="100" height="100" style="border-radius: 50%">';
										}  ?>
										
									</div>
									<div class="col-md-7" >
										<br>
										<?php if($conexion->cantidadRegistros($resultadoUsuario) >0) {
											$fila = $conexion->obtenerRegistro($resultadoUsuario);
											echo '<strong>'.$fila["nombre"]." ".$fila["apellido"].'</strong><br>'.
											      '<small>'.$fila["email"].'</small>';
										}  ?>
										<a href="https://myaccount.google.com/intro" target="_blank"><button class="btn btn-primary" type="button">Mi cuenta</button></a>

									</div>
								</div>
								<div class="perfilUsuarioInferior" style="margin: 0">
									<button class="btn izq" type="button">Añadir cuenta</button>
									<button id="fotoperfil" class="btn centro" style="margin-left: 11px">Foto Perfil</button>
									<a href="../cerrarSesion.php"><button class="btn dere" type="button">Cerrar sesion</button></a>
								</div>

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
			<div data-togge="sidebar" id="menu_lateral" class="sidebar overflowSidebar col-md-2 col-sm-2 col-xs-4 col-lg-2" style="height: 480px;">
				<aside id="aside" style="width: 90%">
					<div>
						<div>
							<table id="tabla-lateral" class="table-hover">
								<tr>
									<td>
										<div class="btn-group">
											<button class="transpariencia" type="button" data-toggle="collapse" data-target="#Miunidad" aria-expanded="false" aria-controls="Miunidad">
												<span id="carpetaMiUnidad" class="glyphicon glyphicon-triangle-right izq" onclick="overflow('#carpetaMiUnidad')" aria-hidden="true"></span>
											</button>
											<button class="transpariencia btn_lateral" onclick="contenidos('Mi-unidad.php')">
												<span class="glyphicon glyphicon-hdd izq" aria-hidden="true"></span> Mi unidad
											</button>
										</div>
										<div id="Miunidad" class="collapse">
											<?php 

											 $sql ="SELECT codigo_carpeta, codigo_usuario, codigo_carpeta_padre, nombre_carpeta FROM tbl_carpetas WHERE codigo_usuario = ".$_SESSION['codigo_usuario']." AND codigo_carpeta_padre IS NULL";

												$carpetas = $conexion->ejecutarInstruccion($sql);
												while ($fila = $conexion->obtenerRegistro($carpetas)) {
													btn_carpeta_expandible("glyphicon-folder-close", utf8_encode($fila["nombre_carpeta"]) ,utf8_encode($fila["codigo_carpeta"]));
													echo '<div id="carpeta_'.$fila["codigo_carpeta"].'" class="collapse">
														</div>';
												}
												 ?>
										</div>
									</td>
								</div>
							</tr>
							<?php btn_lateral("glyphicon glyphicon-user","Compartido conmigo","compartido.php")	 ?>
							<?php btn_lateral("glyphicon glyphicon-time","Reciente","reciente.php")	 ?>
							<?php btn_lateral("glyphicon glyphicon-picture", "fotos","fotos.php")	 ?>
							<?php btn_lateral("glyphicon glyphicon-star","Destacado","destacado.php")	 ?>
							<?php btn_lateral("glyphicon glyphicon-trash","Papelera","papelera.php")	 ?>
						</table>
					</div>
					<div>
						<hr>
					</div>
					<div>
						<p style="color: rgba(0,0,0,0.4);" data-toggle="popover" data-html="true"  data-trigger="hover" data-placement="top"  title="7 GB de 14 GB utilizados" data-content="
						<table class='pop' >
							<tr>
								<td><img src='../img/drive.png' width='20' height='20'></td>
								<td >Drive</td>
								<td id='c'>76MB</td>
							</tr>
							<tr>
								<td><img src='../img/gmail.png' width='20' height='20'></td>
								<td  >Gmail</td>
								<td id='c'>345MB</td>
							</tr>
							<tr>
								<td><img src='../img/fotos.png' width='20' height='20'></td>
								<td >Google Fotos</td>
								<td id='c'>32MB</td>
							</tr>
						</table>




						">7 GB de 14 GB utilizados</p>


					</div>
					<div>
						<a target="blank" href="almacenamiento.php" class="transpariencia btn_lateral">
							<span class="glyphicon glyphicon-list izq" aria-hidden="true" style="margin-right: 10px"></span>Adquirir mas almacenamiento
						</a>
					</div>
				</div>
			</aside>
		</div>
		<div class="col-md-10 col-sm-10 col-lg-10 col-xs-8" style="height: 480px">
			<iframe src="Mi-unidad.php" id="explorador" class="transpariencia frame"></iframe>
		</div>

		<div style="background-color: #EEE">
			<div id="chat" class="ventanaChat mostrarChat">
				<center>
			 	<div id="chat">
			 		<div id="conversacion">
			 			
			 		</div>
			 		<div id="mensaje">
			 			<input type="text" id="mensajeEnviar" onkeyup="verificar(event);" placeholder="Escribe tu mensaje">
			 		</div>
			 	</div>
			 </center>
			</div>
			<button id="btn_chat" type="button" onclick="chat();" class="dere chat">Chat</button>
			

		</div>
		

		<div style="background-color: #EEE">
			<div id="amigos" class="ventanaAmigos mostrarAmigos">
				<center>
				<div class="col-lg-12">
			 	<?php
		          $query="SELECT a.codigo_usuario, a.nombre, a.apellido, a.email FROM tbl_usuarios a INNER JOIN tbl_amigos b ON (a.codigo_usuario = b.codigo_usuario_amigo) WHERE b.codigo_usuario = 1";

              $s = $conexion->ejecutarInstruccion($query);
	          while ($r = $conexion->obtenerRegistro($s)) {
	          	
	          	echo   '<div class="well col-lg-4"  ">'.
                        $r["nombre"]." ".$r["apellido"].'<br>'.
                        '</div>';
          
          	          }
	          	        ?>
			 </center>
			 </div>
			</div>
			<button id="btn-amigos" style="margin-right: 10px" type="button" onclick="amigos();"  class="dere">Amigos</button>
			

		</div>
	
	</div>
</div>

<!-- SUBIR ARCHIVOS -->
<form id="subirArchivo" style="display: none;" enctype="multipart/form-data">
<input type="file" name="subir" id="subir">
</form>

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

<div class="modal fade" tabindex="-1" role="dialog" id="imagen">
              <div class="modal-dialog" role="document"  style="width:900px" style="height: 800px">
                <div class="modal-content">
                  
                  <div class="modal-body">
                      
                <form method="post" id="formulario" enctype="multipart/form-data">
                <div class="well">
                <center>
                  <table>
                  	<tr>
                  		<td><h3>Cambiar foto de Perfil</h3></td>
                  	</tr>
                  	<tr>
                  		<td>
                  			<label>Subir imagen:</label>
                  			<input type="file" name="file"> 
                  		</td>
                  	</tr>
                  </table>
                  </center>
                   </div>
                </form>
                 <div id="respuesta"></div>         
                            
                  </div>

                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->

              
          </div><!-- /.modal -->


<!-- MODARL AGREGAR CARPETA-->

<!-- Modal -->
<div class="modal fade" id="NuevaCarpeta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva carpeta</h4>
      </div>
      <div class="modal-body">
        <input class="form-control" placeholder="Nombre de la carpeta." type="text" id="nombreCarpetaNueva" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btn_crearCarpeta" class="btn btn-primary">Crear carpeta</button>
      </div>
    </div>
  </div>
</div>
<!-- /.modal -->
<input type="hidden" id="carpetaAbierta">
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="../js/jquery.min.js"></script>	
<script src="../js/bootstrap.min.js"></script>
<script src="../js/my-drive.js"></script>
<script src="../js/chat.js"></script>
<script src="../js/funciones_archivos.js"></script>
<script src="../js/imagenes.js"></script>
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
