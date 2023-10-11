<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reg_username = $_POST["reg_username"];
    $reg_password = password_hash($_POST["reg_password"], PASSWORD_DEFAULT);
    $reg_email = $_POST["reg_email"];

    // Leer el archivo de usuarios
    $usuarios = json_decode(file_get_contents('usuarios.json'), true);

    // Agregar el nuevo usuario
    $usuarios[] = array(
        'username' => $reg_username,
        'password' => $reg_password,
        'email' => $reg_email
    );

    // Guardar la información actualizada
    file_put_contents('usuarios.json', json_encode($usuarios));

    header("Location: index.html");
} else {
    echo "Error al registrar el usuario.";
}
?>
