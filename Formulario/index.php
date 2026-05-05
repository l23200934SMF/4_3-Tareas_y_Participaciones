<?php

// Importe el controlador 
require_once "controllers/ContactoController.php";

$controller = new ContactoController();

// Aquí verifico si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Si se envió, mando a procesar los datos
    $controller->procesarFormulario();
} else {
    // Si no, solo muestro el formulario
    $controller->mostrarFormulario();
}

?>