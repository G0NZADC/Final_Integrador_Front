<?php
$host = 'files.000webhost.com'; 
$dbname = 'id20976123_tickets'; 
$username = 'id20976123_gdelcampo'; 
$password = 'Titan.2023'; 

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>

