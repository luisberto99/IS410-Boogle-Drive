<?php
  include_once("class/class-usuario.php");
  include_once("class/class-pais.php");

  $nombre="";
  $apellido="";
  $nombreUsuario="";
  $creaContraseña="";
  $confirmacionContraseña="";
  $fechaNacimiento="";
  $genero="";
  $celular="";
  $correo="";
  $ubicacion="";



  if (isset($_GET["txt-nombre"]))
    $nombre = $_GET["txt-nombre"];

  if (isset($_GET["txt-apellido"]))
    $apellido = $_GET["txt-apellido"];

  if (isset($_GET["txt-nombreUsuario"]))
    $apellido = $_GET["txt-nombreUsuario"];

  if (isset($_GET["txt-correo"]))
    $correo = $_GET["txt-correo"];

  if (isset($_GET["txt-contrasena"]))
    $contrasena = $_GET["txt-contrasena"];

  if (isset($_GET["txt-confirmacion-contrasena"]))
    $confirmacionContrasena = $_GET["txt-confirmacion-contrasena"];

  if (isset($_GET["txt-fecha-nacimiento"]))
    $fechaNacimiento = $_GET["txt-fecha-nacimiento"];

  if (isset($_GET["txt-telefono"]))
    $telefono = $_GET["txt-telefono"];

  if (isset($_GET["slc-pais"]))
    $pais = $_GET["slc-pais"];

  if (isset($_GET["rbt-genero"]))
    $genero = $_GET["rbt-genero"];

  
   if (isset($_GET["btn-registrar"])){
      
      $u = new Usuario($nombre,
          $apellido,
          $nombreUsuario,
          $creaContraseña,
          $confirmacionContraseña,
          $fechaNacimiento,
          $genero,
          $celular,
          $correo,
          $ubicacion
         );


      $u->guardarRegistro();

   }

   $archivo = fopen("data/usuarios.csv","r") or die("No se pudo abrir el archivo :(");
    // Output one line until end-of-file
    $usuarios = array();
    $partes = array();
    while(!feof($archivo)) {
      $linea = fgets($archivo);
      $partes = explode(",",$linea);
      if (sizeof($partes)>1){
        $usuarios[] = new Usuario(
            $partes[0],
            $partes[1],
            $partes[2],
            $partes[3],
            $partes[4],
            $partes[5],
            $partes[6],
            $partes[7],
            $partes[8],
            $partes[9]
        );
      }
    }
    fclose($archivo);

    

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

    
    <link href="css/jumbotron.css" rel="stylesheet">

    
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
          <form action="indexCreaCuenta.php" method="GET">
              <table class="formulario" style="width: 500px" style="height: 400" style="margin: 10px">
                  <tr>
                    <label for="txt-nombre">Nombre :</label>
                    <td <?php if ($nombre=="") echo 'class="has-error"'; ?> >
                    
                    <input type="text" name="txt-apellido" class="form-control" placeholder="Nombre" value="<?php echo $nombre; ?>"></td>
                    <td <?php if ($apellido=="") echo 'class="has-error"'; ?>><input type="text" name="txt-apellido" class="form-control" placeholder="Apellido" value="<?php echo $apellido; ?>"></td>
                  </tr>
                  
                  <tr>
                    <td colspan="2">
                    <label for="txt-nombreUsuario">Nombre de Usuario :</label>
                    <input type="text" name="txt-nombreUsuario" class="form-control" placeholder="Nombre Usuario" value="<?php echo $nombreUsuario; ?>"></td>
                  </tr>

                  <tr>
                    <td colspan="2">
                    <label for="txt-contrasena">Crea una contraseña :</label>
                    <input type="password" name="txt-contrasena" class="form-control" placeholder="Contraseña"></td>
                  </tr>

                  <tr>
                    <td colspan="2">
                    <label for="txt-contrasena">Confirmar Contraseña :</label>
                    <input type="password" name="txt-confirmacion-contrasena" class="form-control" placeholder="Confirmar contraseña"></td>
                  </tr>

                  <tr>
                    <td colspan="2">
                      <label for="txt-fecha-nacimiento">Fecha nacimiento:</label> <input type="date" name="txt-fecha-nacimiento" class="form-control" placeholder="Fecha nacimiento" value="<?php echo $fechaNacimiento; ?>"></td>
                  </tr>

                  

                  
                  
                  <tr>
                    <td colspan="2">
                    <!--Para seleccionar por defecto un checkbox o radioboton utiliza la propiedad checked-->
                    <!--En el caso de los select utiliza la propiedad selected-->
                        <label>Genero:</label> 
                        <label><input type="radio" name="rbt-genero" value="Femenino" <?php if ($genero =="Femenino") echo "checked"; ?>>Femenino</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label><input type="radio" name="rbt-genero" value="Masculino" <?php if ($genero =="Masculino") echo "checked"; ?>>Masculino</label>
                    </td>
                  </tr>

                  <tr>
                    <td colspan="2">
                    <label for="txt-fecha-nacimiento">Telefono Celular:</label>
                    <input type="text" name="txt-telefono" class="form-control" placeholder="Numero telefonico" value="<?php echo $celular; ?>"></td>
                  </tr>

                  <tr>
                    <td colspan="2">
                    <label for="txt-fecha-nacimiento">Correo Electronico:</label>
                    <input type="text" name="txt-correo" class="form-control" placeholder="Correo electronico" value="<?php echo $correo; ?>"></td>
                  </tr>

                  <tr>
                    <td colspan="2">
                    <label for="txt-fecha-nacimiento">Ubicacion:</label>
                      <select name="slc-pais" class="form-control">
                          <option>--Ubicacion--</option>
                          <?php
                            for ($i=0; $i <sizeof($paises) ; $i++) {
                                
                                  echo '<option '. (($paises[$i]->getCodigoPais()==$ubicacion)?"selected":"") .' value="'.$paises[$i]->getCodigoPais().'">'.$paises[$i]->getNombrePais().'</option>';
                            }


                      

                            

                           
                          ?>                          
                      </select>  
                    </td>
                  </tr>
                  
                  
                  <tr>
                    <td colspan="2">
                      <a href="condiciones.php">
                      <input type="submit" name="btn-registrar" value="Siguiente paso" class="btn btn-primary" >
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

    
  </body>
</html>
