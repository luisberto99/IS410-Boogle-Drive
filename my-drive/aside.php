<?php  
function btn_carpeta_expandible($icono,$nombre, $texto,$id){
		echo '<div class="btn-group" style="margin-left: 15px; width:100%">
		<button class="transpariencia" type="button" data-toggle="collapse" data-target="#'. $nombre .'" aria-expanded="false" aria-controls="'.$nombre.'">
			<span id="'.$id.'" onclick="iconos(\'#'.$id.'\')" class="glyphicon glyphicon-triangle-right izq" aria-hidden="true"></span>
		</button>
		<button class="transpariencia btn_lateral">
			<span class="glyphicon '.$icono.' izq" aria-hidden="true"></span> '.$texto.'
		</button>
	</div>';
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
	
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/personalizado.css">
</head>
<body style="background-color: #EEE">
<aside style="width: 90%">
				<div>
					<div>
						<table id="tabla-lateral" class="table-hover">
							<tr>
								<td>
									<div class="btn-group">
										<button class="transpariencia" type="button" data-toggle="collapse" data-target="#Miunidad" aria-expanded="false" aria-controls="Miunidad">
											<span id="carpetaMiUnidad" class="glyphicon glyphicon-triangle-right izq" onclick="iconos('#carpetaMiUnidad')" aria-hidden="true"></span>
										</button>
										<button class="transpariencia btn_lateral">
											<span class="glyphicon glyphicon-hdd izq" aria-hidden="true"></span> Mi unidad
										</button>
									</div>
									<div id="Miunidad" class="collapse">
										<?php btn_carpeta_expandible("glyphicon-folder-close", "carpeta1", "carpeta 1","carp1") ?>
										<div id="carpeta1" class="collapse">
											Contenido de carpeta 1
										</div>

										<?php btn_carpeta_expandible("glyphicon-folder-close" ,"carpeta2", "carpeta 2","carp2") ?>
										<div id="carpeta2" class="collapse">
											Contenido de carpeta 2
										</div>

										<?php btn_carpeta_expandible("glyphicon-folder-close", "carpeta3", "carpeta 3","carp3") ?>
										<div id="carpeta3" class="collapse">
											Contenido de carpeta 3
										</div>

										<?php btn_carpeta_expandible("glyphicon-folder-close", "carpeta4", "carpeta 4","carp4") ?>
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
					<a href="../almacenamiento.php" class="transpariencia btn_lateral">
						<span class="glyphicon glyphicon-list izq" aria-hidden="true" style="margin-right: 10px"></span>Adquirir mas almacenamiento
					</a>
				</div>
			</div>
		</aside>

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