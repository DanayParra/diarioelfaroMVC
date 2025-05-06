<?php
require_once '../models/contacto.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $correo = filter_var(trim($_POST['correo']), FILTER_SANITIZE_EMAIL);
    $mensaje = htmlspecialchars(trim($_POST['mensaje']));

    // Validar datos básicos
    if (!empty($nombre) && filter_var($correo, FILTER_VALIDATE_EMAIL) && !empty($mensaje)) {
        $contacto = new Contacto($nombre, $correo, $mensaje);

        // Guardar en archivo
        $contacto->guardarEnArchivo();

        // enviar correo
        $contacto->enviarCorreo('contacto@diarioelfaro.cl');

        echo "<h2>Gracias, $nombre. Hemos recibido tu mensaje.</h2>";
    } else {
        echo "<h2>Error: Verifica los campos ingresados.</h2>";
    }
} else {
    header("Location: ../views/contacto.php");
    exit();
}
