<?php
  require_once("database/db_utilities.php");

	//En caso de que se encuentre el id al llamar esta funcion se disparara el
  //evento de eliminar el registro en la base de datos.
	if(isset($_GET['id'])){
    $id = $_GET['id'];
    $al = new tutor();
		$al->delete($id);
		header("location: ./tutores.php");
	}
?>
