<!DOCTYPE html>
<html lang="es">

<head>
<title>Laboratorio 13</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>
    <h1>Recuperar valor de una cookie</h1>
    
    <?php 
    if(isset($_COOKIE["user"]))
    echo"<h2>Bienvenido ".$_COOKIE["user"]."</h2><br/>";
    else
    echo
    "<h2>Bienvenido invitado!</h2><br/>"
    ?>
    <a href="Lab131.php">...Regresar</a>&nbsp;
    <a href="Lab134.php">Continuar...</a>
</body>
</html>