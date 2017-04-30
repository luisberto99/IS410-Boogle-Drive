<?php
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


     <div class="planes">

      <p style="margin-left: 18px"><strong>Planes</strong>
      </p>
     

      <?php
      while ($fila=$conexion->obtenerRegistro($resultadoPlanes)) {
        echo
        '<div  class="col-md-2 col-sm-4 col-xs-4 col-lg-2">'.
          '<div class="welll"> '.
            '<p id="storage">'.$fila["nombre_plan"].'</p>'.
            '<div class="pad">'.
            '<button id="preciobtn2">'.$fila["precio"].' $/mes</button  >'.
             '</div>'.
          '</div>'.
       '</div>';
      }
      ?>
      


</div>
</div>
</body>
</html>