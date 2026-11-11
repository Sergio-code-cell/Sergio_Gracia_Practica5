<?php
$host = 'localhost';
$db = 'BDInstituto';
$user = 'root';
$pass = '';

$nombre = $_POST['nombre'];
$direccion_nueva = $_POST['direccion_nueva'];

$conexion = mysqli_connect($host, $user, $pass, $db);

$sql = "UPDATE BDAlumnos SET direccion = '$direccion_nueva' WHERE nombre = '$nombre'";
mysqli_query($conexion, $sql);

echo "Tus datos han sido cambiados correctamente";

?>
