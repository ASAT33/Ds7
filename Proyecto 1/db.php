<?php
$host = 'localhost';
$usuario = 'root';
$password = '';
$db = 'tareas';

$conn = new mysqli($host, $usuario, $password, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
