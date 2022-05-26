<?php
  class Clientes {

    function inserirCliente(){

      require_once('../controller/conexao.php');
      session_start();

      $cliente = $mysqli->query("INSERT INTO CLIENTE (IDCLI, NOME, LOGIN, SENHA,
                                                     DTNASC, ENDERECO, SEXO, CPF, RG, 
                                                     TELEFONE, CELULAR) 
                                VALUES()");

     


  }
  }
?>
