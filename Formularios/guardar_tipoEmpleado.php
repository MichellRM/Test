<?php
require_once("coneccion.php");
$cargo= $_POST['nomCargo'];
$descripcion= $_POST['descCargo'];

$query="insert into tipoEmpleado(cargoTipoEmpleado,descTipoEmpleado)
values ('$cargo','$descripcion')";
$resultado=$conexion->query($query);
 ?>
