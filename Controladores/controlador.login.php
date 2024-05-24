<?php

// Incluye el archivo del modelo de usuario
include('../Modelos/modeloUsuario.php'); 

// Verifica si los campos 'usuario' y 'clave' han sido enviados y no están vacíos
if (isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['clave']) && !empty($_POST['clave'])) {
    // Asigna las variables 'usuario' y 'clave' con los datos enviados desde el formulario
    $usuarioIN = $_POST['usuario'];
    $claveUsuarioIN = $_POST['clave'];

    try {
        // Crea una instancia del objeto modelosUsuario con el nombre de usuario ingresado
        $objUsuario = new modelosUsuario(NULL, $usuarioIN, NULL, NULL); 
        // Realiza la consulta para verificar el login
        $Consulta = $objUsuario->consultaLogin();
        
        // Asigna las variables con los resultados de la consulta
        $usuarioBD = $Consulta->nombre; 
        $claveUsuarioBD = $Consulta->clave; 
        $tipoBD = $Consulta->tipoUsuario;

        // Verifica si el nombre de usuario ingresado coincide con el de la base de datos
        if ($usuarioIN == $usuarioBD) {
            // Verifica si la contraseña ingresada coincide con la de la base de datos
            if ($claveUsuarioIN == $claveUsuarioBD) {
                // Inicia una nueva sesión o reanuda la existente
                session_start();
                // Guarda el tipo de usuario en una variable de sesión
                $_SESSION['usuario'] = $tipoBD; 

                // Redirige al usuario según su tipo (cliente o administrador)
                if ($tipoBD == "cliente") {
                    echo '<script type="text/javascript">
                            alert("INGRESO EXITOSO, BIENVENIDO CLIENTE!!");
                            window.location.href="";
                        </script>';
                } elseif ($tipoBD == "administrador") {
                    echo '<script type="text/javascript">
                            alert("INGRESO EXITOSO, BIENVENIDO ADMIN!!");
                            window.location.href="../Vistas/administrador.php";
                        </script>';
                }
            } else {
                // Muestra un mensaje de error si la contraseña es incorrecta y redirige al login
                echo '<script type="text/javascript">
                      alert("ERROR EN LA CONTRASEÑA");
                      window.location.href="../login.php";
                  </script>';
            }
        } else {
            // Muestra un mensaje de error si el usuario es incorrecto y redirige al login
            echo '<script type="text/javascript">
                    alert("ERROR EN EL USUARIO");
                    window.location.href="../login.php";
                </script>';
        }

    } catch (\Throwable $error) {
        // Muestra un mensaje de error en caso de excepción y termina el script
        echo "ERROR (controlador): " . $error->getMessage();
        die();
    }
}

?>
