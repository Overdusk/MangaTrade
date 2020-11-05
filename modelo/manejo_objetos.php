<?php 

	include("objeto_blog.php");

	class manejo_objetos{

		//CONEXION CON LA BASE DE DATOS

		private $conexion;

		public function __construct($conexion){

			$this->setConexion($conexion);

		}

		public function setConexion(PDO $conexion){

			$this->conexion= $conexion;

		}

		//MÉTODO PARA OBTENER LAS ENTRADAS DEL BLOG

	public function getcontenidoporfecha(){

		$matriz = array();

		$contador = 0;

		$resultado = $this->conexion->query("SELECT * FROM MANGAS ORDER BY FECHA");

		while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
			
			$blog= new objeto_blog();

			$blog->setid($registro['id']);
			$blog->setprecio($registro['precio']);
			$blog->setcover($registro['cover']);
			$blog->setsinopsis($registro['sinopsis']);
			$blog->setfecha($registro['fecha']);

			$matriz[$contador] = $blog;

			$contador++;

		}

		return $matriz;

	}

	//METODO PARA INTRODUCIR LAS ENTRADAS
	
	public function inserta_contenido(objeto_blog $blog){

		$sql="INSERT INTO MANGAS (artista, titulo, fecha, cover, cover, precio, sinopsis) VALUES ('" . $blog->gettitulo() . "','" . $blog->getfecha() . "','" . $blog->getcover() . "','" . $blog->getcover() . "','" . $blog->getprecio() . "','" . $blog->get->sinopsis . "','" . $blog->getartista() . "')";

		$this->conexion->exec($sql);


	}


	}






?>