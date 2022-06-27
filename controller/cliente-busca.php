<?php 

require("model/Cliente.class.php");
use model\Cliente as Cliente;

// die();
$cliente = new Cliente();
$results = $cliente->buscar();




