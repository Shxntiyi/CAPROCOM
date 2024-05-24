<!DOCTYPE html>
<html lang="es">
<head>
    <title>Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel='stylesheet' type='text/css' href='css/admin.css'>
    <link rel='stylesheet' type='text/css' href='css/styles.css'>
</head>
    <body>
        <!-- Contenedor principal -->
        <div class="container">
            <!-- Título de la página -->
            <h1 class="text-center my-4">Agenda de Citas</h1>

            <!-- Botón de cierre de sesión -->
            <button class="btn btn-danger position-absolute top-0 end-0 m-3" id="cerrar-sesion">Cerrar sesión</button>

            <!-- Tabla de citas -->
            <div class="table-center">
                <?php
                // Conexión a la base de datos (ajusta los parámetros según tu configuración)
                $conexion = mysqli_connect("localhost", "root", "", "caprocom_sas") or die("No se pudo conectar a la base de datos.");

                // Consulta SQL para obtener los registros de la tabla 'datos'
                $sql = "SELECT * FROM datos";
                $result = mysqli_query($conexion, $sql) or die("Error al ejecutar la consulta.");

                // Creación de la tabla HTML para mostrar los registros
                echo "<table class='table table-striped table-hover table-bordered'>";
                echo "<tr><th>Nombre</th><th>Apellido</th><th>Dirección</th><th>Ciudad</th><th>Servicio</th><th>Teléfono</th><th>Fecha</th><th>Acciones</th></tr>";

                // Itera sobre el resultado para mostrar los registros
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["nombre"] . "</td>";
                    echo "<td>" . $row["apellido"] . "</td>";
                    echo "<td>" . $row["direccion"] . "</td>";
                    echo "<td>" . $row["ciudad"] . "</td>";
                    echo "<td>" . $row["servicio"] . "</td>";
                    echo "<td>" . $row["telefono"] . "</td>";
                    echo "<td>" . $row["fecha"] . "</td>";
                    echo "<td><a href='delete_cita.php?nombre=" . urlencode($row["nombre"]) . "' class='btn btn-danger'>Eliminar cita</a></td>";
                    echo "</tr>";
                }

                // Cierra la tabla HTML
                echo "</table>";

                // Cierra la conexión a la base de datos
                mysqli_close($conexion);
                ?>
            </div>
        </div>

                <!-- JavaScript para cerrar sesión -->
            <script>
                // Selector del botón de cierre de sesión
                const cerrarSesionBtn = document.getElementById("cerrar-sesion");

                // Función para cerrar sesión
                function cerrarSesion() {
                    // Redirigir al usuario a la página de inicio de sesión
                    window.location.href = "../index.php";
                }

                // Agregamos un event listener al botón de cierre de sesión
                cerrarSesionBtn.addEventListener("click", cerrarSesion);
            </script>
    </body>
</html>