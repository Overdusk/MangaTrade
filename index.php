<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido a Manga Trade</title>
	<!--Bootstrap 4.5-->
	<link rel="stylesheet" type="text/css" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">

	<!--Nuestro CSS-->
	<link rel="stylesheet" type="text/css" href="css/main.css">

		<!--SCROLL-->
	<script src="https://unpkg.com/scrollreveal"></script> 

	<!--Fuentes de Google -->
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap" rel="stylesheet">

	<!--Favicon-->
	<link  rel="icon" href="img/favicon.ico" type="image/ico"/>

	<meta charset="utf-8">

</head>
<body>

	<div id="contenedor_carga">
		<div id="carga"></div>
	</div>

	<!--Navbar -->
		
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">MangaTrade</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#header">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#info-one">Navegación</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#info-two">Iniciar Sesión</a>
      </li>
    </ul>
  </div>
</nav>


	<!-- HEADER -->

	<header id="header">
		<div class="container">
			<div class="row mt-5">

			<div class="col-md-6 ">
				<div class="header-content-left">
					<img src="img/header.jpg" style="whidth: 100%">
				</div>
					
				</div>


				<div class="col-md-6">
					<div class="header-content-right">
					
					<h1 class="display-4">El Olimpo de los Dibujantes</h1>

					<p class="mt-3"> Manga Trade es un sitio donde los usuarios tienen el poder de compartir sus ilustraciones y cómics de manera que estos puedan ser distribuidos además de comprados para mejorar la difusión y popularidad de los artistas.</p>

					<br>

					<p>¡Únete a nosotros para compartir nuestra pasión por el Manga!</p>

					<a href="#" class="btn btn-outline-primary btn-lg mt-2">Inicia Sesión</a>
					</div>	

				</div>
			</div>
		</div>
	</header>

	<!--Testimono -->

	<section id="testimonio">
		
		<div class="container">
			
			<p class="mb-2 h2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>

			<p class="h4">- Arthur Dankworth</p>


		</div>
	</section>

	<!--info one -->

	<section id="info-one">
		<div class="container">
			<div class="row mt-5">

				<div class="col-md-6 my-auto">
					<div class="info-left">
						<img src="img/learn.jpg" style="widht:300%" alt="dibujando">
					</div>
				</div>
				<div class="col-md-6 my-auto">
					<div class="info-right">
						<h2>Lorem ipsum dolor sit amet</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						<a href="#" class="btn btn-outline-primary">Lorem</a>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!--info two -->

	<section id="info-two" style="background: #f1f1f1">
		
		<div class="container">
			<div class="row my-5">

				<div class="col-md-6">
					
					<h2> Lorem Ipsum</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				</div>

				<div class="col-md-6">
					
					<h2> Lorem Ipsum</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					

				</div>
				
			</div>

		</div>


	</section>

	<!--Seccion final-->

	<footer id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<form class="card my-4" action="usuarios.php">
						<div class="card-body">
							
							<div class="form-group">
								<center> <h3> Inicia Sesión</h3> </center>
								<input type="text" placeholder="Nombre de usuario" class="form-control">
								
							</div>
							<div class="form-group">
								<input type="password" placeholder="Contraseña" class="form-control">
							</div>
							<button type="submit" class="btn btn-outline-secondary btn-block"> Iniciar Sesión</button>
						</div>
						
					</form>
					</div>
					<div class="col-md-5">
						<div class="container">
							<div class="imgri-fondo">
								<img src="img/fan1.jpg" alt="fan art" style="height: 700px">
								
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
	</footer>

	<!-- JQuery -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

 	<!--Javascript-->
 <script src="bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>

 <!--Scripts-->

 <script>
 var slideUp = {
    distance: '150%',
    origin: 'bottom',
    duration: 2000
};

	var slidetop = {
    distance: '150%',
    origin: 'top',
    duration: 2000
};

var slideright = {
    distance: '150%',
    origin: 'right',
    duration: 2000
};

ScrollReveal().reveal('.navbar', slideUp);
ScrollReveal().reveal('.header-content-left', slidetop);
ScrollReveal().reveal('.header-content-right', slideright);

	window.onload = function(){
		var contenedor = document.getElementById('contenedor_carga');

		contenedor.style.visibility = 'hidden';
		contenedor.style.opacity = '0';
	}

 </script>
</body>

</html>