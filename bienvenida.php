<?php  
include_once("class/class-usuario.php");




?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    
    <title>Bienvenida</title>

   
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <link href="css/jumbotron.css" rel="stylesheet">

    
  </head>

  <body>
    <div style="background-color:#fff; " class="fixed" >
    

    <div>
        <a href=""><img src="img/boogledrive.jpg" style="width:250px; margin:5px;"></a>
              
        <span style="float:right; padding-top:12px; margin:20px;">
        <table>
          <div class="row col-md-2 dere">
            <td>
              <span class="glyphicon glyphicon-bell" aria-hidden="true" ></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>

            <td>
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            </td>
          </div>
        </table>
            
    </div>
    <hr>   
        </span>

      
        
  
    <div class="container" id = "div-formulario1" style="width:1000px" style="height: 500px">
      <form action="bienvenida.php" method="GET">
      <center>
        <?php
        
        echo "<h2><strong>Te damos la bienvenida,</strong></h2><br>";
        echo "<h3>Tu nueva direccion de correo electronico es: </h3><br>";

      
        ?>
      </center>
      <br>
      <br>

   
      <center>
      <h2><p>Gracias por crear una cuenta de Boogle. Te permitira mantener tus archivos en un solo lugar y acceder a ellos cuando quieras.</p></h2>
      </center>
      </form>
        
    </div>

      <br>
      <br>
      <br>
      <center>
            <td colspan="2">
          
            



            <button role="button" class= "btn btn-primary" data-toggle="modal" data-target="#modal-caracteristicas">Continuar</button>
            <div class="modal fade" tabindex="-1" role="dialog" id="modal-caracteristicas">
              <div class="modal-dialog" role="document"  style="width:900px" style="height: 800px">
                <div class="modal-content">
                  
                    
                               
                 
                  <div class="modal-body">
                               
                    <?php  
                      include_once("caracteristicas.php");
                    ?>
                    
                  <center>
                    <a class="btn btn-lg btn-primary" href="my-drive/index.php" role="button">Ir a Drive</a>
                  </center>  
                 
                  </div>

                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->

              
          </div><!-- /.modal -->
          </td>
      </center> 
      <br>
      <br>
      <hr>
      <h6>&nbsp;&nbsp;&nbsp;&nbsp;Bogle Drive &nbsp;&nbsp;&nbsp;&nbsp;Privacidad y Condiciones&nbsp;&nbsp;&nbsp;&nbsp;Ayuda</h6>

    
  </body>
</html>
