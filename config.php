<?php
// Configuración de la base de datos
$host = 'db-inventario-do-user-14223513-0.c.db.ondigitalocean.com';
$port = 25060;
$database = 'defaultdb';
$username = 'doadmin';
$password = 'AVNS_tHjITuoX6kB-JnJdRgp';

// Intentar establecer la conexión
$conn = new mysqli($host, $username, $password, $database, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
// Procesar los resultados o realizar otras operaciones...


