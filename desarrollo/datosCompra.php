<?php

$nombre = $_POST ["nombre"];
$apellido = $_POST ["apellido"];
$email = $_POST ["email"];
$cantidad = $_POST ["cantidad"];
$categoria = $_POST ["categoria"];



$servidor = "localhost";
$usuario = "gonzalodelcampo-fullstackphp";
$clave ="Titan.2023";

$conexion = mysqli_connect($servidor,$usuario,$clave);

// mysqli_close($conexion); cierra la conexion

$baseDartos = "id20976123_tickets";

mysqli_select_db($conexion, $baseDartos);

// $sql = "SELECT * FROM tickets_compra";

$sql = "INSERT INTO tickets_compra VALUES(NULL,'$nombre', '$apellido','$email', '$cantidad','$categoria')";

$consuta= mysqli_query($conexion, $sql);

mysqli_close($conexion);
header("Location: ../index.php"); 