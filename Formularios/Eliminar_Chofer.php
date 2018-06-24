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
	<body>
    <!--COMIENZA FORMULARIO DE REGISTRO-->
        <div class="row">
   <div class="col-md-4"></div>
   <div class="col-md-4">
  <h2 class="form__titulo"> Eliminar de planilla a chofer</h2><br>

    		<form method='POST' action='Eliminar_Chofer.php'>
            <div class="form-group">
              <label for="Rut_Chofer">Rut_Chofer</label>
                <input type="text" name="Rut_Chofer" placeholder= "R.U.T. chofer" class="form-control" id="Rut_Chofer" required>
            </div>

    		<center><input type="submit" value="Elimar chofer por R.U.T." class="btn btn-success" name="btn"></center>
    		</form>
	<?php

		if (isset($_POST['btn']))
		 {
			include("abrir_conexion.php");

        $Rut_chofer =$_POST['Rut_Chofer'];

        $sql = "DELETE  From choferes WHERE Rut_Chofer = '$Rut_chofer'";

      if ($conexion->query($sql) === TRUE) {
            echo "Registro Eliminado";
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
