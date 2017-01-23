<?php
require_once("coneccion.php");
$habilidad= $_POST['nomHabilidad'];
$descripcion= $_POST['descHabilidad'];

$query="insert into habilidad(tipoHabilidad,descHabilidad)
values ('$habilidad','$descripcion')";
$resultado=$conexion->query($query);
 ?>
