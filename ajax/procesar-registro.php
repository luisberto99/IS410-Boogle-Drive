<?php
     include ("../class/class-conexion.php");
     $conexion = new Conexion();
     $conexion->establecerConexion();
    
     $fecharegistro=date("y/m/d");
     $nombre = $_POST["nombre"];
     $apellido = $_POST["apellido"];
     $usuario = $_POST["usuario"];
     $contrasena = $_POST["contrasena"];
     $contrasenaencrip=sha1($contrasena);
     $correo = $_POST["correo"];
     $fechaNacimiento = $_POST["fechaNacimiento"];
     $telefono = $_POST["telefono"];
     $ubicacion = $_POST["ubicacion"];
     $codigo1 = $_POST["codigop1"];
     $codigo2 = $_POST["codigop2"];
     $respuesta1 = $_POST["respuesta1"];
     $respuesta2 = $_POST["respuesta2"];
     $genero = $_POST["genero"];
     
     $sql = sprintf(
          "INSERT INTO tbl_usuarios(codigo_plan, codigo_lugar_residencia, genero, nombre, apellido, email, fecha_registro, fecha_nacimiento, alias, clave, telefono)
           VALUES (
            '%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s'
          )",
          $conexion->getEnlace()->real_escape_string(stripslashes("1")),
          $conexion->getEnlace()->real_escape_string(stripslashes($ubicacion)),
          $conexion->getEnlace()->real_escape_string(stripslashes($genero)),
          $conexion->getEnlace()->real_escape_string(stripslashes($nombre)),
          $conexion->getEnlace()->real_escape_string(stripslashes($apellido)),
          $conexion->getEnlace()->real_escape_string(stripslashes($correo)),
          $conexion->getEnlace()->real_escape_string(stripslashes($fecharegistro)),
          $conexion->getEnlace()->real_escape_string(stripslashes($fechaNacimiento)),
          $conexion->getEnlace()->real_escape_string(stripslashes($usuario)),
          $conexion->getEnlace()->real_escape_string(stripslashes($contrasenaencrip)),
          $conexion->getEnlace()->real_escape_string(stripslashes($telefono))
      );
     $resultadoInsert = $conexion->ejecutarInstruccion($sql);
      $resultado=array();
      if ($resultadoInsert === TRUE) {
        $resultado["codigo"]=1;
        $resultado["mensaje"]="Exito, el  registro fue almacenado";
      } else {
        $resultado["codigo"]=0;
        $resultado["mensaje"]="Error: " . $sql . "<br>" . $conexion->getEnlace()->error;
      }
      echo json_encode($resultado);
?>
