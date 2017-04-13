<?php 
	
	include "../conexion/funciones.php";
	$quety = "INSERT INTO `mensajes` (`id`, `texto`) VALUES (NULL, '".$texto."');";
	mysqli_query($con , $quety);
	
 ?>