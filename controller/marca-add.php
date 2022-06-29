<?php 

namespace controller;

use model\Marca as Marca;

require_once("../model/Marca.class.php");

$marca = new Marca;
$marca->setMarca();
header("Location: ../produto.php");
