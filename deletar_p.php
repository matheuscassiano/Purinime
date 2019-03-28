<?php 

include 'areaPrivada.php';

$id = $_GET['id_d'];
$resp = $_GET['deletar'];

if ($resp == 'sim') {
	
	require_once 'usuario.php';
	$u = new Usuario;

		if (!empty($id)){
			include 'amiguinho.php';

			if ($u->msgErro == ""){ //tudo ok
				if($u->deletar($id)){
					echo "Deletado com Sucesso";
					header('location: index.php');
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