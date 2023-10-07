<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reg_username = $_POST["reg_username"];
    $reg_password = password_hash($_POST["reg_password"], PASSWORD_DEFAULT);
    $reg_email = $_POST["reg_email"];

    // Guardar información en un arreglo de sesión
    $_SESSION['usuarios'][] = array(
        'username' => $reg_username,
        'password' => $reg_password,
        'email' => $reg_email
    );

    echo "Te has registrado exitosamente.";
    header("Location: index.html");
} else {
    echo "Error al registrar el usuario.";
}
?>
