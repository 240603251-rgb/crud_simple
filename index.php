<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD de Usuarios</title>
    <link rel="stylesheet" href="tabla.css">
</head>
<body>
<script type="text/javascript">
    function preguntar() 
        {
         var res=confirm('¿Deseas eliminar el registro?');
            if (res == true)
                {
                return true;
                }
            else{
                return false;
                }
         }
</script>
    <h1>Lista de Usuarios</h1>
    <a href="crear.php">Agregar Usuario</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
            
        </tr>
        <?php
        include 'conexion.php';
        
        $sql = "SELECT * FROM usuarios";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                
                ?> 
<td><a href="editar.php?id=<?php echo  $row['id'] ?>">Editar</a> | <a  href="eliminar.php?id=<?php echo  $row['id'] ?>" onclick="return preguntar()"  >Eliminar</a></td>
               <?php
            }
        } else {
            echo "<tr><td colspan='4'>No se encontraron usuarios.</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
