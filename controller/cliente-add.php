<?php 
require_once("../model/Cliente.class.php");
use model\Cliente as Cliente;

$cliente = new Cliente();
$cliente->add();


header("Location: ../index.php");