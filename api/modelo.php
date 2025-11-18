<?php

function obtenerConexion() {
    $host = "caboose.proxy.rlwy.net";
    $db   = "railway";
    $user = "root";
    $pass = "MXkqUwZNSHMqRfYmLdMFFMrJQnbUQhii";
    $port = 19459;

    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8";

    try {
        $pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
        return $pdo;
    } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }
}

function obtenerTareas() {
    $pdo = obtenerConexion();
    $sql = "SELECT * FROM tareas";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
