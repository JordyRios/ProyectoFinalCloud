<?php
$host       = "10.0.3.4";
$username   = "adminuser";
$password   = "Chucha12";
$db_name     = "products";

// Crear la conexión
$conn = new mysqli($host, $username, $password, $db_name);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
