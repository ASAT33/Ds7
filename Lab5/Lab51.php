<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (is_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name']))
{
 
    $nombreDirectorio = "C:\Users\abidi\Downloads";
    $nombrearchivo = $_FILES['nombre_archivo_cliente']['name'];
    $ext = pathinfo($nombrearchivo, PATHINFO_EXTENSION);
    $nombreCompleto = $nombreDirectorio . $nombrearchivo;
    if (is_file($nombreCompleto))
    {
        $idUnico = time();
        $nombrearchivo = $idUnico . "-" . $nombrearchivo;
        echo "Archivo repetido, se cambiara el nombre a $nombrearchivo <br><br>";
    }
    move_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio . $nombrearchivo);
    echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
}
else
    echo "No se ha podido subir el archivo <br>";
?>
</body>
</html>