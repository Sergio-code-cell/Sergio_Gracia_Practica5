<?php
$host = 'localhost';
$db = 'BDInstituto';
$user = 'root';
$pass = '';

$nombre = $_POST['nombre'];

$conexion = mysqli_connect($host, $user, $pass, $db);

$sql = "DELETE FROM BDAlumnos WHERE nombre = '$nombre'";
mysqli_query($conexion, $sql);

echo "Tus datos se han borrado correctamente";

?>
