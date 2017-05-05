<?php  include_once("metodosCuadricula.php"); 

session_start(); 
 if(!isset($_SESSION['codigo_usuario']))
    header('Location:http://localhost/IS410-Boogle-Drive/entrarUsuario.php');
include_once("../class/class-conexion.php");
include_once("metodosCuadricula.php");
$conexion = new Conexion();
$conexion->establecerConexion();

$sql = "SELECT codigo_carpeta, codigo_usuario, codigo_archivo, fecha_registo FROM tbl_favoritos WHERE codigo_usuario =".$_SESSION['codigo_usuario'];
$favoritos = $conexion->ejecutarInstruccion($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/personalizado.css">
</head>
<body style="background-color: #EEE">
	<div class="principal">
		<div>
			<button class="transpariencia dere ordenElementos"><strong><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></strong></button>
			<button class="transpariencia dere ordenElementos"><strong>Nombre</strong></button>
		</div>
		<div id="div-carpetas">


	</div>

</div>
</div>
</body>
</html>