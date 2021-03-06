<?php
  require_once('database/db_utilities.php');
  $carr = new carrera();
  $carreras = $carr->get_all();

  $al = new tutor();
  $tutor = $al->search($_GET['id']);

  if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $id_carrera = $_POST['id_carrera'];
    #Crea el objeto de la clase alumno
    $al = new tutor();
    $reg = $al->update($nombre, $id_carrera);
    header('Location: ./tutores.php');
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
      <h1 class="ui header">Tutores - Modificar tutor</h1>
      <form class="" action="" method="post">
        <div class="ui form" action="">
          <div class="two fields">
            <div class="field">
              <label>Nombre</label>
              <input type="text" name="nombre" value="<?php echo $tutor['nombre']; ?>">
            </div>
            <div class="field">
              <label>Carrera</label>
              <select class="ui dropdown" name="id_carrera">
                <option value="">Carrera</option>
                <?php foreach( $carreras as $id => $user ){ ?>
                  <option value="<?php echo $user['id'] ?>"><?php echo $user['nombre'] ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <button type="submit" class="ui button" name="submit">Modificar tutor</button>
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
