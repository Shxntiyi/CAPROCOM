<?php
// Inicia una nueva sesión o reanuda la existente
session_start();

// Destruye toda la información registrada de la sesión actual
session_destroy();

// Redirige al usuario a la página de inicio de sesión
header("Location:../login.php");
?>
