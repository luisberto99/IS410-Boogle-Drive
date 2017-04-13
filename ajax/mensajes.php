<?php 
	include "../conexion/funciones.php";

	$query = "SELECT * FROM mensajes ORDER BY id DESC LIMIT 10";
	$s = mysqli_query($con, $query);
	while ($r = mysqli_fetch_array($s)) {
		?>
		mensaje: <?=$r['texto']?><br>
		<?php
	}
 ?>  