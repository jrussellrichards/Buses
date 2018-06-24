
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
  <body>
        <?php
 include_once("./header.php");

?>
	<body style="background-color:#7DECB6;">
    <!--COMIENZA FORMULARIO DE REGISTRO-->
    <div class="row">
 	 <div class="col-md-4"></div>
	 <div class="col-md-4">
  		<center><h1>INGRESE NUEVO CLIENTE</h1></center>
  		<h2 class="form__titulo"> Registre la empresa</h2><br>
  		<form method='POST' action='formulario_empresas.php'>

			<div class="form-group">
				<label for="Rut_Cliente">Rut Cliente</label>
					<input type="text" name="Rut_Cliente" placeholder= "R.U.T. sin puntos y con guion" class="form-control" id="Rut_Cliente" required>
			</div>
			<div>
				<label for="Direccion">Direccion</label>
					<input type="text" name="Direccion" placeholder= "Direccion" class="form-control" id="Direccion" required>
			</div>
			<div>
				<label for="Correo">Correo</label>
					<input type="email" name="Correo1" placeholder= "ej: mail@gmail.com" class="form-control" id="Correo1">
			</div>
			<div>
				<label for="Correo2">Correo de respaldo</label>
					<input type="email" name="Correo2" placeholder= "mail@gmail.com" class="form-control" id="Correo2" required>
			</div>
			<div>
				<label for="Telefono1">Telefono</label>
					<input type="integer" name="Telefono1" placeholder= "sin simbolo +" class="form-control" id="Telefono1" required>
			</div>
			<div>
				<label for="Telefono2">Telefono de respaldo</label>
					<input type="integer" name="Telefono2" placeholder= "Sin simbolo +" class="form-control" id="Telefono2" required>
			</div>
            <div>
        <label for="Razon_social">Razon Social</label>
          <input type="text" name="Razon_social" placeholder= "escriba su nombre registrado" class="form-control" id="Razon_social" required>
      </div>
                  <div>
        <label for="Giro">Giro</label>
          <input type="text" name="Giro" placeholder= "Ingrese su rubro" class="form-control" id="Giro" required>
      </div>

				<br>
			   <center><input type="submit" value="INGRESAR" class="btn btn-success" name="btn3"></center>
			
		</form>
	<?php
		if (isset($_POST['btn3']))
		 {
			include("abrir_conexion.php");

			$Rut_Cliente =$_POST['Rut_Cliente'];
			$Direccion = $_POST['Direccion'];
			$Correo1 = $_POST['Correo1'];
			$Correo2 = $_POST['Correo2'];
     		$Telefono1 = $_POST['Telefono1'];
      		$Telefono2 = $_POST['Telefono2'];
			$Razon_social = $_POST['Razon_social'];
			$Giro = $_POST['Giro'];


			
		$sql3 = "INSERT INTO $tabla3 (Rut_Cliente,Direccion,Correo1,Correo2,Telefono1,Telefono2)VALUES ('$Rut_Cliente','$Direccion','$Correo1','$Correo2','$Telefono1','$Telefono2')";
   		 $sql4 = "INSERT INTO $tabla5 (Rut_Cliente,Razon_social,Giro) VALUES ('$Rut_Cliente','$Razon_social','$Giro')";

		if ($conexion->query($sql3) === TRUE) {
			echo "Nuevo registro creado";
		}else {
			echo "Error: " .$sql3. "<br>" .$conexion->error;
		}

			
          if ($conexion->query($sql4) === TRUE) {
      echo "Nuevo registro creado";
    }else {
      echo "Error: " .$sql4. "<br>" .$conexion->error;
    }

      include("cerrar_conexion.php");
}
      
		?>
	</div>
	<div class="col-md-4"></div>
</div>
</body>
</html>
