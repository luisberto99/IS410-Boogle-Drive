<?php 
	include_once("../class/class-conexion.php");
	
	$conexion = new conexion();
	$conexion->establecerConexion();
	$query="SELECT * FROM tbl_mensaje_chat WHERE 1 ";



	
	$s = $conexion->ejecutarInstruccion($query);
	while ($r = $conexion->obtenerRegistro($s)) {
		?>
		mensaje de: <?=$r["codigo_usuario_envia"]." ".$r['mensaje']?><br>
		<?php
	}
 ?>  

