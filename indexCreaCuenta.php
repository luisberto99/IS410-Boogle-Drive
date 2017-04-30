<?php
  include ("class/class-conexion.php");
  $conexion = new Conexion();
  $conexion->establecerConexion();
  $resultadoPais=$conexion->ejecutarInstruccion("SELECT codigo_pais, nombre_pais FROM tbl_pais");
  $resultadoPreguntas=$conexion->ejecutarInstruccion("select a.codigo_pregunta,a.pregunta
from tbl_preguntas a 
where a.codigo_pregunta not in ( select codigo_pregunta
from tbl_respuestas b 
where b.codigo_usuario=3)");
  $resultadoPreguntas2=$conexion->ejecutarInstruccion("select a.codigo_pregunta,a.pregunta
from tbl_preguntas a 
where a.codigo_pregunta not in ( select codigo_pregunta
from tbl_respuestas b 
where b.codigo_usuario=3)");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <meta name="description" content="">

    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <style >
    .overlay{
     display: none;
     position: absolute;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     background: #000;
     z-index:1001;
     opacity:.75;
     -moz-opacity: 0.75;
     filter: alpha(opacity=75);
    }

   

  </style>

    <title>Crear Cuenta</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/personalizado.css">

    
  </head>

  <body>
    <div style="background-color:#fff; " class="fixed" >
    

    <div>
        <a href="index.html"><img src="img/boogledrive.jpg" style="width:200px; padding: 10px; margin:10px;"></a>
              
        <span style="float:right; padding-top:12px; margin:10px;">
        <a href="entrarUsuario.php" ><button id="newsesion">Iniciar sesion</button></a>
        </span>
         <hr style="margin-top: 0px">
    </div>
    
    <h1><center><strong>Crear tu cuenta de Boogle Drive</strong></center></h1>
     <br>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12 col-sm-6 col-md-6 col-lg-6 hidden-xs">
          
          <center>
          <br>
          <br>
          <br>
          <br>
          <h2>Lleva todo Contigo</h2>
          <br>
          <p>Cambia de dispositivo y continua desde los ultimos cambios que hayas realizado en tu version de Boogle</p>
          <br>
          <img src="img/portabilidad.png">
          </center>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="well" id = "div-formulario1">
              <table class="formulario" style="width: 500px" style="height: 400" style="margin: 10px">
                  <tr>
                    <label for="txt-nombre">Nombre :</label>

                    <td id="nombre"  >
                    <input id="txt-nombre" type="text" name="txt-nombre"  class="form-control" placeholder="Nombre" 
                    </td>
                    <td id="apellido">
                    <input id="txt-apellido" type="text" name="txt-apellido" class="form-control" placeholder="Apellido" 
                  </tr>
                  
                  <tr>
                    <td colspan="2" id="usuario" >
                    <label for="txt-nombreUsuario">Nombre de Usuario :</label>
                    <input type="text" name="txt-nombreUsuario" class="form-control" placeholder="Nombre Usuario" id="txt-usuario" data-toggle="popover" data-content="Puedes usar letras, numeros y puntos." data-container="body" data-placement="left"></td>
                  </tr>
                 
                  <tr>
                    <td colspan="2" id="contrasena">
                    <label for="txt-contrasena">Crea una contraseña :</label>
                    <input type="password" name="txt-contrasena" class="form-control" placeholder="Contraseña" id="txt-contrasena"  data-toggle="popover" title="Seguridad de la contraseña:" data-content="Usa ocho caracteres como mínimo. No uses una contraseña de otro sitio ni un nombre demasiado común, como el nombre de tu mascota." data-placement="left" data-container="body"></td>  </td>
                    
                  </tr>
                  <tr>
                    <td colspan="2" id="confirContrasena">
                    <label for="txt-contrasena">Confirmar Contraseña :</label>
                    <input type="password" name="txt-confirmacionContrasena" class="form-control" placeholder="Confirmar contraseña" id="txt-confirContrasena"  ></td>
                  </tr>
                  <tr>
                    <td colspan="2" id="fechaNacimento">
                      <label for="txt-fecha-nacimiento">Fecha nacimiento:</label> 
                      <input type="date" name="txt-fecha-nacimiento" class="form-control" placeholder="Fecha nacimiento"  id="data-fechaNacimento" ></td>
                  </tr>
                  <tr>
                    <td colspan="2" id="genero">
                    <!--Para seleccionar por defecto un checkbox o radioboton utiliza la propiedad checked-->
                    <!--En el caso de los select utiliza la propiedad selected-->
                        <label>Genero:</label> 
                        <label><input id="rbt-genero" type="radio" name="rbt-genero" value="Femenino" >Femenino</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label><input id="rbt-genero" type="radio" name="rbt-genero" value="Masculino" >Masculino</label>
                    </td>
                  </tr>

                  <tr>
                    <td colspan="2" id="telefono">
                    <label>Telefono Celular:</label>
                    <input id="txt-telefono" type="text" name="txt-telefono" class="form-control" placeholder="Numero telefonico"  ></td>
                  </tr>
                  <tr>
                    <td colspan="2" id="correo">
                    <label >Correo Electronico:</label>
                    <input id="txt-correo" type="email" name="txt-correo" class="form-control" placeholder="Correo electronico"  ></td>
                  </tr>
                  <tr>
                    <td colspan="2" id="ubicacion">
                    <label for="Ubicacion">Ubicacion:</label>
                      <select id="slc-ubicacion" name="slc-pais" class="form-control">
                          <option value="0">--Ubicacion--</option>
                          <?php
                            while ($fila=$conexion->obtenerRegistro($resultadoPais)) {
                             echo '<option value="'.$fila["codigo_pais"].'">'.$fila["nombre_pais"].'</option>';
                            }
                                
                          ?>                          
                      </select>  
                    </td>
                  </tr>

                  <tr>
                  <td colspan="2" id="preguntass">
                     <label>Pregutas de Seguridad</label>
                         <select id="slc-preguntas" class="form-control">
                           <option value="0">--Seleccione--</option>
                           <?php
                                 while ($fila=$conexion->obtenerRegistro($resultadoPreguntas)) {
                                   echo '<option value="'.$fila["codigo_pregunta"].'">'.utf8_encode($fila["pregunta"]).'</option>';
                                 }
                                  
     
                            ?> 
                         </select>
                  </td>
                  <tr>
                     <td colspan="2" id="respuesta1">
                         <input type="text" class="form-control" placeholder="Respuesta" id="txt-respuesta1" >
                     </td>
                  </tr>
                  <tr>
                  <td colspan="2" id="22"><br> 
                    <select id="slc-2" class="form-control">
                          <option value="0">--Seleccione--</option>
                              <?php
                                      while ($fila=$conexion->obtenerRegistro($resultadoPreguntas2)) {
                                       echo '<option value="'.$fila["codigo_pregunta"].'">'.utf8_encode($fila["pregunta"]).'</option>';
                                      }
                                       
          
                              ?> 
                    </select>
                  </td>
                  </tr>
                  <tr>
                  <td colspan="2" id="respuesta2">
                       <input type="text" class="form-control" placeholder="Respuesta" id="txt-respuesta2" > 
                  </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                    <br>
                        <input type="submit" id="btn-registrar" name="btn-registrar" value="Siguiente paso" class="btn btn-primary" >    
                    </td>
                  </tr>
                   </td>
              </table>            
          </form>
       </div>

</div>

      </div>

      <hr>

      <footer>
        <p>&copy; 2017 Boogle, Inc.</p>
      </footer>
    </div> 
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="modal-condiciones">
              
              <div class="modal-dialog" role="document"  style="width:900px" style="height: 800px" >
                <div class="modal-content">
                   
                  <div class="modal-body">
                            <?php  
                              include_once("condiciones.php");
                            ?>

                       <div class="modal-footer">
                        <center>
                          <td colspan="2">
                            <a href="indexCreaCuenta.php">
                              <input type="submit" name="btn-cancelar" 
                              value="Cancelar" class="btn btn-warning">
                            </a>
                            <a href="bienvenida.php">
                            <input type="reset" name="btn-acepto" 
                            value="Acepto" class="btn btn-primary">
                            </a>
                          </td>
                        </center>
                      </div> 
                </div><!-- /.modal-content -->
                
              </div><!-- /.modal-dialog --> 
               
          </div><!-- /.modal -->

         




       <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/registro.js"></script>
    <script src="js/validarRegistro.js"></script>
         
       <script type="text/javascript">
      $(function () {
    $('[data-toggle="popover"]').popover();
      });
    </script>    
  </body>
</html>
