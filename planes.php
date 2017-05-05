<?php
session_start(); 
  if(!isset($_SESSION['codigo_usuario']))
    header("Location:http://localhost/IS410-Boogle-Drive/entrarUsuario.php");

include ("class/class-conexion.php");
  $conexion = new Conexion();
  $conexion->establecerConexion();
  $resultadoPlanes=$conexion->ejecutarInstruccion("SELECT codigo_plan, nombre_plan, almacenamiento, precio FROM tbl_planes");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Guía de Precios</title>
  <meta charset="utf-8">
  <link rel="icon" href="img/logo.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/personalizado.css">
</head>
<body>

  <div class="container-fluid">
    <div class="row">


     <div class="planes" >

      <p style="margin-left: 18px"><strong>Planes</strong>
      </p>
     

      <?php
      $contador=1;
      while ($fila=$conexion->obtenerRegistro($resultadoPlanes)) {
        $planactivo=$conexion->ejecutarInstruccion("SELECT codigo_plan FROM tbl_usuarios WHERE codigo_usuario=".$_SESSION['codigo_usuario']."");
        echo
        '<div  class="col-md-2 col-sm-4 col-xs-4 col-lg-storage">'.
          '<div class="welll"> '.
            '<p id="storage">'.$fila["nombre_plan"].'</p>'.
            '<div class="pad'.$contador.'">';
         
             if (($conexion->cantidadRegistros($planactivo))>0) {

                $fila2 = $conexion->obtenerRegistro($planactivo);

                if (!($fila2["codigo_plan"]==$contador)) {
                  
                    echo '<button id="preciobtn'.$contador.'">'.$fila["precio"].' $/mes</button>';
                  }else{
                    echo '<button id="preciobtn'.$contador.'" style="display: none;">'.$fila["precio"].' $/mes</button><label>Plan Activo</label>';
                  }
             }
             echo '</div>'.
          '</div>'.
       '</div>';
      $contador++; 
      }
      ?>
      


</div>

</div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/plannes.js"></script>
</body>
</html>