<!DOCTYPE html>
<html lang="es">
<head>
    <title>Eliminar cita</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<body>
    <h1>¿Estás seguro de que deseas eliminar esta cita?</h1>
    <?php
    // Conexión a la base de datos (ajusta los parámetros según tu configuración)
    $conexion = mysqli_connect("localhost", "root", "", "caprocom_sas") or die("No se pudo conectar a la base de datos.");

    // Obtener el nombre de la cita a eliminar desde la URL
    $nombre = $_GET['nombre'];

    // Preparar la consulta SQL para borrar el registro
    $sql = "DELETE FROM datos WHERE nombre = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $nombre);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "<p class='alert alert-success'>La cita ha sido eliminada exitosamente.</p>";
    } else {
        echo "<p class='alert alert-danger'>Error al eliminar la cita: " . $conexion->error . "</p>";
    }

    // Cerrar la sentencia preparada y la conexión a la base de datos
    $stmt->close();
    mysqli_close($conexion);
    ?>

    <!-- Regresar al listado de citas -->
    <a href="admin.php" class="btn btn-primary">Regresar</a>
</body>
</html>