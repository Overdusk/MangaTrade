<?php 


	class objeto_blog{ 

		//PROPIEDADES
		//AQUI GUARDAREMOS LAS PROPIEDADES DE UNA ENTRADA DE UN BLOG

		private $id;

		private $artista;

		private $titulo;

		private $precio;

		private $cover;

		private $sinopsis;

		private $fechas;



		//CREAMOS GETTERS Y SETTERS EN CADA PROPIEDAD LOS CUALES SON MÉTODOS DE ACCESO
		//GETTER MUESTRA, SETTER ESTABLECE

		public function getid(){

			return $this->id;

		}

		public function setid($id_enviado){

			$this->id=$id_enviado:

		}

		public function getartista(){

			return $artista;
		}

		public function setartista($artista_enviado){

			$this->artista=$artista_enviado;
		}

		public function getprecio(){

			return $this->precio;
		}

		public function setprecio($precio_enviado){

			$this->precio=$precio_enviado;
		}

		public function getcover(){

			return $this->cover;
		}

		public function setcover($cover_enviado){

			$this->cover=$cover_enviado;
		}

		public function getsinopsis(){

			return $this->sinopsis;
		}

		public function setsinopsis($sinopsis_enviado){

			$this->sinopsis=$sinopsis_enviado;
		}

		public function getfecha(){

			return $this->fecha;
		}

		public function setfecha($fecha_enviado){

			$this->fecha=$fecha_enviado;
		}


	}


	









?>