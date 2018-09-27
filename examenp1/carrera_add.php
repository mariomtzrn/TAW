<?php
  require_once('database/db_utilities.php');
  if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    #Crea el objeto de la clase alumno
    $al = new carrera();
    $reg = $al->add($nombre);
    header('Location: ./carreras.php');
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
    <script src="semantic/semantic.min.js"></script>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>
    <title>Examen Parcial I</title>
  </head>
  <body>
    <?php include('menu.php'); ?>
    <div class="ui main container" style="padding-top:10px;">
      <h1 class="ui header">Carreras - Agregar carrera</h1>
      <form class="" action="" method="post">
        <div class="ui form" action="">
          <div class="two fields">
            <div class="field">
              <label>Nombre</label>
              <input type="text" name="nombre" placeholder="Nombre">
            </div>
          </div>
          <button type="submit" class="ui button" name="submit">Agregar carrera</button>
        </div>
      </form>
    </div>
    <script type="text/javascript">
      $('select.dropdown')
        .dropdown()
      ;
    </script>
  </body>
</html>
