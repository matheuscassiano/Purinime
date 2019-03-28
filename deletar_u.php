<?php 

$usuario = $_GET['usuario-d'];
$senha = $_GET['senha-d'];
$resp = $_GET['deletar'];

if ($resp == 'sim') {
	
	require_once 'usuario.php';
	$u = new Usuario;

		if (!empty($usuario) && !empty($senha) && !empty($resp)){
			include 'amiguinho.php';

			if ($u->msgErro == ""){ //tudo ok
				if($u->deletarU($usuario, $senha)){
					echo "Deletado com Sucesso";
					header('location: sair.php');
				}else{
					echo "Erro ao deletar";
				}
			}else{
				echo "Erro: ".$u->msgErro;
			}
		}else{
			echo "Preencha todos os campos!";
		}
}else{
	header('location: editor_p.php?id=$id');
}

?>