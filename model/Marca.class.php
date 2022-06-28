<?php 

namespace model;

require("model/Db.php");

use model\Db as Db;

class Marca{

    function getMarca(){
        $pdo = Db::connect();
        $stmt = "select * from marca";
        $results = $pdo->query($stmt)->fetchAll();
        return $results;

    }
}