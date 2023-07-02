<?php
$host = 'files.000webhost.com'; // Cambiar por el nombre del servidor de la base de datos
$dbname = 'id20976123_tickets'; // Cambiar por el nombre de la base de datos
$username = 'id20976123_gdelcampo'; // Cambiar por el nombre de usuario de la base de datos
$password = 'Titan.2023'; // Cambiar por la contraseña de la base de datos

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>

