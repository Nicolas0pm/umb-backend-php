<?php

function obtenerConexion() {
    $host = "db"; 
    $dbname = "tareasdb";
    $username = "root";
    $password = "rootpassword";

    return new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
}

function obtenerTareas() {
    $pdo = obtenerConexion();
    $stmt = $pdo->prepare("SELECT * FROM tareas");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>

