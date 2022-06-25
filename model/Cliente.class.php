<?php 
require_once "../controller/conexaoPdo.php";

class Cliente 
{
    
    protected string $nome;
    protected string $login;
    protected string $senha;
    protected string $cpf;
    protected string $endereco;
    protected string $rg;
    protected string $telefone;
    protected string $celular;
    protected $nasc;
    protected $pdo;




    function __construct(){
        // Dados para conectar com o banco
        $host = "";
        $dbname = "";
        $user = "";
        $pass = ""; 

        // Instância do banco
        $pdo = new PDO("mysql:host=$host;dbname=$dbname" , $user , $pass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        $this->pdo = $pdo;
    }



    function add(){
        try{

        
        $nome = $_GET['nome'];
        $login = $_GET['login'];
        $senha = $_GET['senha'];
        $cpf = $_GET['cpf'];
        $endereco = $_GET['endereco'];
        $rg = $_GET['rg'];
        $telefone = $_GET['telefone'];
        $celular = $_GET['celular'];
        $nasc = $_GET['nasc'];
        $sexo = $_GET['sexo'];


        $pdo = $this->pdo;
        
        $sql = "insert into cliente (nome, login, senha, dtnasc, 
        endereco, sexo, cpf, rg, telefone, celular) 
        values (:nome, :login, :senha, :dtnasc,
         :endereco, :sexo, :cpf, :rg, :telefone, :celular)";

        
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome',$nome);
        $stmt->bindParam(':login',$login);
        $stmt->bindParam(':senha',$senha);
        $stmt->bindParam(':cpf',$cpf);
        $stmt->bindParam(':endereco',$endereco);
        $stmt->bindParam(':rg',$rg);
        $stmt->bindParam(':telefone',$telefone);
        $stmt->bindParam(':celular',$celular);
        $stmt->bindParam(':dtnasc',$nasc);
        $stmt->bindParam(':sexo',$sexo);


        $stmt->execute();

        }Catch(Exception $e){
            echo "Erro : " . $e->getMessage();
        }
    }
}