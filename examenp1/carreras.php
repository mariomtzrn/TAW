<?php
  require_once('database/db_utilities.php');
  $carr = new carrera();
  $carreras = $carr->get_all();
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
      <h1 class="ui header">Carreras</h1>
      <td><a href="./carrera_add.php" class="button">Agregar carrera</a></td>
      <table class="ui compact table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Modificar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach( $carreras as $id => $user ){ ?>
          <tr>
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['nombre'] ?></td>
            <?//Se generan dos botones, que redireccionan a acutalizaar y eliminar respectivamente."?>
            <td><a href="./carrera_upd.php?id=<?php echo($user['id']); ?>" class="button">Modificar</a></td>
            <td><a href="./carrera_del.php?id=<?php echo($user['id']); ?>" class="button" onClick="wait();">Eliminar</a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <script type="text/javascript">
        //Funcion que permite cancelar el evento en caso de querer borrar un archivo.
        function wait(){
          var r = confirm("¿Desea eliminar el registro?");
          if (!r)
              event.preventDefault();
        }
    </script>
  </body>
</html>
