<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost";    // sera el valor de nuestra BD 
	$basededatos = "proyecto_ti";    // sera el valor de nuestra BD 
	$usuariodb = "root";    // sera el valor de nuestra BD 
	$clavedb = "";    // sera el valor de nuestra BD 

	//Lista de Tablas
	$tabla1 = "choferes";
	$tabla2 = "buses";
	$tabla3 = "clientes";
	$tabla4 = "particulares";
	$tabla5 = "empresas";
	$tabla6 =  "mecanicos";	   // tabla de usuarios
	$tabla7 =  "necesita";
	$tabla8 =  "viajes";

	

	error_reporting(0); //No me muestra errores
	
	$conexion = mysqli_connect("localhost", "root", "", "proyecto_ti");


	if ($conexion->connect_error) {
	    echo "Nuestro sitio experimenta fallos....";
	     die("Connection failed: " . $conexion->connect_error);

	    exit();
	}

?>