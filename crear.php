<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Usuario</title>
</head>
<body>
    <h1>Agregar Usuario</h1>
    <form action="guardar.php" method="post">
        <label for="nombre">Nombre:</label>
        <!-- Se agregó el pattern para evitar números y se añadió un title para el mensaje de error -->
        <input type="text" id="nombre" name="nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+" title="Solo se permiten letras y espacios" required><br><br>
        
        <label for="email">Email:</label>
        <!-- Se cambió a type="text" y se agregó el pattern que permite la ñ antes del @ -->
        <input type="text" id="email" name="email" pattern="[a-zA-Z0-9._%+\-ñÑ]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,}$" title="Ingresa un correo electrónico válido (se permite la ñ)" required><br><br>
        
        <input type="submit" value="Guardar">
    </form>
    <a href="index.php">Volver a la lista</a>
</body>
</html>