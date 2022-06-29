<?php 

namespace model;
require_once('Db.php');

use model\Db as Db;

class Categoria{

    function getCategoria(){
        $pdo = Db::connect();
        $stmt = "select * from categoria";
        $results = $pdo->query($stmt)->fetchAll();
        return $results;

    }

    function setCategoria(){
        $pdo = Db::connect();
        $descricao = $_GET['descricao'];
        $sql = "INSERT INTO categoria (descricao) values (:descricao)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":descricao",$descricao);
        $stmt->execute();
    }
}