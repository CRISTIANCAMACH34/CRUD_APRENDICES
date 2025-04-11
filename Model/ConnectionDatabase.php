<?php
class Conexion{
    private $host = "localhost";
    private $database = "aprendices";
    private $usuario = "root";
    private $password = "";
    private $charset = "utf8mb4";
    private $pdo;

    public function __construct() {
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->database . ";charset=" . $this->charset;
            $this->pdo = new PDO($dsn, $this->usuario, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
 
    public function getConexion(){
        return $this->pdo;
    }
}