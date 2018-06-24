<!DOCTYPE html>
<html>

	<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<link rel="stylesheet" href="estilos.css">
<title>Travel LAG</title>
	</head>
<body>
 <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><font size="5">Travel LAG</a></font>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="../index.php">Inicio</a></li>
                <li><a href="../ReservaViaje/ReservaViajes.php">Ingresar Viajes</a></li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Eliminar<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Buses</a></li>
                    <li><a href="#">Choferes</a></li>
                    <li><a href="#">Mecanicos</a></li>
                    <li class="dropdown-header"></li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultar<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="../Formularios/consulta_buses_disponibles.php">Buses</a></li>
                    <li><a href="Consultar_Chofer.php">Choferes</a></li>
                    <li><a href="#">Mecanicos</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header"></li>
                    <li><a href="./consulta_planilla_choferes.php">Consultar planillas</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registrar <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="./formulario_buses.php">Buses</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a  href="./formulario_choferes.php">Choferes</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="./particular_empresa.php">Clientes</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="./formulario_mecanicos.php">Mecanicos</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Repuestos</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="./formulario_mantencion.php">Mantencion</a></li>
                    <li><a href="./formulario_dar_de_alta.php">Dar de alta</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>

</div>