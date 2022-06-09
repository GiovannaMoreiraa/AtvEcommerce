<?php 

class ConexaoPdo{


    private static $instance;

    private $user = "root";
    private $db = "ecommerce" ;
    private $senha = "";
    private $host = "localhost";
    
    function conectar()
    {
        if (self::$instance != null){
            return self::$instance
        }
        try{
        $pdo = new PDO("mysql:host=$this->host;dbname=" . $this->db . ";localhost",$this->user,$this->senha);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $pdo;

        }catch (PDOException $e){
            die("Erro no banco : " . $e->getMessage());
        }
    }
    

}
