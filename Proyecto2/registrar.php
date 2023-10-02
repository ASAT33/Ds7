<?php
$conexion = new mysqli("localhost", "root", "", "farmacia_db", 3306);
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$reg_username = $_POST["reg_username"];
$reg_password = password_hash($_POST["reg_password"], PASSWORD_DEFAULT);
$reg_email = $_POST["reg_email"];

$sql = "INSERT INTO usuarios (username, password, email) VALUES ('$reg_username', '$reg_password', '$reg_email')";

if ($conexion->query($sql) === TRUE) {
    echo "Te has registrado exitosamente.";
    // Aquí podrías redirigir al usuario a donde desees.
} else {
    echo "Error al registrar el usuario: " . $conexion->error;
}

$conexion->close();
?>
