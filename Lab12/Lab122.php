<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Laboratorio 12</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>

<body>
    <h1>Manejo de sesiones</h1>
    <h2>Paso 2: se accede a la variable de sesion almamcenada y se destruye</h2>
<?php
 if (isset($_SESSION['var'])){
    $var=$_SESSION['var'];
    print("<p>Valor de la variable de sesion: $var</p>\n");
    unset ($_SESSION['var']);
    print ("<a href=Lab123.php>Paso 3</a>");

 }
 else{
    print ("sesion no iniciada, ir al <a href='Lab121.php'paso 1</a> para iniciar la sesion");
 }
?>
</body>
</html>