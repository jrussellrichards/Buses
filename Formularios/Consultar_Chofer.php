<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>CONSULTAS CHOFER</title>

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
  		<center><h1>CONSULTAS</h1></center><br>
		<form method='POST' action='Consultar_chofer.php'>
			<div>
				<label for="Consultar_Choferes">Seleccione metodo de busqueda</label><br>
				<select name="Consultar_Choferes" id="Consultar_Choferes">
			        <option value="RUT">R.U.T.</option>
			        <option value="Nombre">Nombre</option>
			    </select>
			    			<div>
				<label for="RUT">RUT</label>
					<input type="text" name="Rut_Chofer" placeholder= "sin puntos y con guion" class="form-control" >
            </div>
            <div>
				<label for="Nombre1">Nombre</label>
					<input type="text" name="Nombre1" placeholder= "Primer Nombre" class="form-control" >
            </div>
            <div>
				<label for="Apellido1">Apellido</label>
					<input type="text" name="Apellido1" placeholder= "Apellido Paterno" class="form-control" >
            </div>
            <br>

			    <center><input type="submit" value="Consultar" class="btn btn-success" name="btn2"></center>
			</div>
		</div>
		</div>
		</form>
	<?php
		if (isset($_POST['btn2']))
		 {
			$Seleccion = $_POST['Consultar_Choferes'];
			$Rut_Chofer = $_POST['Rut_Chofer'];
			$Nombre1 = $_POST['Nombre1'];
			$Apellido1 = $_POST['Apellido1'];
			include("abrir_conexion.php");
						if ($Seleccion == 'RUT') {

					         $Cons_chofer = "SELECT * FROM choferes WHERE '$Rut_Chofer' = Rut_Chofer ";
					          $resultados = mysqli_query($conexion,$Cons_chofer);

					           
					             		?>
									         <table class="table">
									        <tr>
									          <th>RUT</th>
									          <th>Primer Nombre</th>  
									          <th>Segundo Nombre</th>
									          <th>Apellido Paterno</th>
									          <th>Apellido Materno</th> 
									          <th>Direccion</th> 
									          <th>Telefono</th> 
									          <th>Estado</th>
									        </tr>  
									        <?php

									          while($Cons_chofer = mysqli_fetch_array($resultados))
									          {
									                 echo "<tr>";
									                 echo "<td>" . $Cons_chofer["Rut_Chofer"] . "</td>";
									                 echo "<td>" . $Cons_chofer["Nombre1"] . "</td>";
									                 echo "<td>" . $Cons_chofer["Nombre2"] ."</td>";
									                 echo "<td>" . $Cons_chofer["Apellido1"] . "</td>";
									                 echo "<td>" . $Cons_chofer["Apellido2"] . "</td>";
									                 echo "<td>" . $Cons_chofer["Direccion"] . "</td>";
									                 echo "<td>" . $Cons_chofer["Telefono"] . "</td>";
									                 echo "<td>" . $Cons_chofer["Estado"] . "</td>";
									                 echo "</tr>";
									                              
									          }

      									  }else{

      									  		 $Cons_chofer = "SELECT * FROM choferes WHERE '$Nombre1' = Nombre1 and '$Apellido1'= Apellido1";
					        				     $resultados = mysqli_query($conexion,$Cons_chofer);

					           
					             		?>
									         <table class="table">
									        <tr>
									          <th>RUT</th>
									          <th>Primer Nombre</th>  
									          <th>Segundo Nombre</th>
									          <th>Apellido Paterno</th>
									          <th>Apellido Materno</th> 
									          <th>Direccion</th> 
									          <th>Telefono</th> 
									          <th>Estado</th>
									        </tr>  
									        <?php

									          while($Cons_chofer = mysqli_fetch_array($resultados))
									          {
									                 echo "<tr>";
									                 echo "<td>" . $Cons_chofer["Rut_Chofer"] . "</td>";
									                 echo "<td>" . $Cons_chofer["Nombre1"] . "</td>";
									                 echo "<td>" . $Cons_chofer["Nombre2"] ."</td>";
									                 echo "<td>" . $Cons_chofer["Apellido1"] . "</td>";
									                 echo "<td>" . $Cons_chofer["Apellido2"] . "</td>";
									                 echo "<td>" . $Cons_chofer["Direccion"] . "</td>";
									                 echo "<td>" . $Cons_chofer["Telefono"] . "</td>";
									                 echo "<td>" . $Cons_chofer["Estado"] . "</td>";
									                 echo "</tr>";
									                              
									          }

      									  	}
					             




						


		}
   ?>
	
	<div class="col-md-4"></div>

</body>
</html>
