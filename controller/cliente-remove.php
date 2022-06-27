<?php

require("../model/Cliente.class.php");
use model\Cliente as Cliente;

$cliente = new Cliente();
$cliente->remove();

header('Location: ../index.php?value=1');