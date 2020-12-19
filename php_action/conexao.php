<?php 

	$localhost = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'produtos';

	$con = mysqli_connect($localhost,$user,$pass,$db);

	mysqli_set_charset($con,"utf-8");

	if (mysqli_connect_error()) {
		echo "Erro ao conectar com o banco de dados" . mysql_connect_error();
	}
