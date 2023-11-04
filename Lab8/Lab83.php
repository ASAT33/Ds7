<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 8.3</title>
</head>
<body>
    <h1>Generador de Matriz Identidad</h1>
    <form action="Lab83.php" method="post">
        <a>Ingrese el orden de la matriz:</a>
        <input type="number" name="valor" required>
        <input type="submit" value="Generar Matriz">
    </form>

    <?php
    if (isset($_POST['valor'])) {
        require_once 'class_lib.php';

        $valor = $_POST['valor'];
        $generator = new MatrizIdentidadGenerator();
        $matriz = $generator->generarMatrizIdentidad($valor);

        echo $matriz;
    } else {
        echo "Por favor, ingrese un valor válido para N.";
    }
    ?>

</body>
</html>
