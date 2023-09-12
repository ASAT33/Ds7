<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero = (int)$_POST["numero"];

    if ($numero % 2 == 0) {
        // El número es par, lo agregamos al arreglo
        if (!isset($_SESSION["numeros_pares"])) {
            $_SESSION["numeros_pares"] = array();
        }
        array_push($_SESSION["numeros_pares"], $numero);
    } else {
        echo "El número ingresado no es par. Por favor, intente de nuevo.";
    }
}

// Redirecciona de nuevo al formulario
header("Location: Lab44.html");
?>
