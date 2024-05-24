<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Vistas/css/login.css"> 
    <link rel="stylesheet" href="Vistas/css/styles.css"> 
</head>
<body>
    <?php
    // Muestra un mensaje de error si es necesario
    if (isset($mensajeError)) {
        echo '<p style="color: red;">' . $mensajeError . '</p>';
    }
    ?>  
    <form action="Controladores/controlador.login.php" method="post">
        <div class="input-group">
            <h1>Inicia Sesion</h1>
        </div>
            <div class="input-group">
                <label for="username">Usuario</label>
                <input  type="text" id="username" name="usuario" placeholder="Introduce tu usuario" required="">
            </div>
            <div class="input-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="clave" placeholder="Introduce tu contraseña" required="">
            </div>
            <button type="submit">Entrar</button>
            <p class="footer_copy">&#169; 2023 CAPROCON</p>
        </form>
</body>
</html>
