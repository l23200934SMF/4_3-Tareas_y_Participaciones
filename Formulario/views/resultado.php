<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>

    <!-- Enlazo mi archivo de estilos -->
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <!-- Título principal -->
    <h2 style="color: green; text-align:center;">
        Mensaje enviado correctamente
    </h2>

    <!-- Aquí muestro los datos que el usuario envió -->
    <div style="width: 400px; margin: auto;">

        <p><strong>Nombre:</strong> <?php echo $resultado["nombre"]; ?></p>
        <p><strong>Correo:</strong> <?php echo $resultado["correo"]; ?></p>
        <p><strong>Teléfono:</strong> <?php echo $resultado["telefono"]; ?></p>
        <p><strong>Mensaje:</strong> <?php echo $resultado["mensaje"]; ?></p>
        <p><strong>Fecha:</strong> <?php echo $resultado["fecha"]; ?></p>

        <div style="text-align:center; margin-top:20px;">
            <a href="index.php">Volver</a>
        </div>

    </div>
</body>
</html>