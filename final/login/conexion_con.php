<?php
$conexion= new mysqli("localhost","root","","login");
mysqli_set_charset($conexion,"utf8");

if ($conexion)
	{
	//echo "Conexion exitosa";
	}
	else
	{
	//echo "Conexion fallida";
	}
?>