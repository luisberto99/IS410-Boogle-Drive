<?php 
	session_start(); 
	if(!isset($_SESSION['codigo_usuario']))
		header('Location:http://localhost/IS410-Boogle-Drive/entrarUsuario.php');

	include_once("../class/class-conexion.php");
	include "../conexion/funciones.php";
	$conexion = new Conexion();
	$conexion->establecerConexion();

	$fecha=date("y-m-d-h-g-i ");
	$texto=$_POST["texto"];
	$sql = "INSERT INTO tbl_mensaje_chat(codigo_usuario_envia, codigo_usuario_recibe, mensaje, fecha_mensaje) VALUES (".$_SESSION['codigo_usuario'].",2,'$texto','$fecha')";



	$resultadoInsert= $conexion->ejecutarInstruccion($sql);
	 $resultado=array();
      if ($resultadoInsert  === TRUE) {
        $resultado["codigo"]=1;
        $resultado["mensaje"]="Exito, el  registro fue almacenado";
      } else {
        $resultado["codigo"]=0;
        $resultado["mensaje"]="Error: " . $sql ."<br>" . $conexion->getEnlace()->error;
      }
      echo json_encode($resultado);
	
 ?>​