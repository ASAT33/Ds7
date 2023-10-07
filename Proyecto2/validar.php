<?php
session_start();

$apiKey = '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'; // Reemplaza con tu clave API de SendinBlue

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Verifica si el usuario y contraseña coinciden en el arreglo de sesiones
    foreach ($_SESSION['usuarios'] as $user) {
        if ($user['username'] === $usuario && password_verify($contrasena, $user['password'])) {
            // Inicio de sesión exitoso
            $_SESSION['usuario'] = $usuario;
            $_SESSION['codigo_autenticacion'] = strval(mt_rand(100000, 999999)); // Genera un código aleatorio de 6 dígitos
            $_SESSION['limite_tiempo'] = time() + 70; 
            $_SESSION['email'] = $user['email'];

            // Envía el código de verificación por correo
            $to = $user['email'];
            $subject = 'Código de Verificación';
            $content = 'Tu código de verificación es: ' . $_SESSION['codigo_autenticacion'];

            $data = array(
                'sender' => array('name' => 'Proyecto 1', 'email' => 'servidorproy@gmail.com'),
                'to' => array(array('email' => $to)),
                'subject' => $subject,
                'htmlContent' => $content
            );

            $headers = array(
                'Content-Type: application/json',
                'api-key: ' . $apiKey
            );

            $url = 'https://api.sendinblue.com/v3/smtp/email';

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
        }
    }

    header("Location: index.html");
    exit();
}
?>
