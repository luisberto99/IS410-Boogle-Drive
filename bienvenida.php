<?php
session_start(); 

  if(!isset($_SESSION['codigo_usuario']))
    header("Location:entrarUsuario.php");
  
include_once("class/class-usuario.php");
include_once("class/class-conexion.php");
$conexion = new Conexion();
  $conexion->establecerConexion();

    $resultadoUsuario=$conexion->ejecutarInstruccion("SELECT * FROM tbl_usuarios WHERE codigo_usuario=".$_SESSION["codigo_usuario"]."");

function btn_superiores2($icon){
    echo '<button class="transpariencia dropdown-toggle dere icono_lateral" data-toggle="dropdown" aria-haspopup="true" aria-expanded="iconos1" type="button" ><span class="'.$icon.'" style="font-size: 20px; margin-right: 45px; padding-top:20px" aria-hidden="true"></span></button>';
  }
  function btn_superiores($icon){
    echo '<button class="transpariencia dropdown-toggle dere icono_lateral" data-toggle="dropdown" aria-haspopup="true" aria-expanded="iconos1" type="button" ><span class="'.$icon.'" style="font-size: 20px; margin-right: 10px; padding-top:20px" aria-hidden="true"></span></button>';
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Bienvenida</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/personalizado.css">
<style type="text/css">
  p{
    font-size: 35px;
  }
</style>
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
    <div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
 <img src="img/boogledrive.jpg" style="width:250px; margin:5px;">
   </div> 
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<div >
  <?php btn_superiores2("glyphicon glyphicon-user");?>
<div class="dropdown-menu menu_buscador perfilUsuario" style="right: 60px; border: 0; margin: 0">
                <div style="height: 70%; margin: 0">
                  <div class="col-md-3">
                    <span class="glyphicon glyphicon-user configuracionNotificaciones" style="font-size: 60px"></span>
                  </div>
                  <div class="col-md-7">
                    <br>
                    <?php if($conexion->cantidadRegistros($resultadoUsuario) >0) {
                      $fila = $conexion->obtenerRegistro($resultadoUsuario);
                      echo '<strong>'.$fila["nombre"]." ".$fila["apellido"].'</strong><br>'.
                            '<small>'.$fila["email"].'</small>';
                    }  ?>
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
            
        </div>

    </div>
    <div class="col-lg-12 col-sm-12 col-md-6 col-xs-6">
    <hr>
    <center>
    <div  style="width:1000px; height: 500px; padding-top: 40px;" >
    
      <?php
        
        echo "<p><strong>Te damos la bienvenida,</strong></p><br>";
        echo "<h3>Tu nueva direccion de correo electronico es: </h3><br>";

      
        ?>
        <div style="padding-top: 20px">
          <h3>Gracias por crear una cuenta de Boogle. Te permitira mantener tus archivos en un solo lugar y acceder a ellos cuando quieras.</h3>
        </div>
        <div style="padding-top: 40px">
           <button  class= "btn btn-primary"  data-toggle="modal" data-target="#caracteristicas">Continuar</button>
           </div>
            <div class="modal fade" tabindex="-1" role="dialog" id="caracteristicas">
              <div class="modal-dialog" role="document"  style="width:900px" style="height: 800px">
                <div class="modal-content">
                  
                  <div class="modal-body">
                               
                    <iframe id="contenido3" src="caracteristicas.php" ></iframe>  
                    <a class="btn btn-lg btn-primary" href="my-drive/index.php" >Ir a Drive</a>
                 
                 
                  </div>

                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->

              
          </div><!-- /.modal -->
        </div>
        </center>
    </div>
    <div class="col-lg-12 col-xs-6 col-md-6 col-sm-12" style="padding-top: 140px">
      <hr>
      <h4>&nbsp;&nbsp;&nbsp;&nbsp;Boogle Drive &nbsp;&nbsp;&nbsp;&nbsp;Privacidad y Condiciones&nbsp;&nbsp;&nbsp;&nbsp;Ayuda</h4>
    </div>
  </div>
</div>


  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>