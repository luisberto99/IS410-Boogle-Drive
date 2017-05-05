<?php 
	
	session_start(); 
	if(!isset($_SESSION['codigo_usuario']))
		header('Location:http://localhost/IS410-Boogle-Drive/entrarUsuario.php');
include_once("../class/class-conexion.php");
	
	$conexion = new conexion();
	$conexion->establecerConexion();
	$query="SELECT a.nombre, b.mensaje FROM tbl_usuarios a INNER JOIN tbl_mensaje_chat b ON (a.codigo_usuario=b.codigo_usuario_envia)";



	
	$s = $conexion->ejecutarInstruccion($query);
	while ($r = $conexion->obtenerRegistro($s)) {
		?>
		mensaje de: <?=$r["nombre"]." ".$r['mensaje']?><br>
		<?php
	}
 ?>  

