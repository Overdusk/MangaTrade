<!DOCTYPE html>
<html>
<head>

	<title>MangaTrade - Añadir un manga</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">
	<link  rel="icon" href="img/favicon.ico" type="image/ico"/>
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> -->

</head>
<body>

<br>
<br>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">MangaTrade</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>

      <!--TOGGLE DE CATEGORIAS -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Categorías
	        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>

  			<!--TOGGLE DE MI PERFIL -->
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Mi Perfil
	        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>




	

</nav>

<!-- FORMULARIO_MANGAS -->
	<div class="container">
			<div class="row">
				<div class="col-md-6">
					<form class="card my-3"action="../controlador/transacciones.php" method="post" enctype="multipart/form-data">
						
						<div class="card-body">
							<center> <h3> Escribe los Datos de tu Obra</h3> </center>
							<div class="form-group">
								<input type="text" placeholder="Título" class="form-control" name="titulo">
								
							</div>
							<div class="form-group">
								<textarea name="sinopsis" rows="10" cols="40" class="form-control" placeholder="Escribe tu Sinopsis"></textarea>
							</div>


						<div class="form-group">
								<input type="number" placeholder="Precio" class="form-control" name="precio">
							</div>


						<div class="form-group">
							 <input type="file" value="Selecciona una Imagen" class="form-control" name="imagen">
							</div>


							<button type="submit" class="btn btn-outline-dark btn-block"> Publicar</button>
						</div>
					</form>



</body>




</html>