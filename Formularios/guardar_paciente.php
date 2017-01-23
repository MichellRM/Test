<?php
require_once("coneccion.php");
$idpaci= $_POST['idPaciente'];
$nomPaci= $_POST['nomPaciente'];
$apePaci= $_POST['apePaciente'];
$edadPaci= $_POST['edadPaciente'];
$sexoPaci= $_POST['sexoPaciente'];
$idCar= $_POST['idCargo'];

$query="insert into paciente(idPaciente,nombrePaciente,apellidoPaciente,edadPaciente,sexoPaciente,idCargoTipoEmpleado)
values ('$idpaci','$nomPaci','$apePaci','$edadPaci','$sexoPaci','$idCar')";
$resultado=$conexion->query($query);
 ?>
