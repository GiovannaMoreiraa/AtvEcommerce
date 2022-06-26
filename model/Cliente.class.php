<?php

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




    function __construct()
    {
        // Dados para conectar com o banco
        $host = "localhost";
        $dbname = "ecommerce";
        $user = "root";
        $pass = "";

        // Instância do banco
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->pdo = $pdo;
    }


    function getClientes()
    {
        $pdo = $this->pdo;
        $sql = "SELECT * from cliente";
        $results = $pdo->query($sql)->fetchAll();


        echo '<ul>';
        foreach ($results as $result) {
            echo '<li>';
            echo '<h2>' . $result["NOME"] . '</h2><p>' . $result["DTNASC"] . '</p>';
            echo ' <p><b>Id: </b>' . $result["IDCLI"] . '</p>';
            echo ' <p><b>Login: </b>' . $result['LOGIN'] . '</p>';
            echo '<a id="remover" href="controller/cliente-remove.php?id=' . $result["IDCLI"] . '">Deletar Cliente</a>';
            echo ' </li>';
        }
        echo '</ul>';
    }


    function remove(){
        $id = $_GET['id'];
        $pdo = $this->pdo;

        $sql = "delete from cliente where IDCLI = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id',$id);
        $result = $stmt->execute();
        if (!$result){
            throw new Exception("Erro para deletar o cliente");
        }
    }

    function add()
    {
        try {


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
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':login', $login);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':endereco', $endereco);
            $stmt->bindParam(':rg', $rg);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->bindParam(':celular', $celular);
            $stmt->bindParam(':dtnasc', $nasc);
            $stmt->bindParam(':sexo', $sexo);


            $stmt->execute();
        } catch (Exception $e) {
            echo "Erro : " . $e->getMessage();
        }
    }
}
