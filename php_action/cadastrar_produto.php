<?php 

	session_start();

	require_once 'conexao.php';

	if (isset($_POST['cadastrar'])) {
		
		$produto = mysqli_escape_string($con,$_POST['produto']);
		$descricao = mysqli_escape_string($con,$_POST['descricao']);
		$marca = mysqli_escape_string($con,$_POST['marca']);
		$preco = mysqli_escape_string($con,$_POST['preco']);

		$sql = "INSERT INTO produtos(produto,descricao,marca,preco)VALUES('$produto','$descricao','$marca','$preco')";

		if(mysqli_query($con, $sql)) {

			$_SESSION['mensagem'] = "Cadastrado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../index.php');	
		}
	}
