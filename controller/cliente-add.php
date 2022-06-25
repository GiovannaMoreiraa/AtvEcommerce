<?php 
require_once("../model/Cliente.class.php");

try{
    $cliente = new Cliente();
    $cliente->add();
}catch(Exception $e){
    die("Erro : " . $e->getMessage);
}

header("Location: ../index.php");