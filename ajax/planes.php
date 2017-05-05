<?php
session_start();
include ("../class/class-conexion.php");
     $conexion = new Conexion();
     $conexion->establecerConexion();
     
    switch ($_GET["accion"]) {
      case '1':
     $codigo = $_POST["codigo"];
     

     $sql2 = sprintf("SELECT codigo_plan FROM tbl_usuarios WHERE codigo_usuario='%s'",
          $conexion->getEnlace()->real_escape_string(stripslashes($_SESSION["codigo_usuario"]))
      );
     $resultadoconsulta = $conexion->ejecutarInstruccion($sql2);
     
     $sql = sprintf("UPDATE tbl_usuarios SET codigo_plan='%s' WHERE codigo_usuario='%s'",
          $conexion->getEnlace()->real_escape_string(stripslashes($codigo)),
          $conexion->getEnlace()->real_escape_string(stripslashes($_SESSION["codigo_usuario"]))
      );
     $resultadoUpdate = $conexion->ejecutarInstruccion($sql);
     
      $resultado=array();
      if ($fila=$conexion->cantidadRegistros($resultadoconsulta)>0) {
            $fila=$conexion->obtenerRegistro($resultadoconsulta);
            $resultado["plan_anterior"]=$fila["codigo_plan"];
           }
      if ($resultadoUpdate  === TRUE) {
         

        $resultado["codigo"]=1;
        $resultado["mensaje"]="Exito, plan contratado";
        $resultado["comando"]="<label>Plan Activo</label>";
        $resultado["variable"]="pad".$codigo;
      } 
      
      echo json_encode($resultado);
        break;
      
      default:
        # code...
        break;
    }
     






?>