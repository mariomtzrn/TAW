<?php

	$dsn = 'mysql:host=localhost;dbname=examenp1';
	$user = 'root';
	$password = 'root';

	try{
		$pdo = new PDO($dsn, $user, $password);
	}catch( PDOException $e ){
		echo 'Error al conectar: ' . $e->getMessage();
	}

	class alumno {
		protected $matricula;
		protected $nombre;
		protected $id_carrera;
		protected $id_tutor;

		#Funcion para obtener la informacion de los alumnos
		public function get_all(){
			global $pdo;
			$sql = "SELECT * FROM alumno";
			$statement = $pdo->prepare($sql);
			$statement->execute();
			$results = $statement->fetchAll();
			return $results;
		}

		//Funcion para agregar un usuario
		function add($matricula, $nombre, $id_carrera, $id_tutor){
			global $pdo;
			$sql = "INSERT INTO alumno (matricula, nombre, id_carrera, id_tutor) VALUES
			('$matricula', '$nombre', '$id_carrera', '$id_tutor')";
			$statement = $pdo->prepare($sql);
			$statement->execute();
		}

		//Funcion para actualizar la informacion de un alumno
	  function update($matricula, $nombre, $id_carrera, $id_tutor){
	    global $pdo;
	    $sql = "UPDATE alumno SET matricula='$matricula', nombre='$nombre', id_carrera='$id_carrera',
			id_tutor='$id_tutor' WHERE matricula='$matricula'";
	    $statement = $pdo->prepare($sql);
	    $statement->execute();
	  }

	  //Funcion para eliminar la informacion de un alumno
		function delete($matricula){
			global $pdo;
			$sql = "DELETE FROM alumno where matricula='$matricula'";
			$statement = $pdo->prepare($sql);
			$statement->execute();
		}

		//Funcion para realizar bosuqeda de los datos de un alumno
		function search($matricula){
			global $pdo;
			$sql = "SELECT * FROM alumno where matricula = '$matricula'";
			$statement = $pdo->prepare($sql);
			$statement->execute();
			$results = $statement->fetchAll();
			return $results[0];
		}
	}

	class tutor {
		protected $id;
		protected $nombre;
		protected $id_carrera;

		#Funcion para obtener la informacion de los tutores
		function get_all(){
			global $pdo;
			$sql = "SELECT * FROM tutor";
			$statement = $pdo->prepare($sql);
			$statement->execute();
			$results = $statement->fetchAll();
			return $results;
		}

		//Funcion para agregar un tutor
		function add($nombre, $id_carrera){
			global $pdo;
			$sql = "INSERT INTO tutor (nombre, id_carrera) VALUES
			('$nombre', '$id_carrera')";
			$statement = $pdo->prepare($sql);
			$statement->execute();
		}

		//Funcion para actualizar la informacion de un tutor
	  function update($id, $nombre, $id_carrera){
	    global $pdo;
	    $sql = "UPDATE tutor SET id='$id', nombre='$nombre', id_carrera='$id_carrera' WHERE id='$id'";
	    $statement = $pdo->prepare($sql);
	    $statement->execute();
	  }

	  //Funcion para eliminar la informacion de un tutor
		function delete($id){
			global $pdo;
			$sql = "DELETE FROM tutor where id='$id'";
			$statement = $pdo->prepare($sql);
			$statement->execute();
		}

		//Funcion para realizar bosuqeda de los datos de un tutor
		function search($id){
			global $pdo;
			$sql = "SELECT * FROM tutor where id = '$id'";
			$statement = $pdo->prepare($sql);
			$statement->execute();
			$results = $statement->fetchAll();
			return $results[0];
		}
	}

	class carrera {
		protected $nombre;

		#Funcion para obtener la informacion de las carreras
		function get_all(){
			global $pdo;
			$sql = "SELECT * FROM carrera";
			$statement = $pdo->prepare($sql);
			$statement->execute();
			$results = $statement->fetchAll();
			return $results;
		}

		//Funcion para agregar una carrera
		function add($nombre){
			global $pdo;
			$sql = "INSERT INTO carrera (nombre) VALUES
			('$nombre')";
			$statement = $pdo->prepare($sql);
			$statement->execute();
		}

		//Funcion para actualizar la informacion de una carrera
	  function update($id, $nombre){
	    global $pdo;
	    $sql = "UPDATE carrera SET nombre='$nombre' WHERE id='$id'";
	    $statement = $pdo->prepare($sql);
	    $statement->execute();
	  }

	  //Funcion para eliminar la informacion de una carrera
		function delete($id){
			global $pdo;
			$sql = "DELETE FROM carrera where id='$id'";
			$statement = $pdo->prepare($sql);
			$statement->execute();
		}

		//Funcion para realizar bosuqeda de los datos de una carrera
		function search($id){
			global $pdo;
			$sql = "SELECT * FROM carrera where id = '$id'";
			$statement = $pdo->prepare($sql);
			$statement->execute();
			$results = $statement->fetchAll();
			return $results[0];
		}
	}

?>
