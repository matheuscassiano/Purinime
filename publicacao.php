<?php 
	
	require_once 'usuario.php';
	$u = new Usuario;

	include 'dolinho.php';

	$busca = mysqli_query($link,"SELECT * FROM usuario WHERE usuario_id='$id'");
    $dado = mysqli_fetch_array($busca);

    $seuUsuario = $dado['usuario'];

	if(isset($_POST['titulo-p'])){
		$titulo = addslashes($_POST['titulo-p']); 
		$imagem = addslashes($_POST['imagem-p']); 
		$autor = $seuUsuario;
		$conteudo = addslashes($_POST['conteudo-p']);
		$categoria = $_POST['categoria-p'];
		$data = date('d-m-Y');
		//verifica se está preenchifo

		if (!empty($titulo) && !empty($imagem) && !empty($conteudo) && !empty($categoria) && !empty($autor)){
			include 'amiguinho.php';

			if ($u->msgErro == ""){ //tudo ok
				if($u->publicar($titulo, $imagem, $autor, $conteudo, $categoria, $data)){
					echo "Publicado com Sucesso";
					header('location: index.php');
				}else{
					echo "Já Publicado!";
				}
			}else{
				echo "Erro: ".$u->msgErro;
			}
		}else{
			echo "Preencha todos os campos!";
		}
	}
?>