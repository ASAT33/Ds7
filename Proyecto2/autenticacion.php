<?php
session_start(); // Inicia la sesión
if(isset($_SESSION['codigo_autenticacion'])) {
    $codigo_autenticacion = $_SESSION['codigo_autenticacion'];
} else {
    $error = "No se encontró el código de autenticación.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticación de Dos Pasos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="auth-container">
    <h2>Autenticación de Dos Pasos</h2>
        <form action="verificar_codigo.php" method="post">
            <div class="form-group">
                <label for="codigo_autenticacion">Código de Autenticación:</label>
                <input type="text" id="codigo_autenticacion" name="codigo_autenticacion" required>
            </div>
            <button type="submit">Verificar Código</button>
        </form>
    </div>
</body>
</html>
