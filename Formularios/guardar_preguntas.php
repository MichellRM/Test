<?php
require_once("coneccion.php");
$pregunta= $_POST['nomPregunta'];
$respA= $_POST['respAPreg'];
$respN= $_POST['respNPreg'];
$idHab= $_POST['idHabi'];
$valor= $_POST['valorPreg'];

$query="insert into pregunta(nomPregunta,respAcertivaPregunta,respNegativaPregunta,idHabilidad,valorPregunta)
values ('$pregunta','$respA','$respN','$idHab','$valor')";
$resultado=$conexion->query($query);
 ?>
