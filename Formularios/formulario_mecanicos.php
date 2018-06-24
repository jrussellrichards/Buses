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
  		<center><h1>INGRESE NUEVO MECANICO</h1></center>
  		<h2 class="form__titulo"> Registra al nuevo colaborador</h2><br>
  		<form method='POST' action='formulario_mecanicos.php'>

			<div class="form-group">

				<label for="Rut_Mecanico">Rut_Mecanico</label>
					<input type="text" name="Rut_Mecanico" placeholder= "R.U.T. Mecanico" class="form-control" id="Rut_Mecanico" required>
            </div>
            
			<div>
				<label for="Inicio_Contrato">Inicio contrato</label>
					<input type="date" name="Inicio_Contrato" placeholder= "Fecha inicio" class="form-control" id="Inicio_contrato" required>
			</div>
			<div>
				<label for="Nombre1">Primer Nombre</label>
					<input type="text" name="Nombre1" placeholder= "Primer nombre" class="form-control" id="Nombre1">
            </div>
            
            <div>
				<label for="Nombre2">Segundo Nombre</label>
					<input type="text" name="Nombre2" placeholder= "Segundo nombre" class="form-control" id="Nombre2">
			</div>

			<div>
				<label for="Apellido1">Apellido Paterno</label>
					<input type="text" name="Apellido1" placeholder= "Apellido Paterno" class="form-control" id="Apellido1" required>
			</div>
			<div>
				<label for="Apellido2">Apellido Materno</label>
					<input type="text" name="Apellido2" placeholder= "Apellido Materno" class="form-control" id="Apellido2" required>
            </div>

            <div>
				<label for="Telefono">Telefono</label>
					<input type="integer" name="Telefono" placeholder= "Telefono" class="form-control" id="Telefono" required>
            </div>
            
			<div>
				<label for="Nombre1">Direccion</label>
					<input type="text" name="Direccion" placeholder= "Direccion" class="form-control" id="Direccion" required>
			</div>
                <br>
			   <center><input type="submit" value="INGRESAR" class="btn btn-success" name="btn1"></center>
			
		</form>
	<?php
		if (isset($_POST['btn1']))
		 {
			include("abrir_conexion.php");

			$Rut_mecanico =$_POST['Rut_Mecanico'];
			$Inicio_contrato = $_POST['Inicio_Contrato'];
            $Nombre1 = $_POST['Nombre1'];
            $Nombre2 = $_POST['Nombre2'];
			$Apellido1 = $_POST['Apellido1'];
            $Apellido2 = $_POST['Apellido2'];
            $Telefono = $_POST['Telefono'];
			$Direccion = $_POST['Direccion'];

			
		$sql = "INSERT INTO $tabla6 VALUES ('$Rut_mecanico','$Inicio_contrato','$Nombre1','$Nombre2','$Apellido1','$Apellido2','$Telefono','$Direccion')";

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
