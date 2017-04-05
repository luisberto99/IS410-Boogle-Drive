<?php
      include("../class/class-usuario.php");
      $resultado=array();
      if ( $_POST["txt-contrasena"] != $_POST["txt-confirmacion-contrasena"]){
            $resultado["mensaje"]="Las contraseñas no coinciden.";
            $resultado["codigo_resultado"]=0;
            echo json_encode($resultado);
            exit;
      }
      $u = new Usuario($_POST["txt-nombre"],
                  $_POST["txt-apellido"],
                  $_POST["txt-nombreUsuario"],
                  $_POST["txt-correo"],
                  $_POST["txt-contrasena"],  
                  $_POST["txt-confirmacion-contrasena"],
                  $_POST["txt-fecha-nacimiento"],
                  $_POST["txt-telefono"],
                  $_POST["slc-pais"],
                  $_POST["rbt-genero"]
         );
      $u->guardarRegistro();
      $resultado["mensaje"]="Te haz registrado";
      $resultado["codigo_resultado"]=1;
      echo json_encode($resultado);
?>
