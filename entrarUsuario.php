


<!DOCTYPE html>
<html >
<head>

	<title>Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="icon" href="img/logo.ico" type="image/x-icon">
	<style >
		
		#div-formulario1{
			
			padding:80px; 
			

			border:1px #F0F8FF solid; 
		}

	</style>
	
</head>
<body>
		<div class="container">
				<center><h1> <strong><img src="img/google.png" style="width:150px"></strong> </h1></center>
				<center><h1>Una Cuenta. Todo Boogle</h1></center>
				<center><h4>Inicia sesion para acceder a Boogle Drive</h4></center>
				</div>

		<center>
					<div class= "well" id = "div-formulario1"  style="width:400px" style="height: 500px">
						<td colspan="2"><label for="inputEmail" class="sr-only">Correo Electronico</label>
		        		<input type="Correo" id="inputCorreo" class="form-control" placeholder="correo Electronico" required autofocus></td>
						<br>
						<br>
						<label for="inputPassword" class="sr-only">Contraseña</label>
		        		<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
		        		<br>
		        		<div id="resultado">
		        			
		        		</div>
		        		<br>
		        		<input type="submit" id="login"  value="Ingresar" class="btn btn-primary btn btn-lg" >

		        		<br>
		        		<a href="nuevaContrasena.php">¿Olvidaste tu contraseña?</a><br>

					</div>
					<a href="indexCreaCuenta.php">Crear Una Cuenta</a><br>
				</center>
	

<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script src="js/IniciarSesion.js"></script>
</body>
</html>