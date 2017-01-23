<!Doctype html>
<meta http-equiv="Content-type" content="text/html" charset="utf-8"/>
<html>
  <title>Habilidades</title>
  <body>
    <form class="form_paciente" name="form" action="guardar_paciente.php" method="post">
      Identidad:<input id= "idPaciente" type="text" name="idPaciente"><br>
      Nombre:<input id= "nomPaciente" type="text" name="nomPaciente"><br>
      Apellido:<input id="apePaciente" type="text" name="apePaciente"><br>
      Edad:<input id="edadPaciente" type="text" name="edadPaciente"><br>
      Sexo:<input id="sexoPaciente" type="text" name="sexoPaciente"><br>
      Cargo:
      <?php
      require_once("coneccion.php");
      $query = 'select * from tipoempleado';
      $resultado = $conexion->query($query);
      ?>
      <select name="idCargo">
        <?php
        while ($row =$resultado->fetch_array())
        {
          ?>
          <option value="<?php echo $row['idCargoTipoEmpleado']?>">
            <?php echo $row['cargoTipoEmpleado']; ?>
          </option>
          <?php
        }
        ?>
      </select><br>

      <input type="submit" value"Guardar Paciente">
    </form>
  </body>
</html>
