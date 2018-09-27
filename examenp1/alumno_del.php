<?php
  require_once("database/db_utilities.php");

	//En caso de que se encuentre el id al llamar esta funcion se disparara el
  //evento de eliminar el registro en la base de datos.
	if(isset($_GET['id'])){
    $matricula = $_GET['id'];
    $al = new alumno();
		$al->delete($matricula);
		header("location: ./alumnos.php");
	}
?>
