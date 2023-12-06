<?php
// consultarNotas.php

require_once "config.php";

// Obtener el DNI y contraseña de la URL
$dni = $_GET['dni'];
$contrasena = $_GET['contrasena'];

// Llamar al procedimiento almacenado
$sql = "CALL ConsultarNotasPorAlumno('$dni', '$contrasena')";
$result = $conn->query($sql);

// Configurar la cabecera para indicar JSON y codificación UTF-8
header('Content-Type: application/json; charset=utf-8');

// Verificar si se obtuvieron resultados
if ($result && $result->num_rows > 0) {
    // Obtener los resultados y convertirlos a un array asociativo
    $notas = array();
    while ($row = $result->fetch_assoc()) {
        $notas[] = $row;
    }

    // Devolver los resultados como JSON
    echo json_encode($notas, JSON_UNESCAPED_UNICODE);
} else {
    // Si no hay resultados o hay un error, devolver un mensaje
    echo json_encode(array('mensaje' => 'No se encontraron notas'), JSON_UNESCAPED_UNICODE);
}

// Cerrar la conexión
$conn->close();
?>
