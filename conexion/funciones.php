<?php  
	@session_start();
	@extract($_REQUEST);

	$mysql_host = "localhost";
	$mysql_user = "root";
	$mysql_pass = "";
	$mysql_db = "chat";

	$con = mysqli_connect($mysql_host, $mysql_user,$mysql_pass, $mysql_db);;
	if(!$con){
		echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "Error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "Error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
	}

	function alert($msj)
	{
		?>
		<script >
			alert("<?=$msj?>");
		</script>
		<?php
	}

	function redir($url){
		?>
		<script>
			window.location="<?=$url?>";
		</script>
		<?php
		die();
	}
?>