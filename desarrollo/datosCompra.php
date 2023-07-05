<?php

$nombre = $_POST ["nombre"];
$apellido = $_POST ["apellido"];
$email = $_POST ["email"];
$cantidad = $_POST ["cantidad"];
$categoria = $_POST ["categoria"];

include 'conexion.php';

// $sql = "SELECT * FROM tickets_compra";

$sql = "INSERT INTO tickets_compra VALUES(NULL,'$nombre', '$apellido','$email', '$cantidad','$categoria')";

$consuta= mysqli_query($conexion, $sql);

mysqli_close($conexion);
header("Location: ../index.php"); 