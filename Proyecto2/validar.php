<?php
session_start();

$apiKey = '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'; // Reemplaza con tu clave API de SendinBlue

$conexion = new mysqli("localhost", "root", "", "farmacia_db", 3306);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $conexion->real_escape_string($_POST['usuario']);
    $contrasena = $conexion->real_escape_string($_POST['contrasena']);

    $query = "SELECT * FROM usuarios WHERE username='$usuario'";
    $resultado = $conexion->query($query);

    if ($resultado->num_rows == 1) {
        $row = $resultado->fetch_assoc();
        if (password_verify($contrasena, $row['password'])) {
            // Inicio de sesión exitoso
            $_SESSION['usuario'] = $usuario;
            $_SESSION['codigo_autenticacion'] = strval(mt_rand(100000, 999999)); // Genera un código aleatorio de 6 dígitos
            $_SESSION['limite_tiempo'] = time() + 300; // 300 segundos = 5 minutos
            // Obtén la dirección de correo electrónico del usuario autenticado
            $email = $row['email'];
            $_SESSION['email'] = $email;

            // Envía el código de verificación por correo
            $url = 'https://api.sendinblue.com/v3/smtp/email';

            $to = $email;
            $subject = 'Código de Verificación';
            $content = 'Tu código de verificación es: ' . $_SESSION['codigo_autenticacion'];

            $data = array(
                'sender' => array('name' => 'Tu Nombre', 'email' => 'tucorreo@example.com'),
                'to' => array(array('email' => $to)),
                'subject' => $subject,
                'htmlContent' => $content
            );

            $headers = array(
                'Content-Type: application/json',
                'api-key: ' . $apiKey
            );

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($ch);
            curl_close($ch);

            header("Location: autenticacion.php"); // Redirige a la página de autenticación
            exit();
        } else {
            $error = "Contraseña incorrecta";
        }
    } else {
        $error = "Usuario no encontrado";
    }
}
?>
