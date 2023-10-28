<?php
if(isset($_COOKIE['contador'])){
  setcookie('contador', $_COOKIE['contador']+1, time()+365*24*60*60);
 
  $mensaje = 'Gracias por visitarnos. Numero de visitas' . $_COOKIE['contador'];
}
else{
    setcookie('contador',1, time()+365*24*60*60);
    $mensaje ='Bienvenido a nuestro sitio web';
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head>
<title>Laboratorio 12</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>
    <h1>Contador de visitas con Cookies</h1>
    <h3><?php echo $mensaje; ?></h3>
</body>
</html>