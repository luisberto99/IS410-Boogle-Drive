<?php
  include ("class/class-conexion.php");
  $conexion = new Conexion();
  $conexion->establecerConexion();
  $resultadoPais=$conexion->ejecutarInstruccion("SELECT codigo_pais, nombre_pais FROM tbl_pais");
  $resultadoPreguntas=$conexion->ejecutarInstruccion("select * from tbl_preguntas");
  $resultadoPreguntas2=$conexion->ejecutarInstruccion("select * from tbl_preguntas");
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
       				<input type="text" id="txt-correo" class="form-control" placeholder="Correo electronico" data-toggle="popover" onclick="pop();"  data-content="Correo de la forma: Name@example.xxx" data-placement="left" data-container="body" >
       				</td>
       			</tr>
       			<tr>
       			<td id="preguntass">
       				<label>Preguntas de seguridad:</label>
       					<select id="slc-preguntas" class="form-control" >
                           <option value="0">--Seleccione--</option>
                           <?php
                                 while ($fila=$conexion->obtenerRegistro($resultadoPreguntas)) {
                                   echo '<option value="'.$fila["codigo_pregunta"].'">'.utf8_encode($fila["pregunta"]).'</option>';
                                 }
                                  
     
                            ?> 
                         </select>
       				</td>
       			</tr>
       			<tr>
       				<td id="respuesta1">
       					<input type="text" id="txt-respuesta1" class="form-control" placeholder="Respuesta" data-html="true" data-toggle="popover" onclick="pop();" data-content="-Usa [2-12] caracteres <br>-Solo usa espacio y letras" data-placement="left" data-container="body">
       					<br>
       				</td>
       			</tr>
       			<tr>
       				<td id="22">
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
       				<td id="respuesta2">
       					<input type="text" id="txt-respuesta2" class="form-control" placeholder="Respuesta" data-html="true" data-toggle="popover" onclick="pop();" data-content="-Usa [2-12] caracteres <br>-Solo usa espacio y letras" data-placement="left" data-container="body">
       					
       				</td>
       			</tr>
       			<tr>
       				<td>
       					<div id="resultado">
		        			
		        		</div>
		        		<br>
       				</td>
       			</tr>
       			
       			<tr>
       				<td>
       					<input type="submit" id="btn-password" onclick="pop();"  name="btn-password" value="Siguiente paso" class="btn btn-primary" > 
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
                            	<td>
                            		<input type="hidden" id="oculto">
                            	</td>
                            </tr>
                            	<tr>
                            		<td id="contrasena" >
                            			<label>Contraseña:</label>
                            			<input type="password" id="txt-contrasena" class="form-control" onclick="pop();" placeholder="Contraseña" data-toggle="popover" data-html="true" title="Seguridad de la contraseña:" data-content="-Usa [4-12] caracteres <br>
                    -Usa una letra mayuscula y una miniscula como minimo <br>
                    -Un numero y un carater especial [?,*,!,&,%,$,@] como minimo <br>-Asegurate de que las contraseñas coincidan" data-placement="left" data-container="body">
                            		</td>
                            	</tr>
                            	<tr>
                            		<td id="confirContrasena">
                            			<label> Confirmar Contraseña:</label>
                            			<input type="password" id="txt-confirContrasena" onclick="pop();" placeholder="Confirmar contraseña" class="form-control" data-toggle="popover" data-html="true" title="Seguridad de la contraseña:" data-content="-Usa [4-12] caracteres <br>
                    -Usa una letra mayuscula y una miniscula como minimo <br>
                    -Un numero y un carater especial [?,*,!,&,%,$,@] como minimo <br>-Asegurate de que las contraseñas coincidan" data-placement="left" data-container="body" >
                            			
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
	<script type="text/javascript" src="js/registro.js"></script>
	<script type="text/javascript" src="js/renovarpassword.js"></script>
	<script type="text/javascript">
      $(function () {
    $('[data-toggle="popover"]').popover();
      });
    </script>
</body>
</html>