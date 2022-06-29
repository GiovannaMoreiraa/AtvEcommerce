<?php 

namespace model;

require("Db.php");

use model\Db as Db;

class Marca{

    function getMarca(){
        $pdo = Db::connect();
        $stmt = "select * from marca";
        $results = $pdo->query($stmt)->fetchAll();
        return $results;

    }

    function setMarca(){
        $pdo = Db::connect();
        $descricao = $_GET['descricao'];
        $sql = "INSERT INTO marca (descricao) values (:descricao)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":descricao",$descricao);
        $stmt->execute();
    }
}