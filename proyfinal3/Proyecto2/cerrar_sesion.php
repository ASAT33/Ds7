<?php
// Limpiar cualquier sesión existente
session_start();
session_destroy();
// Redirigir de regreso a la página de inicio de sesión
header("Location: index.html");
exit();
?>
