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


    function getConexao()
    {
        $pdo = new ConexaoPdo(); 
        return $pdo;
    }


    function __construct($login,$senha)
    {
        $this->login = $login;
        $this->senha = $senha;
    }

    function setAllData($nome,$cpf,$endereco,$rg,$telefone,$celular,$nasc)
    {
        $this->nome = $nome;
        $this->celular = $celular;
        $this->endereco = $endereco;
        $this->rg = $rg;
        $this->telefone = $telefone;
        $this->celular = $celular;
        $this->nasc = $nasc; 
        $this->cpf = $cpf;
    }

    function cadastrar()
    {
        $pdo = $this->getConexao();

        $sql = "SELECT * from cliente where nome = $this->nome and login = $this->login and senha = $this->senha and 
            dtnasc = $this->nasc and sexo
        ";

        $sql = "INSERT INTO cliente (nome, login, senha, dtnasc, sexo, cpf, rg, telefone, celular)
         VALUES ($this->nome,$this->login,$this->senha,$this->nasc,$this->sexo,$this->cpf,$this->rg,$this->telefone,$this->celular)";

        $pdo->query($sql);
    }

    function logar()
    {
        $login = $this->login;
        $senha = $this->senha;

        $sql = "SELECT idcli from cliente WHERE login = 'arthur' and senha = 'senhasenha'";
        $pdo = $this->getConexao();
        $id = $pdo->query($sql)->fetchAll();
        var_dump($id);
        echo "<br>";
        var_dump($this);
        echo "<br>";
        
        $_SESSION['users'][0] = $this;
    }
}