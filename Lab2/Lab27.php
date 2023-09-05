<!DOCTYPE html>
<html>
    <head>
        <meta chartset="UTF-8">
        <title>Laboratorio 2.6</title>
</head>
<body>
    <?php
$posicion ="arriba";
switch($posicion){
case "arriba": 
    echo "La variable contiene ";
    echo "el valor arriba";
    break;
    case "abajo":
        echo "La variable contiene ";
        echo " el valor abajo";
        break;
        default:
        echo "La variable contiene otro valor";
        echo "distinto de arriba y abajo";




}
    ?>
</body>
</html>