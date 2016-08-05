<?php
	$host="localhost";
	$user="root";
	$password="";
	$db="dbmotxapp";

	$con=mysqli_connect($host, $user, $password);
	if(mysqli_connect_errno())
	{
		echo "No se logro conectar a la base de datos";
	}
	mysqli_set_charset($con,"UTF8");

	mysqli_select_db($con, $db) or die ("error al conectar a la base de datos");
?>