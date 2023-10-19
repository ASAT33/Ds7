
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Todas las Tareas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <h1>Todas las Tareas</h1>
    <?php require_once('navbar.php'); ?>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Responsable</th>
            <th>Estado</th>
        </tr>
        <?php require_once ('functions.php');
        $tareas = obtener_todas_las_tareas();
        foreach ($tareas as $tarea) {
            echo "<tr>";
            echo "<td>{$tarea['nombre']}</td>";
            echo "<td>{$tarea['fecha']}</td>";
            echo "<td>{$tarea['responsable']}</td>";
            echo "<td>{$tarea['estado']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
