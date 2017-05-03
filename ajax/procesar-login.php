<?php
include ("../class/class-conexion.php");
     $conexion = new Conexion();
     $conexion->establecerConexion();
     //$_GET["accion"]=1;
    switch ($_GET["accion"]) {
      case '1':
     $contrasena = $_POST["contrasena"];
     $contrasenaencrip=sha1($contrasena);
     $correo = $_POST["correo"];

     $sql = sprintf("SELECT codigo_usuario FROM tbl_usuarios
      WHERE email='%s'
       AND clave='%s'",
          $conexion->getEnlace()->real_escape_string(stripslashes($correo)),
          $conexion->getEnlace()->real_escape_string(stripslashes($contrasenaencrip))
      );
     $consulta = $conexion->ejecutarInstruccion($sql);
     
      $respuesta=array();
      if($conexion->cantidadRegistros($consulta) >0){
          $fila = $conexion->obtenerRegistro($consulta);
          $respuesta["codigo"] = 1;
          $respuesta["mensaje"] = "login successful";
        }
        else {
          $respuesta["codigo"] = 0;
          $respuesta["mensaje"] = "Contraseña o Correo incorrecto";
        }
      
      echo json_encode($respuesta);
        break;
      
      default:
        # code...
        break;
    }
     


?>