<?php
	require("conexion.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Inicio de sesion</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link href="css/signin.css" rel="stylesheet">
</head>

  <body>
    <div class="container">
		<form action="MotXApp.php" class="form-signin" method="POST">
			<h2 class="form-signin-heading">Inicie Sesi&oacute;n</h2>
			<div class="form-group">
				<div class="input-group">
					<label for="Correo" class="sr-only">Correo</label>
					<div class="input-group-addon">@</div>
					<input type="email" id="Correo" class="form-control" placeholder="Correo" required autofocus>
				</div>
			</div>
			<label for="Contrasena" class="sr-only">Contraseña</label>
			<input type="password" id="Contrasena" class="form-control" placeholder="Contrase&ntilde;a" required>
			<div class="checkbox">
			  <label>
			    <input type="checkbox" value="remember-me"> Recu&eacute;rdame
			  </label>
			</div>
			<button class="btn btn-lg btn-danger btn-block" type="submit" name="iniciosesion">Iniciar Sesi&oacute;n</button>
		</form>
		<form action="registro.php" class="form-signin" method="POST">
			<h2 class="form-signin-heading">O reg&iacute;strese</h2>
			<div class="form-group">
				<label for="PrimerNombre">Primer Nombre:</label>
				<input class="form-control" id="PrimerNombre" name="PrimerNombreRegistro" type="text" placeholder="Primer Nombre:">
			</div>
			<div class="form-group">
				<label for="SegundoNombre">Segundo Nombre:</label>
				<input class="form-control" id="SegundoNombre" name="SegundoNombreRegistro" type="text" placeholder="Segundo Nombre:">
			</div>
			<div class="form-group">
				<label for="PrimerApellido">Primer Apellido:</label>
				<input class="form-control" id="PrimerApellido" name="PrimerApellidoRegistro" type="text" placeholder="Primer Apellido:">
			</div>
			<div class="form-group">
				<label for="SegundoApellido">Segundo Apellido:</label>
				<input class="form-control" id="SegundoApellido" name="SegundoApellidoRegistro" type="text" placeholder="Segundo Apellido:">
			</div>
			<div class="form-group">
				<label for="Usuario">Usuario:</label>
				<input class="form-control" id="Usuario" name="UsuarioRegistro" type="text" placeholder="Usuario:">
			</div>
			<div class="form-group">		
				<div class="input-group">
					<label for="CorreoReg" class="sr-only">Correo</label>
					<div class="input-group-addon">@</div>
					<input type="email" id="CorreoReg" name="CorreoRegistro" class="form-control" placeholder="Correo" required autofocus>
				</div>
			</div>
			<label for="ContrasenaReg" class="sr-only">Contraseña</label>
			<input type="password" id="ContrasenaReg" name="ContrasenaRegistro" class="form-control" placeholder="Contrase&ntilde;a" required>
			<button class="btn btn-lg btn-info btn-block" type="submit" name="registro">Registr&aacute;rse</button>
		</form>
    </div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
