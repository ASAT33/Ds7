<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 8.2</title>
</head>
<body>
    <h1>Calculo de Factorial</h1>
    <p>Calculo de un factorial de acuerdo a un valor de entrada.</p>

    <?php
    if (isset($_GET['valor'])) {
        require_once 'class_lib.php';

        $valor = (int)$_GET['valor'];
        $calculator = new FactorialCalculator();
        $resultado = $calculator->calcularFactorial($valor);

        echo $resultado;
    }
    ?>

    <form action="Lab82.php">
        <a>Ingrese el valor</a>
        <input type="text" name="valor">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
