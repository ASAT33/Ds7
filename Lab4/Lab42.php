<!DOCTYPE html>
<html>
<head>
    <title>Laboratorio 4.2</title>
</head>
<body> 
    <?php
    if ($_POST) {
        $numero = $_POST["numero"];

        function calcularFactorial($n) {
            if ($n == 0) {
                return 1;
            } else {
                return $n * calcularFactorial($n - 1);
            }
        }

        $factorial = calcularFactorial($numero);

        echo "<p>El factorial de $numero es $factorial</p>";
    }
    ?>
</body>
</html>
