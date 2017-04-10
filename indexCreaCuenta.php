<?php
  include_once("class/class-usuario.php");
  include_once("class/class-pais.php");


    $paises = array();
    $paises[] = new Pais(1, "Honduras");
    $paises[] = new Pais(2, "Nicaragua");
    $paises[] = new Pais(3, "El Salvador");
    $paises[] = new Pais(4, "Panama");
    $paises[] = new Pais(6, "Guatemala");
    $paises[] = new Pais(7, "Belice");
    $paises[] = new Pais(8, "Mexico");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">

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
                    <td >
                    
                    <input id="txt-nombre" type="text" name="txt-nombre"  class="form-control" placeholder="Nombre" onblur="validar('txt-nombre','td-nombre')" ></td>
                    <td >
                    <input id="txt-apellido" type="text" name="txt-apellido" class="form-control" placeholder="Apellido" onblur='validar("txt-apellido", "td-nombre")' ></td>
                    <tr>
                      <td id="td-nombre" style="color: red"></td>
                    </tr>
                  </tr>
                  
                  <tr>
                    <td colspan="2"  >
                    <label for="txt-nombreUsuario">Nombre de Usuario :</label>
                    <input type="text" name="txt-nombreUsuario" class="form-control" placeholder="Nombre Usuario" onblur="validar('txt-usuario','td-usuario')"  id="txt-usuario" data-toggle="popover" data-content="Puedes usar letras, numeros y puntos." data-container="body" data-placement="left"></td>
                  </tr>
                  <tr><td id="td-usuario" style="color: red"></td></tr>
                  <tr>
                    <td colspan="2" >
                    <label for="txt-contrasena">Crea una contraseña :</label>
                    <input type="password" name="txt-contrasena" class="form-control" placeholder="Contraseña" id="txt-contraseña"  onblur="contraseña('txt-contraseña','td-contraseña')"  data-toggle="popover" title="Seguridad de la contraseña:" data-content="Usa ocho caracteres como mínimo. No uses una contraseña de otro sitio ni un nombre demasiado común, como el nombre de tu mascota." data-placement="left" data-container="body"></td>
                    
                  </tr>
                  <tr><td id="td-contraseña" style="color: red"></td></tr>
                  <tr>
                    <td colspan="2" >
                    <label for="txt-contrasena">Confirmar Contraseña :</label>
                    <input type="password" name="txt-confirmacionContrasena" class="form-control" placeholder="Confirmar contraseña" id="txt-confirContraseña" onblur = "contraseña('txt-confirContraseña','td-confirContraseña')"></td>
                  </tr>
                  <tr><td id="td-confirContraseña" style="color: red"></td></tr>
                  <tr>
                    <td colspan="2" >
                      <label for="txt-fecha-nacimiento">Fecha nacimiento:</label> 
                      <input type="date" name="txt-fecha-nacimiento" class="form-control" placeholder="Fecha nacimiento"  id="data-fechaNacimento" onblur="validar('data-fechaNacimiento', 'td-fecha')" ></td>
                  </tr>
                  <tr><td id="td-fecha"></td></tr>
                  

                  
                  
                  <tr>
                    <td colspan="2">
                    <!--Para seleccionar por defecto un checkbox o radioboton utiliza la propiedad checked-->
                    <!--En el caso de los select utiliza la propiedad selected-->
                        <label>Genero:</label> 
                        <label><input id="rbt-genero" type="radio" name="rbt-genero" value="Femenino" >Femenino</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label><input id="rbt-genero" type="radio" name="rbt-genero" value="Masculino" >Masculino</label>
                    </td>
                  </tr>

                  <tr>
                    <td colspan="2" >
                    <label>Telefono Celular:</label>
                    <input id="txt-telefono" type="text" name="txt-telefono" class="form-control" placeholder="Numero telefonico" onblur="validar('txt-telefono','td-telefono')" ></td>
                  </tr>
                  <tr><td id="td-telefono" style="color: red"></td></tr>
                  <tr>
                    <td colspan="2" >
                    <label for="txt-fecha-nacimiento">Correo Electronico:</label>
                    <input id="txt-correo" type="email" name="txt-correo" class="form-control" placeholder="Correo electronico"  onblur="validar('txt-correo','td-correo')"></td>
                  </tr>
                  <tr><td id="td-correo" style="color: red"></td></tr>
                  <tr>
                    <td colspan="2" >
                    <label for="Ubicacion">Ubicacion:</label>
                      <select id="cmb-ubicacion" name="slc-pais" class="form-control">
                          <option value="">--Ubicacion--</option>
                          <?php
                            for ($i=0; $i <sizeof($paises) ; $i++) {
                                  echo '<option  value="'.$paises[$i]->getNombrePais().'">'.$paises[$i]->getNombrePais().'</option>';
                            }     
                          ?>                          
                      </select>  
                    </td>
                  </tr>
                  
                  <tr><td id="td-campos" style="color: red; padding: 8px;"></td></tr>
                  <tr>
                    <td colspan="2">
                    <div id="resultado">
                      
                    </div>
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

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validarRegistro.js"></script>
    <script type="text/javascript" src="js/registro.js"></script>
    <script type="text/javascript">
      $(function () {
    $('[data-toggle="popover"]').popover();
      });
    </script>
  </body>
</html>
