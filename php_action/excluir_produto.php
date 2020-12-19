<?php 

	session_start();

	require_once 'conexao.php';

	if (isset($_POST['excluir'])) {
				
		$ID = mysqli_escape_string($con,$_POST['ID']);

		$sql = "DELETE FROM produtos WHERE ID = '$ID'";

		if(mysqli_query($con, $sql)) {

			$_SESSION['mensagem'] = "Excluido com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao excluir.";

			header('Location: ../index.php');	
		}
	}
