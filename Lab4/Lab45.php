<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<?php
function generarMatrizIdentidad($orden) {
    $matriz = array();

    for ($i = 0; $i < $orden; $i++) {
        for ($j = 0; $j < $orden; $j++) {
            $matriz[$i][$j] = ($i == $j) ? 1 : 0;
        }
    }

    return $matriz;
}

if ($_POST) {
    $orden = $_POST['orden'];

    if (!is_numeric($orden) || $orden % 2 != 0) {
        echo "Introduce un numero par.";
    } else {
        $matriz = generarMatrizIdentidad($orden);

        echo "<h2> $orden:</h2>";
        echo "<table border='1'>";
        foreach ($matriz as $fila) {
            echo "<tr>";
            foreach ($fila as $elemento) {
                echo "<td>$elemento</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>
</body>
</html>
