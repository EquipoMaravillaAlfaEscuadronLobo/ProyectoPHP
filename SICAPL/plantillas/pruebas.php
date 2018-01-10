<?php
$nombre_servidor = 'localhost';
$nombre_usuario = 'root';
$password = '';
$nombre_base_datos = 'diseno1';

$conexion = new PDO("mysql:host=$nombre_servidor; dbname=$nombre_base_datos", $nombre_usuario, $password);
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conexion->exec("SET CHARACTER SET utf8");

$nombre = 'boris';
$sql = "INSERT INTO institucion (nombre) VALUES ('sillas')";


$sentencia = $conexion->prepare($sql);
$usuario_insertado = $sentencia->execute();

?>