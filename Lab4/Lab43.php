<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$arreglo =array();

for($i=0;$i<20;$i++){
$valor=rand(1,100);

while(in_array($valor, $arreglo)){
$valor=rand(1,100);
}

$arreglo[$i]=$valor;
}
$maximo = max($arreglo);
    $posicion = array_search($maximo, $arreglo);
    echo "<p>" . print_r($arreglo) . "</p>";
    echo "<p>El elemento mayor es $maximo y está en la posición $posicion</p>";
    ?>    
</body>
</html>