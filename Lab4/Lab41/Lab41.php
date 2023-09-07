<?php
if ($_POST) {
    $ventas = $_POST["ventas"];
    if ($ventas >= 80) {
        $imagen = "bueno.png";
    } elseif ($ventas >= 50 && $ventas <= 79) {
        $imagen = "medio.png";
    } else {
        $imagen = "malo.png";
    }
    echo '<img src="' . $imagen . '">';
}
?>
