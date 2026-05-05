<?php
class Contacto {

    // Esto es para guardar la información del formulario
    public static function guardar($nombre, $correo, $telefono, $mensaje) {

        //fecha y hora actual
        $fecha = date("d/m/Y H:i:s");

        //De esta manera se guardara la informacion en el archivo de datos
        $texto = "Nombre: $nombre | Correo: $correo | Teléfono: $telefono | Mensaje: $mensaje | Fecha: $fecha\n";

        // Guardo la información en el archivo datos.txt
        file_put_contents(__DIR__ . "/../data/datos.txt", $texto, FILE_APPEND);

        return [
            "nombre" => $nombre,
            "correo" => $correo,
            "telefono" => $telefono,
            "mensaje" => $mensaje,
            "fecha" => $fecha,
            "estado" => "Mensaje enviado correctamente"
        ];
    }
}
?>