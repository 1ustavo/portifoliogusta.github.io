<?php

include 'conexao.php';

	// variaveis que vieram do forrmulario de login , recebiadas pela SUPERGLOBAL GET
	$usuario = $_GET['username'];

	$senha = $_GET['password'];


	// consulta sql, obs: só muda ass palavras que esstão entre aspas

	$consulta = $con->query("SELECT * FROM usuarios WHERE id = 1");

	// organiza os valores recebidos da consulata em um array associativo

	$exibe = $consulta->fetch(PDO::FETCH_ASSOC);

	$exibe['login'];
	$exibe['senha'];
	$exibe['adm'];

	// atribuo os valores a outras varriaveis, por vicio

	$usuarioDB = $exibe['login'];
	$senhaDB = $exibe['senha'];

	// aqui uma condicional, se/senao, verificando os valores vindos do form conferem com os do banco e redireciona

	if ($usuario == $usuarioDB && $senha == $senhaDB) {
		header('location:adm.php');
		echo $_SESSION['adm'];
	}else{
		echo 'Usuario ou senha incorretos';
	}
	
 ?>