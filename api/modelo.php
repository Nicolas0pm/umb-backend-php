<?php
require_once 'db.php';

// 
// CREATE (Crear)
// 
function crearTarea($titulo) {
    global $conexion;

    // Usar htmlspecialchars para prevenir XSS
    $titulo_seguro = htmlspecialchars($titulo);

    $sql = "INSERT INTO tareas (titulo) VALUES ('$titulo_seguro')";
    return mysqli_query($conexion, $sql);
}

// 
// READ (Leer todas las tareas)
// 
function obtenerTareas() {
    global $conexion;

    $sql = "SELECT * FROM tareas";
    $resultado = mysqli_query($conexion, $sql);

    $tareas = [];
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $tareas[] = $fila;
    }
    return $tareas;
}

// 
// UPDATE (Marcar como completada)
// 
function completarTarea($id) {
    global $conexion;

    $id_seguro = intval($id);
    $sql = "UPDATE tareas SET completada = 1 WHERE id = $id_seguro";

    return mysqli_query($conexion, $sql);
}

// 
// DELETE (Eliminar tarea)
// 
function eliminarTarea($id) {
    global $conexion;

    $id_seguro = intval($id);
    $sql = "DELETE FROM tareas WHERE id = $id_seguro";

    return mysqli_query($conexion, $sql);
}
?>
