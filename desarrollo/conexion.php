<?php
$servidor = "localhost";
$usuario = "gonzalodelcampo-fullstackphp";
$clave ="Titan.2023";

$conexion = mysqli_connect($servidor,$usuario,$clave);

$baseDartos = "id20976123_tickets";

mysqli_select_db($conexion, $baseDartos);

$sql = "SELECT*FROM tickets_compra";
$consulta = mysqli_query($conexion, $sql);

if  (mysqli_num_rows($consulta) > 0){
    
    while($fila = mysqli_fetch_assoc($consulta)){
        echo "<tr>
                <td>".$fila["id"]."</td>
                <td>".$fila["nombre"]."</td>
                <td>".$fila["apellido"]."</td>
                <td>".$fila["email"]."</td>
                <td>".$fila["cantidad"]."</td>
                <td>".$fila["categoria"]."</td>
              </tr>";
    }
}