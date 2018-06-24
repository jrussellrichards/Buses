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
  		<center><h1>INGRESE NUEVO REPUESTO</h1></center>
  		
  		<form method='POST' action='formulario_repuestos.php'>

			<div class="form-group">

				<label for="Rut_Mecanico">Nombre</label>
					<input type="text" name="Nombre" placeholder= "Nombre" class="form-control"  required>
            </div>
            
			<div>
				<label for="Inicio_Contrato">Marca</label>
					<input type="text" name="Marca" placeholder= "Marca" class="form-control"  required>
			</div>
			<div>
				<label for="Nombre1">Stock</label>
					<input type="text" name="Stock" placeholder= "Stock" class="form-control" >
            </div>
            
            <div>
				<label for="Nombre2">Punto de Reorden</label>
					<input type="text" name="Punto_reorden" placeholder= "cantidad minima" class="form-control" >
			</div>

			
                <br>
			   <center><input type="submit" value="INGRESAR" class="btn btn-success" name="btn1"></center>
			
		</form>
	<?php
		if (isset($_POST['btn1']))
		 {
			include("abrir_conexion.php");

			$Nombre=$_POST["Nombre"];
            $Marca=$_POST["Marca"];
            $Stock=$_POST["Stock"];
            $Punto_reorden=$_POST["Punto_reorden"];
			
 
  $sql3="Select count(*) as num from repuestos where Nombre='$Nombre' and Marca='$Marca'";
$res=$conn->query($sql3);
$row= mysqli_fetch_array($res);
if ($row['num'] = 0){
  

 $sql="INSERT INTO repuestos (Nombre, Marca, Stock, Punto_reorden) VALUES ('$Nombre','$Marca','$Stock','$Punto_reorden')";

    if ($conexion->query($sql) === TRUE) {
      echo "Nuevo registro creado";
    }else {
      echo "Error: " .$sql. "<br>" .$conexion->error;
    }
}

else
{ $sql4="Select stock from repuestos where Nombre='$Nombre' and Marca='$Marca'";
$res=$conn->query($sql4);
$row= mysqli_fetch_array($res);

  $cantidad= $row['stock'] + $stock;
  $sql5= "UPDATE  repuestos  SET cantidad='$cantidad'";
  if ($conexion->query($sql5) === TRUE) {
      echo " actualizado";
    }else {
      echo "Error: " .$sql. "<br>" .$conexion->error;
    }
}

                                          
			include("cerrar_conexion.php");

			}
		?>
	</div>
	<div class="col-md-4"></div>
</div>
</body>
</html>
