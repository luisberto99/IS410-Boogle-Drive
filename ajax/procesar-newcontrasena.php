<?php
     include ("../class/class-conexion.php");
     $conexion = new Conexion();
     $conexion->establecerConexion();
     //$_GET["accion"]=2;
    switch ($_GET["accion"]) {
      case '1':
     $correo = $_POST["correo"];
     $codigo1 = $_POST["codigop1"];
     $codigo2 = $_POST["codigop2"];
     $respuesta1 = $_POST["respuesta1"];
     $respuesta2 = $_POST["respuesta2"];
     
     $sql = sprintf(
          "SELECT a.codigo_usuario, b.codigo_pregunta, b.respuesta FROM tbl_usuarios a JOIN tbl_respuestas b ON (a.codigo_usuario=b.codigo_usuario) WHERE a.email='%s'",
          $conexion->getEnlace()->real_escape_string(stripslashes($correo))
      );
     $resultadoConsulta = $conexion->ejecutarInstruccion($sql);
     
      $resultado=array();

     $contador=1;
     $contador2=0;
     $contador3=0;
     while ($fila=$conexion->obtenerRegistro($resultadoConsulta)) {
         $contador3++;
          if ($fila["codigo_pregunta"]==${"codigo".$contador} && $fila["respuesta"]==${"respuesta".$contador} ) {
            $codigo_usuario=$fila["codigo_usuario"];
            $contador2++;
          }else{
           
          }
        $contador++;
      }
      if ($contador2==2) {
          $resultado["codigo_usuario"]=$codigo_usuario;
          $resultado["codigo"]=1;
          $resultado["mensaje"]="Registro encontrado";
      }else{
        $resultado["codigo"]=0;
        $resultado["mensaje"]="Las preguntas o respuestas no concuerdan";
      }
      if ($contador3==0) {
        $resultado["codigo"]=0;
        $resultado["mensaje"]="El correo ingresado no pertence a ninguna cuenta";
      }
      echo json_encode($resultado);
        break;
        case '2':
          $codigo=$_POST["codigo"];
          $contrasena = $_POST["contrasena"];
     
     $sql = sprintf("UPDATE tbl_usuarios 
                     SET clave = sha1('%s')                       
                     WHERE codigo_usuario= '%s'",
          $conexion->getEnlace()->real_escape_string(stripslashes($contrasena)),
          $conexion->getEnlace()->real_escape_string(stripslashes($codigo))
      );
     $resultadoUpdate = $conexion->ejecutarInstruccion($sql);
      $resultado=array();
      if ($resultadoUpdate === TRUE) {
        $resultado["codigo"]=1;
        $resultado["mensaje"]="Exito, la clave fue cambiada";
      } 
      echo json_encode($resultado);
          break;
      
      default:
        # code...
        break;
    }
     
?>
