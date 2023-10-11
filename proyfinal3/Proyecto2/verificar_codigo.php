<?php
session_start();

if (isset($_SESSION['codigo_autenticacion']) && isset($_SESSION['limite_tiempo'])) {
    $codigo_autenticacion = $_SESSION['codigo_autenticacion'];
    $limite_tiempo = $_SESSION['limite_tiempo'];

    // Verifica si el tiempo actual es menor o igual al límite de tiempo
    if (time() <= $limite_tiempo) {
        $codigo_ingresado = $_POST["codigo_autenticacion"];
        if ($codigo_ingresado == $codigo_autenticacion) {
            header("Location: principal.html"); // Redirige a la página principal
            exit();
        } else {
            echo "Código de autenticación incorrecto. Por favor, intenta nuevamente.";
        }
    } else {
        $error = "El código de autenticación ha expirado.";
        header("Location: index.html"); 
    }
} else {
    $error = "No se encontró el código de autenticación o el límite de tiempo.";
}

// Puedes mostrar el mensaje de error aquí
echo $error;

?>
