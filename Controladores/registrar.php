<?php
// Incluye el archivo que contiene la clase de conexión a la base de datos
require_once("../Modelos/modeloConexion.php");
// Inicia la conexión a la base de datos
$conexion = Conexion::StartUp();

// Verifica si el formulario ha sido enviado con el botón 'register'
if (isset($_POST['register'])) {
    // Verifica que todos los campos del formulario contengan al menos un carácter
    if (
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['ciudad']) >= 1 &&
        strlen($_POST['servicio']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['fecha']) >= 1
    ) {
        // Limpia y asigna los valores de los campos del formulario a variables
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $direccion = trim($_POST['direccion']);
        $ciudad = trim($_POST['ciudad']);
        $servicio = trim($_POST['servicio']);
        $telefono = trim($_POST['telefono']);
        $fecha = $_POST['fecha']; 
        // Crea la consulta SQL para insertar los datos en la base de datos
        $consulta = "INSERT INTO datos(nombre, apellido, direccion, ciudad, servicio, telefono, fecha)
            VALUES ('$nombre', '$apellido', '$direccion', '$ciudad', '$servicio', '$telefono', '$fecha' )";

        try {
            // Prepara la consulta
            $statement = $conexion->prepare($consulta);
            // Ejecuta la consulta
            $statement->execute();

            // Muestra un mensaje de éxito y redirige al usuario a la página principal
            echo '<script>
                    alert("Tu cita ha sido agendada");
                    window.location.href = "../index.php"; 
                  </script>';
        } catch (PDOException $e) {
            // Muestra un mensaje de error y redirige al usuario al formulario en caso de excepción
            echo '<script>
                alert("Ocurrió un error: ' . $e->getMessage() . '");
                window.location.href = "../Vistas/formulario.php";
                    </script>';
        }
    } else {
        // Muestra un mensaje de error y redirige al usuario al formulario si faltan campos por llenar
        echo '<script>
            alert("Llena todos los campos");
            window.location.href = "../Vistas/formulario.php"; 
      </script>';
    }
}
?>
