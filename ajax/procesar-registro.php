<?php
      include("../class/class-usuario.php");
                           
  
      $resultado=array();
      if ( $_POST["txt-contraseña"] != $_POST["txt-confirContraseña"]){
            $resultado["mensaje"]="Las contraseñas no coinciden.";
            $resultado["codigo_resultado"]=0;
            echo json_encode($resultado);
            exit;
      }
      if (($_POST["txt-nombre"] || $_POST["txt-usuario"] || $_POST["txt-apellido"] || $_POST["txt-correo"] || $_POST["txt-contraseña"]
            || $_POST["txt-confirContraseña"] || $_POST["data-fechaNacimento"] || $_POST["txt-telefono"] || $_POST["cmb-ubicacion"])=="") {
            $resultado["mensaje"]="Debes llenar todos los campos.";
            $resultado["codigo_resultado"]=2;
            echo json_encode($resultado);
            exit;
      }
      if ($_POST["rbt-genero"]=="undefined") {
          $resultado["mensaje"]="Debes llenar todos los campos.";
          $resultado["codigo_resultado"]=2;  
          echo json_encode($resultado);
          exit; 
        }
      $u = new Usuario($_POST["txt-nombre"],
                       $_POST["txt-apellido"],
                       $_POST["txt-usuario"],
                       $_POST["txt-correo"],
                       $_POST["txt-contraseña"],
                       $_POST["txt-confirContraseña"],
                       $_POST["data-fechaNacimento"],
                       $_POST["txt-telefono"],
                       $_POST["cmb-ubicacion"],
                       $_POST["rbt-genero"]
         );
      $u->guardarRegistro();
      $resultado["mensaje"]="Te haz registrado";
      $resultado["codigo_resultado"]=1;
      echo json_encode($resultado);
?>
