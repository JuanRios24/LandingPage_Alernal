<?php
// Verificar si se recibió una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $empresa = $_POST['empresa'];
    $nit = $_POST['nit'];
    $ciudad = $_POST['ciudad'];
    $telefono = $_POST['telefono'];
    $asunto = $_POST['asunto'];

    // Configurar el correo electrónico
    $destinatario = "juanrbertel24@gmail.com";
    $asunto_correo = "Formulario Alernal - $asunto";
    $mensaje = "Nombre: $nombre \nCorreo: $correo \nEmpresa: $empresa \nNit: $nit \nCiudad: $ciudad \nTeléfono: $telefono \nAsunto: $asunto";

    // Enviar el correo electrónico
    mail($destinatario, $asunto_correo, $mensaje);

    // Mostrar la página de éxito después de 5 segundos
    echo '<!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Envío Exitoso</title>
            <!-- Enlace a Tailwind CSS -->
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
            <!-- Script para redireccionar después de 5 segundos -->
            <script>
                setTimeout(function(){
                    window.location.href = "https://alernal.com.co";
                }, 5000);
            </script>
        </head>
        <body class="bg-gray-100 flex items-center justify-center h-screen">
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-4">¡Datos enviados correctamente!</h2>
                <p class="mb-4">Gracias por contactarnos. Nos pondremos en contacto contigo lo antes posible.</p>
                <p>Redireccionando a <a href="https://alernal.com.co" class="text-blue-500 underline">alernal.com.co</a> en 5 segundos...</p>
            </div>
        </body>
        </html>';
    exit;
}

?>