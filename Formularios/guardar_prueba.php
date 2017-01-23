<?php
require_once("coneccion.php");
$idpacien= $_POST['idPac'];
$preguPrue= $_POST[''];
$respPrue= $_POST['respPrueba'];
$resuPrue= $_POST['resuPrueba'];
$fechaPrue= $_POST['fechaPrueba'];

$query="insert into prueba(idPaciente,idPregunta,respuestaPrueba,resultadoPrueba,fechaPrueba)
values ('$idpacien','$preguPrue','$respPrue','$resuPrue','$fechaPrue')";
$resultado=$conexion->query($query);
 ?>
