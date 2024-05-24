<?php
class Conexion
{
    // Método estático para iniciar la conexión a la base de datos
    public static function StartUp()
    {
        // Crea una nueva instancia de PDO para conectarse a la base de datos MySQL
        $pdo = new PDO('mysql:host=localhost;dbname=caprocom_sas;charset=utf8', 'root', '');
        
        // Establece el modo de error de PDO para que lance excepciones en caso de error
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        
        // Devuelve el objeto PDO para ser usado en consultas a la base de datos
        return $pdo;
    }
}
?>
