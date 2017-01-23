<!Doctype html>
<meta http-equiv="Content-type" content="text/html" charset="utf-8"/>
<html>
  <title>Habilidades</title>
  <body>
    <form class="form_preguntas" name="form" action="guardar_preguntas.php" method="post">
      Pregunta:<input id= "nomPregunta" type="text" name="nomPregunta"><br>
      Respuesta Acertiva:<input id="respAPreg" type="text" name="respAPreg"><br>
      Respuesta Negativa:<input id="respNPreg" type="text" name="respNPreg"><br>
      Valor:<input id="valorPreg" type="text" name="valorPreg"><br>
      Habilidad:
      <?php
      require_once("coneccion.php");
      $query = 'select * from habilidad';
      $resultado = $conexion->query($query);
      ?>
      <select name="idHabi">
        <?php
        while ($row =$resultado->fetch_array())
        {
          ?>
          <option value="<?php echo $row['idHabilidad']?>">
            <?php echo $row['tipoHabilidad']; ?>
          </option>
          <?php
        }
        ?>
      </select><br>


      <input type="submit" value"Guardar Pregunta">
    </form>
  </body>
</html>
