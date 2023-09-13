<?php
function esPar($numero){
    return $numero % 2 == 0;
}

session_start();

if (!isset($_SESSION['numeros_pares'])) {
    $_SESSION['numeros_pares'] = array();
}

if ($_POST) {
    if(isset($_POST['borrar'])){
        $_SESSION['numeros_pares'] = array();
        echo "Arreglo borrado.";
    } else {
        $numero = $_POST['numero'];

        if (!is_numeric($numero)) {
            echo "Por favor, introduce un número.";
        } else {
            $numero = intval($numero);
            if (!esPar($numero)) {
                echo "Por favor, introduce un numero par.";
            } else {
                if (in_array($numero, $_SESSION['numeros_pares'])) {
                    echo "Este numero ya fue ingresado. Por favor, introduce otro.";
                } else {
                    $_SESSION['numeros_pares'][] = $numero;
                    echo "Numero añadido correctamente.";
                }
            }
        }
    }
}

if (!empty($_SESSION['numeros_pares'])) {
    echo "<br><br>Arreglo actual: ";
    echo implode(", ", $_SESSION['numeros_pares']);
    echo "<br>";
}
?>
<form action="lab44.php" method="post">
    Introduce un nupmero par:
    <input type="text" name="numero" >
    <input type="submit" value="Enviar">
    <input type="submit" name="borrar" value="Borrar Arreglo">
</form>
