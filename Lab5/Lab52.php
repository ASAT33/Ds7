<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 5.2</title>
</head>
<body>
<?php
if (is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'])) {
    $nombreDirectorio = "C:xampp\htdocs\Ds7\Lab5"; 
    $nombrearchivo = $_FILES['nombre_archivo_cliente']['name'];
    $nombreCompleto = $nombreDirectorio . $nombrearchivo;
    $ext = pathinfo($nombrearchivo, PATHINFO_EXTENSION);
    $extensiones_permitidas = array('jpg', 'jpeg', 'gif', 'png');
    $maxSize = 1000000; 

    if ($_FILES['nombre_archivo_cliente']['size'] < $maxSize) {
        if (!in_array($ext, $extensiones_permitidas)) {
            echo "Formato de archivo no válido. Por favor, suba una imagen (jpg, jpeg, gif o png).";
        } else {
            if (file_exists($nombreCompleto)) {
                $idUnico = time();
                $nombrearchivo = $idUnico . "-" . $nombrearchivo;
                echo "Archivo repetido, se cambiará el nombre a $nombrearchivo <br><br>";
            }
            move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio . $nombrearchivo);
            echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
        }
    } else {
        echo "La imagen pesa más de 1MB"; 
    }
} else {
    echo "No se ha podido subir el archivo <br>";
}
?>

</body>
</html>