<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/estilo.css">
<title>Formulario</title>
</head>

<body>

<h2>Contáctanos</h2>

<?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

<form method="POST">

<input type="text" name="nombre" placeholder="Nombre" required>
<input type="email" name="correo" placeholder="Correo" required>
<input type="text" name="telefono" placeholder="Teléfono" required>

<textarea name="mensaje" placeholder="Mensaje" required></textarea>

<button type="submit">Enviar</button>

</form>

</body>
</html>