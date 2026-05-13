<?php

//se importa el modelo 
require_once "models/Contacto.php";

class ContactoController {

    // funcion para mostrar el formulario
    public function mostrarFormulario() {
        require_once "views/formulario.php";
    }

    // se ejecutara el procesar formulario cuando este sea enviado
    public function procesarFormulario() {

        // se reciben los datos que se hayan enviado 
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $mensaje = $_POST["mensaje"];

        //se valida que el mensaje minimo tenga 10 palabras
        if (strlen($mensaje) < 10) {

            // Si no cumple sale el siguiente erros
            $error = "El mensaje debe tener mínimo 10 caracteres";

            // Vuelvo a mostrar el formulario con el error
            require "views/formulario.php";
            return;
        }

        // Si todo está bien mando los datos al modelo para guardarlos
        $resultado = Contacto::guardar($nombre, $correo, $telefono, $mensaje);

        require "views/resultado.php";
    }
}

?>