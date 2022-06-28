<?php
  require_once('../model/Produtos.class.php');
  use model\Produtos as Produtos;

  $produtos = new Produtos();
  $produtos->cadastro();
?>