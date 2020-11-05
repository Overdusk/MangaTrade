<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link  rel="icon" href="img/favicon.ico" type="image/ico"/>
</head>
<body>

	<!-- IDENTIFICADORES DE PANTALLA DE CARGA -->
	<div id="contenedor_carga">
		<div id="carga"></div>
	</div>


	<!-- Navbar -->

	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">MangaTrade</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Selección de Modo <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mi Perfil
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
	
	<center id="titulo"><h3 id="titulo">¿A donde quieres ir?</h3></center>

	<!--SELECCIONADORES DE MODO -->

	<a href="mangas.php"><div class="card" id="tarjeta1" style="width: 18rem;">
  <img src="img/mangas/deathnote.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text"><b>Manga</b><br>Explora las últimas tendencias en el manga, compra comics dependiendo de tus gustos y evalúa según tu criterio la calidad de las obras</br></p>
  </div>
</div>
</a>
		<a href="#"><div class="card" id="tarjeta2" style="width: 18rem;">
  <img src="img/galeria_fanarts/fanartuno.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text"><b>Galería</b><br>Encuentra las últimas obras de tus artistas favoritos, cómpralas y comentalas.</br></p>
  </div>
</div>
</a>
	
<a href="addmanga.php"> Añade un manga</a>

<!-- ANIMACION DE PANTALLA DE CARGA -->
<script>
	window.onload = function(){
		var contenedor = document.getElementById('contenedor_carga');

		contenedor.style.visibility = 'hidden';
		contenedor.style.opacity = '0';
	}

 </script>
</body>
</html>