<?php 

	session_start();

	require_once 'conexao.php';

	if (isset($_POST['alterar'])) {
		
		$produto = mysqli_escape_string($con,$_POST['produto']);
		$descricao = mysqli_escape_string($con,$_POST['descricao']);
		$marca = mysqli_escape_string($con,$_POST['marca']);
		$preco = mysqli_escape_string($con,$_POST['preco']);
		$Idprod = mysqli_escape_string($con,$_POST['idproduto']);

		$sql = "UPDATE produtos SET produto = '$produto', descricao = '$descricao', marca = '$marca', preco = '$preco' WHERE ID = '$Idprod'";

		if(mysqli_query($con, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../index.php');	
		}
	}
