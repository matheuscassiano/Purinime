<?php 
	
	require_once 'usuario.php';
	$u = new Usuario;

	if(isset($_POST['titulo-s'])){
		$titulo = addslashes($_POST['titulo-s']); 
		$imagem = addslashes($_POST['imagem-s']); 
		$descricao = addslashes($_POST['descricao-s']);
		//verifica se está preenchifo

		if (!empty($titulo) && !empty($imagem) && !empty($descricao)){
			include 'amiguinho.php';

			if ($u->msgErro == ""){ //tudo ok
				if($u->sPublicar($titulo, $imagem, $descricao)){
					echo "Publicado com Sucesso";
				}else{
					echo "Usuario já Publicado!";
				}
			}else{
				echo "Erro: ".$u->msgErro;
			}
		}else{
			echo "Preencha todos os campos!";
		}
	}
?>