
<head>
    <!-- Esta sección define la cabecera del documento -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAPROCOM S.A.S</title> <!-- Título de la página -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/styles.css"> <!-- Enlace a la hoja de estilos CSS -->
    <link rel="shortcut icon" href="img/logo.png" type="image/" /> <!-- Icono de la pestaña del navegador -->
    <link rel="stylesheet" href="css/formulario.css"> <!-- Enlace a otra hoja de estilos específica para el formulario -->
</head>

<header class="l-header" id="header">
    <!-- Aquí comienza la sección del encabezado -->
    <nav class="nav tk-container">
        <!-- Navegación principal -->
        <a href="../index.php" class="logo">
            <img src="img/logo.png" width="50px" height="50px" alt="CAPROCOM LOGO"> <!-- Logo de la empresa -->
        </a>
        <div class="nav_menu">
            <ul class="nav_list">
                <!-- Lista de enlaces de navegación -->
                <li class="nav_item"><a href="../index.php" class="nav_link active-link">Inicio</a></li>
                <li class="nav_item"><a href="../index.php#about" class="nav_link">Nosotros</a></li>
                <li class="nav_item"><a href="../index.php#services" class="nav_link">Servicios</a></li>
                <li class="nav_item"><a href="https://wa.link/w50948" class="nav_link">Contacto</a></li>
                <li class="nav_item"><a href="formulario.php" class="nav_link">Reserva tu cita aquí</a></li>
            </ul>
        </div>
        <div class="nav_toggle">
            <i class="bx bx-menu"></i> <!-- Icono para mostrar/ocultar el menú en dispositivos móviles -->
        </div>
    </nav>
</header>

<form method="post" action="../Controladores/registrar.php">
    <!-- Formulario para agendar una cita -->
    <h2 class="section-title">Agenda tu cita</h2> <!-- Título del formulario -->

    <div>
        <input type="text" name="nombre" placeholder="Nombre"> <!-- Campo para ingresar el nombre -->
    </div>
    <div>
        <input type="text" name="apellido" placeholder="Apellido"> <!-- Campo para ingresar el apellido -->
    </div>
    <div>
        <input type="text" name="direccion" placeholder="Dirección"> <!-- Campo para ingresar la dirección -->
    </div>
    <div>
         <input type="text" name="ciudad" placeholder="Ciudad">  <!-- Campo para ingresar la ciudad -->
    </div>
    <div>
        <input type="text" name="servicio" placeholder="Servicio"> <!-- Campo para ingresar el tipo de servicio -->
    </div>
    <div>
        <input type="text" name="telefono" placeholder="Teléfono"> <!-- Campo para ingresar el número de teléfono -->
    </div>
    <div>
        <input type="date" name="fecha" placeholder="Fecha de la cita"><!-- Campo para seleccionar la fecha de la cita -->
    </div>
        <input class="btn" type="submit" name="register" value="Enviar">
</form>


