<?php

$host = 'localhost';
$db = 'formulario';
$user = 'root';
$pass = '';

$conexion = mysqli_connect ($host, $user, $pass, $db);


$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];


echo "Tu nombre es: " . $nombre;
echo "<br>";
echo "Tu direccion es: " . $direccion;

mysqli_close($conexion);

?>
