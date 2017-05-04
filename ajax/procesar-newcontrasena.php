<?php
     include ("../class/class-conexion.php");
     $conexion = new Conexion();
     $conexion->establecerConexion();
     //$_GET["accion"]=1;
    switch ($_GET["accion"]) {
      case '1':
     $correo = $_POST["correo"];
     //$codigo1 = $_POST["codigop1"];
     //$codigo2 = $_POST["codigop2"];
     //$respuesta1 = $_POST["respuesta1"];
     //$respuesta2 = $_POST["respuesta2"];
     
     $sql = sprintf(
          "SELECT a.codigo_usuario FROM tbl_usuarios a  WHERE a.email='%s'",
          $conexion->getEnlace()->real_escape_string(stripslashes($correo))
      );
     $resultadoConsulta = $conexion->ejecutarInstruccion($sql);
     
      $resultado=array();
     if ($fila=$conexion->cantidadRegistros($resultadoConsulta)>0) {
         $fila=$conexion->obtenerRegistro($resultadoConsulta);
         $resultado["codigo_usuario"]=$fila["codigo_usuario"];
         $resultado["codigo"]=1;
         
          $sql = sprintf("SELECT b.codigo_pregunta, b.pregunta FROM tbl_respuestas a JOIN tbl_preguntas b ON (a.codigo_pregunta=b.codigo_pregunta) WHERE a.codigo_usuario='%s'",                          
                       $conexion->getEnlace()->real_escape_string(stripslashes($fila["codigo_usuario"])));
                      $resultadoPreguntas2 = $conexion->ejecutarInstruccion($sql);
                                     $contador=1;
                                      while ($fila=$conexion->obtenerRegistro($resultadoPreguntas2)) {
                                             ${"respuestaa".$contador}=$fila["codigo_pregunta"];
                                             ${"codigoo".$contador}=$fila["pregunta"];
                                             $contador++;
                                      }
                                       $resultado["value0"]='<option value="0">--Seleccione--</option>';
                                       $resultado["value1"]='<option value='.$respuestaa1.'>'.utf8_encode($codigoo1).'</option>';
                                       $resultado["value2"]='<option value='.$respuestaa2.'>'.utf8_encode($codigoo2).'</option>';
                                     



      }else{
         $resultado["codigo"]=0;
         $resultado["mensaje"]="El correo no esta asociado a ninguna cuenta.";
      }
     
      echo json_encode($resultado);
        break;
        
      case '2':
        $codigo = $_POST["codigo"];
     $codigo1 = $_POST["codigop1"];
     $codigo2 = $_POST["codigop2"];
     $respuesta1 = $_POST["respuesta1"];
     $respuesta2 = $_POST["respuesta2"];
     
     $sql = sprintf(
          "SELECT a.codigo_usuario, b.codigo_pregunta, b.respuesta FROM tbl_usuarios a JOIN tbl_respuestas b ON (a.codigo_usuario=b.codigo_usuario) WHERE a.codigo_usuario='%s'",
          $conexion->getEnlace()->real_escape_string(stripslashes($codigo))
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

        case '3':
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
        case '4':
          
        

          break;
      default:
        

        break;
    }
     
?>
