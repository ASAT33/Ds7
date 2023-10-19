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
    <h2>Paso 3: se accede a la variable de sesion almamcenada y se destruye</h2>
<?php
 if (isset($_SESSION['var'])){
    $var=$_SESSION['var'];
 }
 else{
    $var="";
 }

     print ("<p>Valor de la variable de sesion: $var</p>\n");
session_destroy();

?>
<a href="Lab121.php">Volver al paso 1</a>
</body>
</html>