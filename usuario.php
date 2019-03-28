<?php 
	Class Usuario{

		private $pdo;
		public $msgErro = "";

		public function conectar($nome, $host, $usuario, $senha){
			global $pdo;
			try{
				$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
			} catch(PDOException $e){
				$msgErro = $e->getMessage();
			}
		}

		public function cadastrar($email, $usuario, $senha, $cargo, $imagem){
			global $pdo;
			//Verificar se já existe cadastro
			$sql = $pdo->prepare("SELECT usuario_id FROM usuario WHERE usuario = :u");
			$sql->bindValue(":u", $usuario);
			$sql->execute();

			if ($sql->rowCount() > 0){
				return False; //já esta cadastrado
			}else{
				//cao não, cadastrar
				$sql = $pdo->prepare("INSERT INTO usuario (email, usuario, senha, cargo, usuario_img) VALUES (:e, :u, :s, :c, :i)");
				$sql->bindValue(":e", $email);
				$sql->bindValue(":u", $usuario);
				$sql->bindValue(":s", $senha);
				$sql->bindValue(":c", $cargo);
				$sql->bindValue(":i", $imagem);
				$sql->execute();
				return True;
			}
		}

		public function logar($usuario, $senha){
			global $pdo;
			$sql = $pdo->prepare("SELECT usuario_id FROM usuario WHERE usuario = :u AND senha = :s");
			$sql->bindValue(":u", $usuario);
			$sql->bindValue(":s", $senha);
			$sql->execute();
			if ($sql->rowCount() > 0){
				$dado = $sql->fetch();
				session_start();
				$_SESSION['usuario_id'] = $dado['usuario_id'];
				return True;
			}else{
				return False;
			}
		}

		public function publicar($titulo, $imagem, $autor, $conteudo, $categoria, $data){
			global $pdo;
			//Verificar se já existe Publicação
			$sql = $pdo->prepare("SELECT publicacao_id FROM publicacao WHERE titulo = :t");
			$sql->bindValue(":t", $titulo);
			$sql->execute();

			if ($sql->rowCount() > 0){
				return False; //já esta Publicado
			}else{
				//cao não, cadastrar
				$sql = $pdo->prepare("INSERT INTO publicacao (titulo, imagem, autor, conteudo, categoria, data) VALUES (:t, :i, :a, :c, :g, :d)");
				$sql->bindValue(":t", $titulo);
				$sql->bindValue(":i", $imagem);
				$sql->bindValue(":a", $autor);
				$sql->bindValue(":c", $conteudo);
				$sql->bindValue(":g", $categoria);
				$sql->bindValue(":d", $data);
				$sql->execute();
				return True;
			}
		}

		public function sPublicar($titulo, $imagem, $descricao){
			global $pdo;
			//Verificar se já existe Slide
			$sql = $pdo->prepare("SELECT slide_id FROM slide WHERE titulo = :t");
			$sql->bindValue(":t", $titulo);
			$sql->execute();

			if ($sql->rowCount() > 0){
				return False; //já esta Publicado
			}else{
				//cao não, cadastrar
				$sql = $pdo->prepare("INSERT INTO slide (titulo, imagem, descricao) VALUES (:t, :i, :d)");
				$sql->bindValue(":t", $titulo);
				$sql->bindValue(":i", $imagem);
				$sql->bindValue(":d", $descricao);
				$sql->execute();
				return True;
			}
		}

		public function atualizar($titulo, $imagem, $conteudo, $categoria, $id){
			global $pdo;

			$sql = $pdo->prepare("UPDATE publicacao SET titulo=:t, imagem=:i, conteudo=:d, categoria=:c WHERE publicacao_id=:e");
			$sql->bindValue(":t", $titulo);
			$sql->bindValue(":i", $imagem);
			$sql->bindValue(":d", $conteudo);
			$sql->bindValue(":c", $categoria);
			$sql->bindValue(":e", $id);
			$sql->execute();

			return True;
		}

		public function atualizarU($usuario, $email, $senha, $cargo, $id, $imagem){
			global $pdo;

			$sql = $pdo->prepare("UPDATE usuario SET usuario=:u, email=:e, senha=:s, cargo=:c, usuario_img=:g WHERE usuario_id=:i");
			$sql->bindValue(":u", $usuario);
			$sql->bindValue(":e", $email);
			$sql->bindValue(":s", $senha);
			$sql->bindValue(":c", $cargo);
			$sql->bindValue(":g", $imagem);
			$sql->bindValue(":i", $id);
			$sql->execute();

			return True;
		}

		public function deletar($id){
			global $pdo;

			$sql = $pdo->prepare("DELETE FROM publicacao WHERE publicacao_id = :i");
			$sql->bindValue(":i", $id);
			$sql->execute();

			return True;
		}

		public function deletarU($usuario, $senha){
			global $pdo;

			$sql = $pdo->prepare("DELETE FROM usuario WHERE usuario = :u AND senha = :s");
			$sql->bindValue(":u", $usuario);
			$sql->bindValue(":s", $senha);
			$sql->execute();

			return True;
		}


	}
?>