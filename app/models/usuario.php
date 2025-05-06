<?php

class Usuario {
    private $usuario;
    private $correo;
    private $clave;

    public function __construct($usuario, $correo, $clave) {
        $this->usuario = $usuario;
        $this->correo = $correo;
        $this->clave = password_hash($clave, PASSWORD_DEFAULT);
    }

    public function guardarEnArchivo() {
        $linea = "Usuario: $this->usuario\nCorreo: $this->correo\nClave (encriptada): $this->clave\n\n";
        file_put_contents('../../usuarios.txt', $linea, FILE_APPEND);
    }
}