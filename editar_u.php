<?php 
	
	require_once 'usuario.php';
	$u = new Usuario;

	if(isset($_POST['usuario-u'])){
		$email = addslashes($_POST['email-u']); 
		$usuario = addslashes($_POST['usuario-u']); 
		$senha = addslashes($_POST['senha-u']); 
		$confirmarSenha = addslashes($_POST['confSenha-u']);
		$cargo = addslashes($_POST['cargo-u']);
		$id = $_GET['id'];
		$imagem = addslashes($_POST['imagem-u']);
		//verifica se está preenchifo

		if (!empty($email) && !empty($usuario) && !empty($senha) && !empty($confirmarSenha)){
			include 'amiguinho.php';

			if ($u->msgErro == ""){ //tudo ok
				if ($senha == $confirmarSenha){
					if($u->atualizarU($usuario, $email, $senha, $cargo, $id, $imagem)){
						$success = "Atualizado com Sucesso";
						header("location: index.php?success=$success&tipo=editar_u");
					}else{
						$danger = "Erro ao atualizar";
						header("location: editor_u.php?danger=$danger&tipo=editar_u");
					}
				}else{
					$danger = "Senhas não correspondem!";
					header("location: editor_u.php?danger=$danger&tipo=editar_u");
				}
			}else{
				$danger = "Erro: ".$u->msgErro;
				header("location: editor_u.php?danger=$danger&tipo=editar_u");
			}
		}else{
			$danger = "Preencha todos os campos!";
			header("location: editor_u.php?danger=$danger&tipo=editar_u");
		}
	}
?>