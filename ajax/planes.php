<?php
session_start();
include ("../class/class-conexion.php");
     $conexion = new Conexion();
     $conexion->establecerConexion();
     //$_GET["accion"]=1;
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
      $resultadoPlanes=$conexion->ejecutarInstruccion("SELECT codigo_plan, nombre_plan, almacenamiento, precio FROM tbl_planes");
      $contador=1;
      $ayuda=1;
      $partes1="";
      $ppartes1="";
      $pppartes1="";
      $ppppartes1="";
      $partes2="";
      $ppartes2="";
      $pppartes2="";
      $ppppartes2="";
      $partes3="";
      $ppartes3="";
      $pppartes3="";
      $ppppartes3="";
      $partes4="";
      $ppartes4="";
      $pppartes4="";
      $ppppartes4="";
      $partes5="";
      $ppartes5="";
      $pppartes5="";
      $ppppartes5="";
      $partes6="";
      $ppartes6="";
      $pppartes6="";
      $ppppartes6="";
      $partes7="";
      $ppartes7="";
      $pppartes7="";
      $ppppartes7="";

      
      while ($fila=$conexion->obtenerRegistro($resultadoPlanes)) {
        $planactivo=$conexion->ejecutarInstruccion("SELECT codigo_plan FROM tbl_usuarios WHERE codigo_usuario=".$_SESSION['codigo_usuario']."");
        
        ${"partes".$ayuda}='<div  class="col-md-2 col-sm-4 col-xs-4 col-lg-storage">'.
          '<div class="welll"> '.
            '<p id="storage">'.$fila["nombre_plan"].'</p>'.
            '<div class="pad'.$contador.'">';
         
             if (($conexion->cantidadRegistros($planactivo))>0) {

                $fila2 = $conexion->obtenerRegistro($planactivo);

                if (!($fila2["codigo_plan"]==$contador)) {
                  
                    ${"ppartes".$ayuda}='<button id="preciobtn'.$contador.'">'.$fila["precio"].' $/mes</button>';
                  }else{
                    ${"pppartes".$ayuda}='<label>Plan Activo</label>';
                  }
             }
             ${"ppppartes".$ayuda}='</div>'.
          '</div>'.
       '</div>';
      $contador++; 
     $ayuda++; 
      }
    
         
        $resultado["datos"]=$partes1.$ppartes1.$pppartes1.$ppppartes1.$partes2.$ppartes2.$pppartes2.$ppppartes2.$partes3.$ppartes3.$pppartes3.$ppppartes3.$partes4.$ppartes4.$pppartes4.$ppppartes4.$partes5.$ppartes5.$pppartes5.$ppppartes5.$partes6.$ppartes6.$pppartes6.$ppppartes6.$partes7.$ppartes7.$pppartes7.$ppppartes7;
        $resultado["codigo"]=1;
        $resultado["mensaje"]="Exito, plan contratado";
        $resultado["comando"]="<label>Plan Activo</label>";
        $resultado["variable"]="pad".$codigo;
       echo json_encode($resultado);
      }
      
        break;
      
      default:
        # code...
        break;
    }
     






?>