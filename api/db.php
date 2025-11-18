<?php
$host = "caboose.proxy.rlwy.net";
$user = "root";
$pass = "MXkqUwZNSHMqRfYmLdMFFMrJQnbUQhii";
$db   = "railway";
$port = 19459;

try {
    $conexion = new PDO("mysql:host=$host;port=$port;dbname=$db;charset=utf8", $user, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Error al conectar a MySQL: " . $e->getMessage());
}
?>
