<?php
$servidor = "localhost";
$usuario = "gonzalodelcampo-fullstackphp";
$clave ="Titan.2023";

$conexion = mysqli_connect($servidor,$usuario,$clave);

$baseDartos = "id20976123_tickets";

mysqli_select_db($conexion, $baseDartos);

