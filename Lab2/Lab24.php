<html>
    <head>
        <title>Laboratorio 2.4</title>
</head>
<body>
    <?php
    //Creacion del arreglo
    $personas =array("Juan"=>"Panama",
    "Jhon" => "USA", 
    "eica" => "finlandia",
    "kusanagi" => "japon");

    //Recorrer todo el arreglo
    foreach($personas as $persona => $pais){
print "$persona es de $pais<br>";
 }
echo "<br>".$personas["Juan"];
echo "<br>".$personas["eica"];

    ?>
</body>
</html>