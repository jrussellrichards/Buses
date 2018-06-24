<!DOCTYPE html>
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
  <body  style="background-color:#7DECB6;>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><font size="5">Travel LAG</a></font>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="../indexproyecto.html">Inicio</a></li>
                <li><a href="#about">About</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultar<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Buses</a></li>
                    <li><a href="#">Choferes</a></li>
                    <li><a href="#">Mecanicos</a></li>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registrar <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="formulario_buses.html">Buses</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a  href="formulario_choferes.html">Choferes</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Clientes</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="formulario_mecanicos.html">Mecanicos</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Repuestos</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
    <div>

      <center><b><label>Elija la consulta de planilla que desea consultar</label></b></center>
      <form method="POST" action="consulta_planillas.php" class="form-inline">
      <label for="eleccion">Eleccion</label>
      <select class="form-control" name="eleccion">
        <option>Buses</option>
        <option>Mecanicos</option>
        <option>Choferes</option>
      </select>
     <input type="submit" value="Consultar" class="btn btn-success" name="btn1">
   </form>
   <center><h2>
  <?php
    if (isset($_POST['btn1']))
     {
      include("abrir_conexion.php");
      $seleccion = $_POST['eleccion'];
      $consultabuses = "SELECT Patente, Modelo,Año,Capacidad,kilometraje FROM buses ";
      $resultados = mysqli_query($conexion,$consultabuses);

      switch ($seleccion)
       {
        case 'Buses':

            echo 
              "
          <table width=\"100%\" border=\"2\">
            <tr>
              <td><b><center>Patente</center></b></td>
              <td><b><center>Modelo</center></b></td>
              <td><b><center>Año</center></b></td>
              <td><b><center>Capacidad</center></b></td>
              <td><b><center>Kilometraje</center></b></td>
            </tr>
            </table>
            ";

    while($consultabuses = mysqli_fetch_array($resultados))
    {
      echo "
          <table width=\"100%\" border=\"2\">
            <tr>
              <td>".$consultabuses['Patente']."</td>
              <td>".$consultabuses['Modelo']."</td>
              <td>".$consultabuses['Año']."</td>
              <td><center>".$consultabuses['Capacidad']."</center></td>
              <td>".$consultabuses['Kilometraje']."</td>
            </tr>
          </table>
        ";

        include("cerrar_conexion.php");

        }
          break;
      }

    ?>
    </h2></center>

    </div>
   </body>
  </html>
