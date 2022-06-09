<?php

	include 'conecta_mysql.inc';

	$nome        = $_POST['nome'];
	$email       = $_POST['email'];
	$login      = $_POST['login'];
	$senha      = $_POST['senha'];

	$sql = "INSERT INTO CADASTRO VALUES";
	$sql .="('$nome','$email','$login','$senha')";

	if($conexao->query($sql) == TRUE){
		echo "<h1> Cliente inserido com sucesso !!!</h1>";
	}else{
		echo "<h2> Erro ao inserir o Cliente!!!</h2>";

	}

	$conexao->close();




?>
