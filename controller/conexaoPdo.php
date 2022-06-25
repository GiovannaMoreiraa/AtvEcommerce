<?php 

class ConexaoPdo{


    private static $instance;


    // usuario do banco
    private $user = "root";

    //nome do banco
    private $db = "ecommerce" ;

    // senha do banco  
    private $senha = "";

    // ip do banco
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
