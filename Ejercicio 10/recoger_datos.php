<?php

$host = 'localhost';
$db = 'formulario';
$user = 'root';
$pass = '';

$conexion = mysqli_connect ($host, $user, $pass, $db);


$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];


$sql = "INSERT INTO tabla_alumnos (nombre, direccion) VALUES ('$nombre', '$direccion')";
mysqli_query($conexion, $sql);


echo "--- LISTADO DE ALUMNOS ---";
echo "<br>";

$sql = "SELECT * FROM tabla_alumnos";
$resultado = mysqli_query($conexion, $sql);

while ($fila = mysqli_fetch_array($resultado)) {
    echo "Nombre: " . $fila['nombre'] . " - Dirección: " . $fila['direccion'];
    echo "<br>";
}


mysqli_close($conexion);

?>
