<?php 
$localhost = "localhost";
$usuario = "root";
$contrasena = "";
$bbdd = "bbdd_8m";
$conexion = new mysqli($localhost, $usuario, $contrasena, $bbdd);
if ($conexion->connect_error) {
    die("La conexion ha fallado: " . $conexion->connect_error);
}
?>