<?php 

$id = $_POST['id-p'];
$titulo = $_POST['titulo-p'];
$imagem = $_POST['imagem-p'];
$categoria = $_POST['categoria-p'];
$conteudo = $_POST['conteudo-p'];

require_once 'usuario.php';
	$u = new Usuario;

	if(isset($_POST['id-p'])){
		$id = $_POST['id-p'];
		$titulo = $_POST['titulo-p'];
		$imagem = $_POST['imagem-p'];
		$categoria = $_POST['categoria-p'];
		$conteudo = $_POST['conteudo-p'];
		//verifica se está preenchifo

		if (!empty($titulo) && !empty($imagem) && !empty($conteudo) && !empty($categoria) && !empty($id)){
			include 'amiguinho.php';

			if ($u->msgErro == ""){ //tudo ok
				if($u->atualizar($titulo, $imagem, $conteudo, $categoria, $id)){
					echo "Atualizado com Sucesso";
				}else{
					echo "Erro ao atualizar";
				}
			}else{
				echo "Erro: ".$u->msgErro;
			}
		}else{
			echo "Preencha todos os campos!";
		}
	}
?>