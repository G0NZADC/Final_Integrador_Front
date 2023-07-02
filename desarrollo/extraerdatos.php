<?php
require_once 'conexion.php';

try {
    $stmt = $conn->prepare("SELECT ID, nombre, apellido, email, tipo_entrada FROM usuarios");
    $stmt->execute();
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Error al obtener los datos: " . $e->getMessage();
}
?>
