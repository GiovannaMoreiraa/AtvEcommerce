<?php 

namespace model;
require_once('model/Db.php');

use model\Db as Db;

class Categoria{

    function getCategoria(){
        $pdo = Db::connect();
        $stmt = "select * from categoria";
        $results = $pdo->query($stmt)->fetchAll();
        return $results;

    }
}