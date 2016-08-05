<?php
	require("conexion.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
</head>
<body>
	<?php
		if(isset($_POST['registro']))
		{
			$PrimerNombre = $_POST['PrimerNombreRegistro'];
			$SegundoNombre = $_POST['SegundoNombreRegistro'];
			$PrimerApellido = $_POST['PrimerApellidoRegistro'];
			$SegundoApellido = $_POST['SegundoApellidoRegistro'];
			$Usuario = $_POST['UsuarioRegistro'];
			$Correo = $_POST['CorreoRegistro'];
			$Contrasena = $_POST['ContrasenaRegistro'];

			$sql="INSERT INTO `usuarios` (`IDUsuario`, `PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `Usuario`, `Correo`, `Contrasena`) VALUES (NULL, '$PrimerNombre', '$SegundoNombre', '$PrimerApellido', '$SegundoApellido', '$Usuario', '$Correo', '$Contrasena')";

			$result=mysqli_query($con,$sql);

			print($result) ;
		}
	?>				
</body>
</html>