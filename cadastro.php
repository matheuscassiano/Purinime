<?php 
	
	require_once 'usuario.php';
	$u = new Usuario;

	if(isset($_POST['usuario-c'])){
		$email = addslashes($_POST['email-c']); 
		$usuario = addslashes($_POST['usuario-c']); 
		$senha = addslashes($_POST['senha-c']); 
		$confirmarSenha = addslashes($_POST['confSenha-c']);
		$imagem = "https://image.flaticon.com/icons/png/512/44/44948.png";
		$cargo = "leitor";
		//verifica se está preenchifo

		if (!empty($email) && !empty($usuario) && !empty($senha) && !empty($confirmarSenha)){
			include 'amiguinho.php';

			if ($u->msgErro == ""){ //tudo ok
				if ($senha == $confirmarSenha){
					if($u->cadastrar($email, $usuario, $senha, $cargo, $imagem)){
						$success = "Cadastrado com Sucesso";
						header("location: index.php?success=$success&tipo=cadastro");
					}else{
						$danger = "Usuario já cadastrado!";
						header("location: index.php?danger=$danger&tipo=cadastro");
					}
				}else{
					$danger = "Senhas não correspondem!";
					header("location: index.php?danger=$danger&tipo=cadastro");
				}
			}else{
				$danger = "Erro: ".$u->msgErro;
				header("location: index.php?danger=$danger&tipo=cadastro");
			}
		}else{
			$danger = "Preencha todos os campos!";
			header("location: index.php?danger=$danger&tipo=cadastro");
		}
	}
?>