<?php
require_once '../models/usuario.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = htmlspecialchars(trim($_POST['usuario']));
    $correo = filter_var(trim($_POST['correo']), FILTER_SANITIZE_EMAIL);
    $clave = password_hash(trim($_POST['clave']), PASSWORD_DEFAULT);

    if (!empty($usuario) && filter_var($correo, FILTER_VALIDATE_EMAIL) && !empty($clave)) {
        $registro = new Usuario($usuario, $correo, $clave);
        $registro->guardarEnArchivo();

        echo "<h2>Cuenta creada con éxito</h2>";
    } else {
        echo "<h2>Error: Datos inválidos.</h2>";
    }
} else {
    header("Location: ../views/registro.php");
    exit();
}