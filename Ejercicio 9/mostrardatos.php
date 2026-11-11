<?php
$host = 'localhost';
$db = 'BDInstituto';
$user = 'root';
$pass = '';

$conexion = mysqli_connect($host, $user, $pass, $db);

echo "<br>--- LISTADO DE LA BASE DE DATOS ---<br>";

$sql = "SELECT * FROM BDAlumnos";
$resultado = mysqli_query($conexion, $sql);

while ($fila = mysqli_fetch_array($resultado)) {
    echo "Nombre: " . $fila['nombre'] ." - Dirección: ";
}

mysqli_close($conexion)

?>
