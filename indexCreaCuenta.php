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



    
  </head>

  <body>
    <div style="background-color:#fff; " class="fixed" >
    

    <div>
        <a href=""><img src="img/boogledrive.jpg" style="width:300px; margin:10px;"></a>
              
        <span style="float:right; padding-top:12px; margin:10px;">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
        </span>
         <hr>
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
          <img src="img/sobre.jpg">
          </center>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="well" id = "div-formulario1">
          <form>
              <table class="formulario" style="width: 500px" style="height: 400" style="margin: 10px">
                  <tr>
                    <label for="txt-nombre">Nombre :</label>
                    <td id="error">
                    
                    <input type="text" id="txt-nombre" class="form-control " placeholder="Nombre" </td>
                    <td class="error">
                    <input type="text" id="txt-apellido" class="form-control"  placeholder="Apellido" </td>
                  </tr>
                  
                  <tr >
                    <td colspan="2" id="error">
                    <label for="txt-nombreUsuario">Nombre de Usuario :</label>
                    <input type="text" id="txt-nombreUsuario" class="form-control"  placeholder="Nombre Usuario" </td>
                  </tr>

                  <tr id="error">
                    <td colspan="2">
                    <label for="txt-contrasena">Crea una contraseña :</label>
                    <input type="password" id="txt-contrasena" class="form-control"  placeholder="Contraseña"></td>
                  </tr>

                  <tr >
                    <td colspan="2" id="error">
                    <label for="txt-contrasena">Confirmar Contraseña :</label>
                    <input type="password" id="txt-confirmacion-contrasena"  class="form-control" placeholder="Confirmar contraseña"></td>
                  </tr>

                  <tr>
                    <td colspan="2"  id="error">
                      <label for="txt-fecha-nacimiento">Fecha nacimiento:</label> <input type="date" id="txt-fecha-nacimiento" class="form-control"  placeholder="Fecha nacimiento" </td>
                  </tr>

                  

                  
                  
                  <tr>
                    <td colspan="2" id="error">
                    <!--Para seleccionar por defecto un checkbox o radioboton utiliza la propiedad checked-->
                    <!--En el caso de los select utiliza la propiedad selected-->
                        <label>Genero:</label> 
                        <label><input type="radio" id="rbt-genero" value="Femenino" >Femenino</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label><input type="radio" id="rbt-genero" value="Masculino" >Masculino</label>
                    </td>
                  </tr>

                  <tr>
                    <td colspan="2" id="error" >
                    <label for="txt-fecha-nacimiento">Telefono Celular:</label>
                    <input type="text" id="txt-telefono"  class="form-control"  placeholder="Numero telefonico" </td>
                  </tr>

                  <tr>
                    <td colspan="2" id="error" >
                    <label for="txt-fecha-nacimiento">Correo Electronico:</label>
                    <input type="text" id="txt-correo"  class="form-control" placeholder="Correo electronico" </td>
                  </tr>

                  <tr>
                    <td colspan="2" id="error" >
                    <label for="txt-fecha-nacimiento">Ubicacion:</label>
                      <select id="slc-pais"  class="form-control">
                          <option value="0">--Ubicacion--</option>
                          <?php
                            for ($i=0; $i <sizeof($paises) ; $i++) {
                                
                                  echo '<option  value="'.$paises[$i]->getCodigoPais().'">'.$paises[$i]->getNombrePais().'</option>';
                            }                        
                          ?>                          
                      </select>  
                    </td>
                  </tr>
                  
                  
                  <tr>
                    <td colspan="2">
                    <div id="resultado">
                      
                    </div>
                      <input type="submit" id="btn-registrar" value="Siguiente paso" class="btn btn-primary" >
                      </a>
                      
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
     <script type="text/javascript" src="js/jquery.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/registro.js"></script>
  </body>
</html>
