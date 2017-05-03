<?php
session_start(); 
  if(!isset($_SESSION['codigo_usuario']))
    header("Location:entrarUsuario.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Almacenamiento</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/personalizado.css">
<style type="text/css">
  body {
    overflow-x: hidden;
}
</style>
</head>
<body>
<div class="container-fluid">
<div class="row">

<?php
function btn_superiores2($icon){
    echo '<button class="transpariencia dropdown-toggle dere icono_lateral" data-toggle="dropdown" aria-haspopup="true" aria-expanded="iconos1" type="button" ><span class="'.$icon.'" style="font-size: 20px; margin-right: 45px" aria-hidden="true"></span></button>';
  }
	function btn_superiores($icon){
    echo '<button class="transpariencia dropdown-toggle dere icono_lateral" data-toggle="dropdown" aria-haspopup="true" aria-expanded="iconos1" type="button" ><span class="'.$icon.'" style="font-size: 20px; margin-right: 10px" aria-hidden="true"></span></button>';
  }
?>
<!-- As a link -->
<div  id="encabezado" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <img id="boogle" src="img/google.png" width="92" height="36"></a>

<div>
  <?php btn_superiores2("glyphicon glyphicon-user");?>
<div class="dropdown-menu menu_buscador perfilUsuario" style="right: 60px; border: 0; margin: 0">
                <div style="height: 70%; margin: 0">
                  <div class="col-md-3">
                  <img src="../f/icono3.png" class="configuracionNotificaciones" width="105" height="105" style="border-radius: 50%">
                    
                  </div>
                  <div class="col-md-7">
                    <br>
                    <strong>Dulce Maria Medina</strong><br>
                    <small>dulce.medina@gmail.com</small>
                    <a href="https://myaccount.google.com/intro" target="_blank"><button class="btn btn-primary" type="button">Mi cuenta</button></a>
                  </div>
                </div>
                <div class="perfilUsuarioInferior" style="margin: 0">
                  <button class="btn dere" type="button">Añadir cuenta</button>
                  <a href="cerrarSesion.php"><button class="btn izq" type="button">Cerrar sesion</button></a>
                </div>
              </div>
           </div>
           <div>
              <?php btn_superiores("glyphicon glyphicon-bell");?>
              <div class="dropdown-menu notificaciones menu_buscador " style="right: 90px">
                <div>
                  <button class="configuracionNotificaciones transpariencia">
                    <span class="glyphicon glyphicon-cog " aria-hidden="true"></span>
                  </button>
                  <span class="configuracionNotificaciones">Google</span><br>
                </div>
                <div align="center">
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  Has leído todas las notificaciones.
                </div>
              </div>
             </div> 
  
</div>

<div  id="subencabezado" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  Almacenamiento de Drive

</div>

<div  id="middle" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div id="grafico" class="col-lg-4 col-md-4">
</div>

 <div  class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
<iframe id="contenido" src="planes.php" ></iframe>


</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-4 col-lg-12 h1" >

	<h4><strong>Tu espacio de almacenamiento se comparte en</strong></h4>

<div class="col-lg-4 col-xs-12 col-md-12">
<h2 ><strong>Google Drive</strong></h2>
<table>
  <tr>
    <td>
      <a  href="https://www.google.com/drive/" target="_blank" aria-label="Google Drive">
         <img id="img" src="img/drive.png" width="64" height="64">
      </a> 
    </td>
    <td>
      <p>
        Almacena archivos de hasta 5 TB cada uno. Los documentos, hojas de cálculo o presentaciones de Google que crees no utilizarán el espacio de almacenamiento del que dispones.
      </p>
    </td>
  </tr>
</table>   
</div>


<div class="col-lg-4 col-xs-12 col-md-12">
<h2 ><strong>Gmail</strong></h2>
<table >
  <tr>
    <td >
      <a  href="https://www.gmail.com/mail/help/about.html" target="_blank" aria-label="Gmail"><img id="img" src="img/gmail.png" width="64" height="64">
      </a>
    </td>
    <td>
      <p>
        Los archivos adjuntos enviados y recibidos en Gmail y tus mensajes de correo electrónico utilizan tu espacio de almacenamiento.
      </p>
    </td>
  </tr>
</table>   
</div>


<div class="col-lg-4 col-xs-12 col-md-12">
<h2 ><strong>Google Fotos</strong></h2>
<table>
  <tr>
    <td>
      <a href="https://photos.google.com/?hl=es" target="_blank" aria-label="Google Fotos"><img id="img" src="img/fotos.png" width="64" height="64">
      </a>
      </a>
    </td>
    <td>
      <p>
        Según tu configuración de Google Fotos, las subidas en alta calidad se almacenan de forma gratuita, pero las subidas en calidad original consumirán tu almacenamiento de Drive.
        <a href="https://support.google.com/photos/answer/6314648?hl=es">Más información</a>
      </p>
    </td>
  </tr>
</table>   
</div>



</div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>