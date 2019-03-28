<?php 
	require_once 'usuario.php';
	$u = new Usuario;

	if(isset($_POST['usuario-l'])){
		$usuario 	= addslashes($_POST['usuario-l']); 
		$senha 		= addslashes($_POST['senha-l']);
		//verifica se está preenchifo

		if (!empty($usuario) && !empty($senha)){
			include 'amiguinho.php';
				if($u->msgErro == ""){
					if($u->logar($usuario, $senha)){
						$success = "Logado com sucesso!";
						header("location: index.php?success=$success&tipo=login");
					}else{
						$danger = "Usuario e/ou senha estão incorretos";
						header("location: index.php?danger=$danger&tipo=login");
					}
				}else{
					$danger = "Erro: ".$u->msgErro;
					header("location: index.php?danger=$danger&tipo=login");
				}
		}else{
			$danger = "Preecha todos os campos";
			header("location: index.php?danger=$danger&tipo=login");
		}
	}

?>