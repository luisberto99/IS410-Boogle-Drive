<?php
  include ("class/class-conexion.php");
  $conexion = new Conexion();
  $conexion->establecerConexion();

?>
<!DOCTYPE html>
<html>
<head>
	<title>NewPassword</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/personalizado.css">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="col-lg-12 col-md-12 col-sm-12">
           <a href="index.html"><img src="img/boogledrive.jpg" style="width:200px; padding: 10px; margin:10px;"></a>
           <span style="float:right; padding-top:12px; margin:10px;">
              <a href="entrarUsuario.php" ><button id="newsesion">Iniciar sesion</button></a>
           </span>
           <hr style="margin-top: 0px">
         </div>    
         
       </div>
       	<div class="col-lg-12 col-md-12 col-sm-12">
     <center>
       	<h1><strong>Renovar tu contraseña de Boogle Drive</strong></h1>

       	<div class="well" style="width: 600px; text-align: left;" style="height: 400" style="margin: 10px">
         	<center><p style="font-size: 25px"><strong>Responde tus preguntas de seguridad</strong></p></center>
       		<table style="width: 500px" style="height: 400" style="margin: 10px">
          
       			<tr>
       			    <td id="correo">
       				<label >Correo Electronico:</label>
       				<input type="text" id="txt-correo" class="form-control"  placeholder="Correo electronico" data-toggle="popover" onclick="pop();"  data-content="Correo de la forma: Name@example.xxx" data-placement="left" data-container="body" >
              
       				</td>
       			</tr>
            <tr>
              <td>
                <div id="resultado1">
                  
                </div>
                <br>
              </td>
            </tr>
            <tr>
              <td>
                <input type="submit" id="btn-correo" onclick="pop();"  name="btn-correo" value="Siguiente paso" class="btn btn-primary" > 
              </td>
            </tr>
            <tr>
                              <td>
                                <input type="hidden" name="valor" id="oculto" value="0">
                              </td>
                            </tr>
       			<tr>
       			<td id="preguntass" style="display: none;">
       				<label>Preguntas de seguridad:</label>
       					<select id="slc-preguntas" class="form-control" >
                           
                         </select>
       				</td>
       			</tr>
       			<tr>
       				<td id="respuesta1" style="display: none;">
       					<input type="text" id="txt-respuesta1" class="form-control" placeholder="Respuesta" data-html="true" data-toggle="popover" onclick="pop();" data-content="-Usa [2-12] caracteres <br>-Solo usa espacio y letras" data-placement="left" data-container="body">
       					<br>
       				</td>
       			</tr>
       			<tr>
       				<td id="22" style="display: none;" >
       					 <select id="slc-2" class="form-control" >
                          
                    </select>
       				</td>
       			</tr>
       			<tr>
       				<td id="respuesta2" style="display: none;">
       					<input type="text" id="txt-respuesta2" class="form-control"  placeholder="Respuesta" data-html="true" data-toggle="popover" onclick="pop();" data-content="-Usa [2-12] caracteres <br>-Solo usa espacio y letras" data-placement="left" data-container="body">
       					
       				</td>
       			</tr>
       			<tr>
       				<td>
       					<div id="resultado2">
		        			
		        		</div>
		        		<br>
       				</td>
       			</tr>
       			
       			<tr>
       				<td id="btn-passsword" style="display: none;">
       					<input type="submit" id="btn-password" onclick="pop();"  name="btn-password" value="Siguiente paso" class="btn btn-primary" > 
                <input type="submit" id="btn-recargar" style="margin-left: 230px;" onclick="window.location.reload();"  name="btn-password" value="Volver a Empezar" class="btn btn-warning" > 
       				</td>
       			</tr>
       		</table>
       		</center>
       	</div>
       	</div>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="modal-password">
              
              <div class="modal-dialog" role="document"  style="width:900px" style="height: 800px" >
                <div class="modal-content">
                   
                  <div class="modal-body">
                  <center>
                  <div class="well" style="width: 600px; text-align: left;" style="height: 400" style="margin: 10px">
                      <center><p style="font-size: 25px"><strong>Ingresa una nueva contraseña</strong></p></center>
                            <table style="width: 500px" style="height: 400" style="margin: 10px">
                            
                            	<tr>
                            		<td id="contrasena" >
                            			<label>Contraseña:</label>
                            			<input type="password" id="txt-contrasena" class="form-control" onclick="pop();" placeholder="Contraseña" data-toggle="popover" data-html="true" title="Seguridad de la contraseña:" data-content="-Usa [8-12] caracteres <br>
                    -Usa una letra mayuscula y una miniscula como minimo <br>
                    -Un numero como minimo <br>-Asegurate de que las contraseñas coincidan" data-placement="left" data-container="body">
                            		</td>
                            	</tr>
                            	<tr>
                            		<td id="confirContrasena">
                            			<label> Confirmar Contraseña:</label>
                            			<input type="password" id="txt-confirContrasena" onclick="pop();" placeholder="Confirmar contraseña" class="form-control" data-toggle="popover" data-html="true" title="Seguridad de la contraseña:" data-content="-Usa [8-12] caracteres <br>
                    -Usa una letra mayuscula y una miniscula como minimo <br>
                    -Un numero como minimo <br>-Asegurate de que las contraseñas coincidan" data-placement="left" data-container="body" >
                            			
                            		</td>
                            	</tr>
                            	<tr>
                            		<td>
                            			<div id="resultado2">
                            				
                            			</div><br>
                            		</td>
                            	</tr>
                            	<tr>
       				<td>
       					<input type="submit" id="btn-passwordConfir" onclick="pop();"  name="btn-password" value="Siguiente paso" class="btn btn-primary" > 
       				</td>
       			</tr>
                            </table>
                            </div>
                            </center>
                      </div>
                       <div class="modal-footer">
                          <td colspan="2">
                              <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                          </td>
                      </div> 
                </div><!-- /.modal-content -->
                
              </div><!-- /.modal-dialog --> 
               
          </div><!-- /.modal -->

<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/renovarpassword.js"></script>
	<script type="text/javascript">
      $(function () {
    $('[data-toggle="popover"]').popover();
      });

      
    </script>
</body>
</html>