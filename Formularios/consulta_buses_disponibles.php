<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Travel LAG</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">




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
    <!--COMIENZA CONSULTA-->
    <div class="row">
 	 <div class="col-md-4"></div>
	 <div class="col-md-4">
  		<center><h1>BUSCAR BUS</h1></center>
  		<h2 class="form__titulo"> Ingrese los parametros</h2><br>
  		<form method='POST' action='Consulta_buses_disponibles.php'>

			<div class="form-group">
				<label for="Fecha_inicio_viaje">Fecha de inicio de viaje</label>
					<input type="date" name="Fecha_inicio_viaje" placeholder= "Fecha inicio viaje" class="form-control" id="Fecha_inicio_viaje" required>
			</div>
			<div>
				<label for="Hora_Fin_viaje">Hora de inicio de viaje</label>
					<input type="time" name="Hora_Fin_viaje" class="form-control" id="Hora_Fin_viaje" required>
			</div>
			<div>
				<label for="Fecha_fin_viaje">Fecha de fin del viaje</label>
					<input type="date" name="Fecha_fin_viaje" class="form-control" id="Fecha_fin_viaje" required>
			</div>
      <div>
        <label for="Hora_inicio_viaje">Hora de inicio del viaje</label>
          <input type="time" name="Hora_inicio_viaje" class="form-control" id="Hora_inicio_viaje" required>
      </div>
            <div>
        <label for="Capacidad">Capacidad</label>
          <input type="integer" name="Capacidad" class="form-control" id="Capacidad" required>
      </div>


				<br>
			   <center><input type="submit" value="Consultar" class="btn btn-info" name="btn2"></center>
			
		</form>
	<?php
		if (isset($_POST['btn2']))
		 {
			include("abrir_conexion.php");

			$Fecha_inicio_viaje = $_POST['Fecha_inicio_viaje'];
			$Hora_Fin_viaje = $_POST['Hora_inicio_viaje'];
			$Fecha_fin_viaje = $_POST['Fecha_fin_viaje'];
			$Hora_Fin_viaje = $_POST['Hora_Fin_viaje'];
      $Capacidad = $_POST['Capacidad'];
      $disponibles = "SELECT Patente FROM buses  WHERE  Capacidad >= '$Capacidad' -
      (SELECT buses.Patente,buses.Capacidad FROM buses join necesita join viajes WHERE  necesita.ID = viajes.ID and buses.Patente = necesita.Patente  and (('$Fecha_inicio_viaje'<Fecha_inicio_viaje and Fecha_fin_viaje < '$Fecha_fin_viaje') or (('$Fecha_fin_viaje'< Fecha_inicio_viaje and Fecha_inicio_viaje > '$Fecha_inicio_viaje') or ('$Fecha_inicio_viaje' < Fecha_fin_viaje and Fecha_inicio_viaje < '$Fecha_fin_viaje')))) ";
 		$resultados = mysqli_query($conexion,$disponibles);
    

            echo 
              "
          <table width=\"100%\" border=\"2\">
            <tr>
              <td><b><center>Patente</center></b></td>
              <td><b><center>Capacidad</center></b></td>
            </tr>
            </table>
            ";

    while($disponibles = mysqli_fetch_array($resultados))
    {
      echo "
          <table width=\"100%\" border=\"2\">
            <tr>
              <td>".$disponibles['Patente']."</td>
              <td><center>".$disponibles['Capacidad']."</center></td>
            </tr>
          </table>
        ";
    }

  

  			include("cerrar_conexion.php");

  			}
		?>
	</div>
	<div class="col-md-4"></div>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
