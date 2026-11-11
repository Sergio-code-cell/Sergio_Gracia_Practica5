<?php
$host = 'localhost';
$db = 'BDInstituto';
$user = 'root';
$pass = '';

$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];

$conexion = mysqli_connect($host, $user, $pass, $db);

$sql = "INSERT INTO BDAlumnos (nombre, direccion) VALUES ('$nombre', '$direccion')";
mysqli_query($conexion, $sql);

echo "Tus datos han sido insertados correctamente";

mysqli_close($conexion)

?>
