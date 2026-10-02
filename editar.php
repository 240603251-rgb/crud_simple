<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <?php
    include 'conexion.php';

    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        $sql = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $nombre = $row["nombre"];
            $email = $row["email"];
        } else {
            echo "Usuario no encontrado.";
            exit;
        }
    } else {
        echo "ID de usuario no especificado.";
        exit;
    }
    ?>
    <form action="actualizar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        
        <label for="nombre">Nombre:</label>
        <!-- Se agregó el pattern para evitar números -->
        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+" title="Solo se permiten letras y espacios" required><br><br>
        
        <label for="email">Email:</label>
        <!-- Se cambió a type="text" y se agregó el pattern que permite la ñ -->
        <input type="text" id="email" name="email" value="<?php echo $email; ?>" pattern="[a-zA-Z0-9._%+\-ñÑ]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,}$" title="Ingresa un correo electrónico válido (se permite la ñ)" required><br><br>
        
        <input type="submit" value="Actualizar">
    </form>
    <a href="index.php">Volver a la lista</a>
</body>
</html>