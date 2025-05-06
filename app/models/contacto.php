<?php

class Contacto {
    private $nombre;
    private $correo;
    private $mensaje;

    public function __construct($nombre, $correo, $mensaje) {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->mensaje = $mensaje;
    }

    public function guardarEnArchivo() {
        $datos = "Nombre: $this->nombre\nCorreo: $this->correo\nMensaje: $this->mensaje\n\n";
        file_put_contents('../../mensajes.txt', $datos, FILE_APPEND);
    }

    public function enviarCorreo($destinatario) {
        $asunto = "Nuevo mensaje de contacto de $this->nombre";
        $contenido = "Nombre: $this->nombre\nCorreo: $this->correo\nMensaje: $this->mensaje";
        return mail($destinatario, $asunto, $contenido);
    }
}