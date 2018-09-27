<?php
  require_once('database/db_utilities.php');
  $alumno = new alumno();
  $alumnos = $alumno->get_all();
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
      <h1 class="ui header">Alumnos</h1>
      <td><a href="./alumno_add.php" class="button">Agregar alumno</a></td>
      <table class="ui compact table">
        <thead>
          <tr>
            <th>Matricula</th>
            <th>Nombre</th>
            <th>Carrera</th>
            <th>Tutor</th>
            <th>Modificar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach( $alumnos as $id => $user ){ ?>
          <tr>
            <?php
              $cr = new carrera();
              $nc = $cr->search($user['id_carrera']);
              $tt = new tutor();
              $nt = $tt->search($user['id_tutor']);
            ?>
            <td><?php echo $user['matricula'] ?></td>
            <td><?php echo $user['nombre'] ?></td>
            <td><?php echo $nc['nombre'] ?></td>
            <td><?php echo $nt['nombre'] ?></td>
            <?//Se generan dos botones, que redireccionan a acutalizaar y eliminar respectivamente."?>
            <td><a href="./alumno_upd.php?id=<?php echo($user['matricula']); ?>" class="button">Modificar</a></td>
            <td><a href="./alumno_del.php?id=<?php echo($user['matricula']); ?>" class="button" onClick="wait();">Eliminar</a></td>
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
