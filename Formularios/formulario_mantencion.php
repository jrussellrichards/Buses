<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Formulario de registro</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carrusel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->

    
	<body style="background-color:#7DECB6;">
        <?php
 include_once("./header.php");

?>
    <!--COMIENZA FORMULARIO DE REGISTRO-->
    <div class="row">
 	 <div class="col-md-4"></div>
	 <div class="col-md-4">
  		<center><h1>INGRESE NUEVA MANTENCIÓN</h1></center>
  		<h2 class="form__titulo"> Registra la nueva mantención</h2><br>
  		<form method='POST' action='formulario_mantencion.php'>

			<div class="form-group">

				<label for="Rut_Mecanico">Patente</label>
					<input type="text" name="patente" placeholder= "patente" class="form-control" id="Rut_Mecanico" required>
            </div>
            
			<div>
				<label for="Inicio_Contrato">Mecánico</label>
					<input type="text" name="mecanico" placeholder= "mecanico" class="form-control" id="Inicio_contrato" required>
			</div>
			<div>
				<label for="Nombre1">Fecha inicio</label>
					<input type="date" name="fecha_inicio" placeholder= "fecha_inicio" class="form-control" id="Nombre1">
            </div>
            
            <div>
				<label for="Nombre2">Hora inicio</label>
					<input type="time" name="hora_inicio" placeholder= "hora_inicio" class="form-control" id="Nombre2">
			</div>

			
			   <center><input type="submit" value="INGRESAR" class="btn btn-success" name="btn1"></center>
			
		</form>
	<?php
		if (isset($_POST['btn1']))
		 {
			include("abrir_conexion.php");

			$patente =$_POST['patente'];
			$mecanico = $_POST['mecanico'];
            $fecha_inicio = $_POST['fecha_inicio'];
            $hora_inicio = $_POST['hora_inicio'];
			
        $insert_fecha = "INSERT INTO fecha (Fecha_inicio,Hora_inicio) VALUES ('$fecha_inicio','$hora_inicio')";
        $conexion->query($insert_fecha); 
           
			
		$sql = "INSERT INTO arreglado (Patente,Rut_Mecanico,fecha_inicio,hora_inicio,estado) VALUES ('$patente','$mecanico',
		'$fecha_inicio','$hora_inicio',0)";

		if ($conexion->query($sql) === TRUE) {
			echo "Nuevo registro creado";
		}else {
			echo "Error: " .$sql. "<br>" .$conexion->error;
		}

			include("cerrar_conexion.php");

			}
		?>
	</div>
	<div class="col-md-4"></div>
</div>
</body>
</html>
