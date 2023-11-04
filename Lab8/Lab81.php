<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 8.1</title>
</head>
<body>
    <h1>Manejo de Arreglos P2</h1>
    <br>
    <p>Llenar un arreglo solo con números pares. Si se introduce un número impar, solicitar al usuario introduzca un valor correcto hasta que así sea; luego continuar con el siguiente número.</p>
    <br>

    <?php
    require_once 'class_lib.php';

    $manejoArreglos = new ManejoArreglos();

    if (isset($_GET['numero'])) {
        $numero = (int)$_GET['numero'];
        $mensaje = $manejoArreglos->agregarNumero($numero);

        if ($mensaje) {
            echo $mensaje . "<br>";
        }
    }

    if (count($_SESSION['numeros_pares']) < 5) {
    ?>
    <form action="lab81.php">
        <a>Ingrese SOLO números pares:</a>
        <input type="number" name="numero" required>
        <input type="submit" value="Enviar">
    </form>
    <?php
    } else {
        echo "Los números pares ingresados son: " . $manejoArreglos->mostrarNumerosPares() . "<br>";
    }
    ?>
</body>
</html>
