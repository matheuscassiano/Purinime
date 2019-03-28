<?php 
	include 'dolinho.php';

	if(!isset($id)){
		header("location: index.php");
		exit;
	}else{
		mysqli_connect($host, $user, $pass, $database);

		$busca = mysqli_query($link,"SELECT * FROM usuario WHERE usuario_id='$id'");
		$dado = mysqli_fetch_array($busca);
		$seuUsuario = $dado['usuario'];
		$cargo = $dado['cargo'];
	}if ($cargo != 'admin') {
		header("location: index.php");
		exit;
	}
	
?>