<?php

// Incluye el archivo que contiene la clase de conexión a la base de datos
include("modeloConexion.php");

// Definición de la clase modelosUsuario que hereda de la clase Conexion
class modelosUsuario extends Conexion{

    // Atributos de la clase
    private $codigo=0;
    private $nombre="texto";
    private $clave=0;
    private $tipoUsuario="texto";

    // Constructor de la clase
    function __construct($codigoIN,$nombreIN,$claveIN, $tipoUsuarioIN)
    {
        $this->codigo=$codigoIN;
        $this->nombre=$nombreIN;
        $this->clave=$claveIN;
        $this->tipoUsuario = $tipoUsuarioIN; 
    }

    // Método para consultar el inicio de sesión del usuario
    public function consultaLogin()
    {
        // Crea una nueva conexión PDO
        $objConexion = new Conexion();
        $objPDO = $objConexion:: StartUp();
        
        try {
            // Prepara la consulta SQL para obtener el nombre, clave y tipo de usuario
            $sql = $objPDO->prepare('SELECT nombre, clave, tipoUsuario FROM usuario WHERE nombre = :nombreUsuario');
            $sql->bindparam(':nombreUsuario', $this->nombre);
            $sql->execute();
            // Devuelve el resultado de la consulta como un objeto
            return $sql->fetch(PDO::FETCH_OBJ);
                                                    
        } catch (\Throwable $error) {
            // Captura y muestra errores en caso de excepción
            echo 'ERROR:' . $error->getMessage();
            die();
        }
    }

    // Método para registrar un nuevo usuario
    public function registrarUsuario()
    {
        // Crea una nueva conexión PDO
        $objConexion = new Conexion(); 
        $objPDO = $objConexion::StartUp();
        
        try {
            // Prepara la consulta SQL para insertar un nuevo usuario
            $sql = $objPDO->prepare("INSERT INTO usuario VALUES
                                        (
                                            :codigo,
                                            :nombre,
                                            :clave,
                                            :tipoUsuario
                                        );"); 
            $sql->bindparam(':codigo',$this->codigo); 
            $sql->bindparam(':nombre',$this->nombre);
            $sql->bindparam(':clave',$this->clave);
            $sql->bindparam(':tipoUsuario',$this->tipoUsuario);
          
            // Ejecuta la consulta
            $sql->execute(); 

        } catch (\Throwable $error) {
            // Captura y muestra errores en caso de excepción
            echo("Error modelo!; ".$error->getMessage());
            die();
        }
    }

    // Método para listar todos los usuarios
    function listarUsuario(){
        $objConexion = new Conexion();
        $objPDO = $objConexion::StartUp();
                                            
        try {
            // Prepara la consulta SQL para seleccionar todos los usuarios
            $sql= $objPDO->prepare("SELECT * FROM usuario"); 
            $sql->execute();
            // Devuelve el resultado de la consulta como un arreglo de objetos
            return $sql->fetchAll(PDO::FETCH_OBJ);
        } catch(\Throwable $error){
            // Captura y muestra errores en caso de excepción
            echo'ERROR:'. $error -> getMessage();
            die();
        }   
    }

    // Método para consultar un usuario específico
    public function consultarUsuario(){ 
        $objConexion = new Conexion(); 
        $objPDO = $objConexion::StartUp();

        try {
            // Prepara la consulta SQL para seleccionar un usuario por su código
            $sql = $objPDO->prepare("SELECT * FROM usuario WHERE codigo=:codigo");
            $sql->bindparam(':codigo', $this->codigo);
            $sql->execute(); 

            // Devuelve el resultado de la consulta como un arreglo de objetos
            return $sql->fetchAll(PDO::FETCH_OBJ);
        } catch (\Throwable $error) {
            // Captura y muestra errores en caso de excepción
            echo 'ERROR: '. $error->getMessage();          
            die();
        }
    }

    // Método para actualizar un usuario
    public function actualizarUsuario(){
        $objConexion= new Conexion();
        $objPDO=$objConexion::StartUp();
        try{
            // Prepara la consulta SQL para actualizar los datos de un usuario
            $sql=$objPDO->prepare("UPDATE usuario SET
                                     nombre=:nombre,
                                     clave=:clave,
                                     tipoUsuario=:tipoUsuario
                                     WHERE codigo=:codigo;");
            $sql->bindparam(':codigo',$this->codigo);
            $sql->bindparam(':nombre',$this->nombre);
            $sql->bindparam(':clave',$this->clave);
            $sql->bindparam(':tipoUsuario',$this->tipoUsuario);
           
            // Ejecuta la consulta
            $sql->execute();
        } catch (\Throwable $error) {
            // Captura y muestra errores en caso de excepción
            echo 'ERROR: '. $error->getMessage();          
            die();
        }
    }

    // Método para eliminar un usuario
    public function eliminarUsuario(){
        $objConexion= new Conexion();
        $objPDO=$objConexion::StartUp();
    
        try {
            // Prepara la consulta SQL para eliminar un usuario por su código
            $sql = $objPDO->prepare("DELETE FROM usuario WHERE codigo = :codigo;");
            $sql->bindparam(':codigo',$this->codigo);
            // Ejecuta la consulta
            $sql->execute();
        } catch(\Throwable $error){
            // Captura y muestra errores en caso de excepción
            echo'ERROR:'.$error->getMessage();
            die();
        }    
    }
}
?>
