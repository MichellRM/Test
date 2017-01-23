<!Doctype html>
<meta http-equiv="Content-type" content="text/html" charset="utf-8"/>
<html>
  <title>Pruebas</title>
  <body>
    <form class="form_paciente" name="form" action="guardar_prueba.php" method="post">
      Identidad:<input id= "idPac" type="text" name="idPac"><br>
      Pregunta:
      <?php
      require_once("coneccion.php");
      $query = 'select * from pregunta';
      $resultado = $conexion->query($query);
      mt_srand(time());
      $max =mysqli_num_rows($resultado);
      $rand = mt_rand(1,$max);
      $query2 = "select * from pregunta where idPregunta='$rand'";
      $resultado2 = $conexion->query($query2);
      ?>
      <input name="pregPrueba" type="text"
        <?php
        while ($row =$resultado2->fetch_array()) {
          ?>
          value="<?php echo $row['nomPregunta']?>"
          <?php
        }
        ?>
      >
      <br>
      Respuesta:<select name="respPrueba">
        <option value="S">Si</option>
        <option value="N">No</option>
      </select><br>
      Resultado:<input id="resuPrueba" type="text" name="resuPrueba"><br>
      Fecha:<input id="fechaPrueba" type="text" name="fechaPrueba"><br>

      <input type="submit" value"Guardar Prueba">
    </form>
  </body>
</html>
