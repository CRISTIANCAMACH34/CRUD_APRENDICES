<?php
require_once '../Model/Conexion.php';

class ControllerConexion { 
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function ObtenerDatos() {
        
        try{
            $pdo = $this->conexion->getConexion();
            $query = $pdo->prepare("SELECT * FROM aprendices");
            $query->execute();
            return $query->fetchALL(PDO::FETCH_ASSOC);
        }  catch (PDOException $e){
            die ("El error de conexión: " . $e->getMessage());
        }  
    }
}
$controller = new ControllerConexion();
$datos = $controller->ObtenerDatos(); // No se pasa ningún argumento

// Mostrar los datos correctamente
echo $datos;