<?php 

namespace controller;

use model\Categoria as Categoria;

require_once("../model/Categoria.class.php");

$categoria = new Categoria;
$categoria->setCategoria();
header("Location: ../produto.php");


