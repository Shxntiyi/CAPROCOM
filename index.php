<?php 
    // Incluye el archivo "Vistas/header.php".
    require_once "Vistas/header.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAPROCOM S.A.S</title>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Vistas/css/styles.css">
    <link rel="shortcut icon" href="Vistas/img/logo.png" type="image" />
</head>
<body>

    <main class="l-main">

        <section class="home" id="home">
            <div class="home_container tk_container tk-grid">
                <div class="home_data">
                    <h1 class="home_title">Instalaciones de gas y más</h1>
                    <h2 class="home_subtitle">Con 30 años de experiencia</h2>
                    <a href="Vistas/formulario.php" class="button">RESERVA TU CITA AHORA</a>
                </div>
            </div>
        </section>

        <section class="about section tk-container" id="about">
            <div class="about_container tk-grid">
                <div class="about_data">
                    <span class="section-subtitle about_initial">Somos 100% Colombianos</span>
                    <h2 class="section-title about_initial">CAPROCON S.A.S</h2>
                    <p class="about_description">
                        Mision: Brindar servicios confiables de instalación y mantenimiento de equipos e instalaciones de gas, garantizando la seguridad y bienestar de nuestros clientes y el medio ambiente.
                    </p>
                    <p class="about_description">
                        Vision: Ser líderes en la prestación de servicios de gas, reconocidos por nuestra excelencia, compromiso con la seguridad y contribución al desarrollo sostenible.
                    </p>
                </div>
                <div class="about_images">
                    <img src="Vistas/img/tecnico.png" alt="Técnico">
                    <br>
                    <img src="Vistas/img/ingenieros.png" alt="Ingenieros">
                </div>
            </div>
        </section>

        <section class="services section tk-container" id="services">
            <span class="section-subtitle">Ofrecemos</span>
            <h2 class="section-title">Nuestros increíbles servicios</h2>
            <div class="services_container tk-grid">
                <div class="services_content">
                    <img src="Vistas/img/gas.png" class="services_img" alt="">
                    <h3 class="services_title">Instalaciones de gas</h3>
                </div>
                <div class="services_content">
                    <img src="Vistas/img/pc-de-escritorio.png" class="services_img" alt="">
                    <h3 class="services_title">Mantenimiento de equipos</h3>
                </div>
                <div class="services_content">
                    <img src="Vistas/img/redes-de-ordenadores.png" class="services_img" alt="">
                    <h3 class="services_title">Revisión de redes</h3>
                </div>
                <div class="services_content">
                    <img src="Vistas/img/soporte-tecnico.png" class="services_img" alt="">
                    <h3 class="services_title">Homologación de instalaciones</h3>
                </div>
            </div>
        </section>

    </main>   
</body>
</html>

<?php 
    // Incluye el archivo "Vistas/pie.php".
    require_once "Vistas/pie.php";
?>
