<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Purinime</title>
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">

  <link rel="icon" href="https://i.imgur.com/iPRnZfP.png" sizes="16x16">
  <link rel="stylesheet" href="CSS/editar_p.css">
  <link rel="stylesheet" href="CSS/cabeca.css"> 
  <link rel="stylesheet" href="CSS/footer.css"> 

  <link rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">  

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="bootstrap-4.3.1/js/bootstrap.min.js"></script>
</head>

<body background="https://i.imgur.com/uyQCmc4.jpg">
<form action="deletar_p.php" method="GET">
  <div class="modal fade" id="alerta" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4>Tem certeza que deseja deletar esta publicação?</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <!-- CERTEZA -->
          <center>
            <img src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fmedia.makeameme.org%2Fcreated%2FTEM-CERTEZA-DISSO.jpg&f=1" style="width: 100%;">
            <label style="float: left;">ID:</label>
            <?php
            if (!empty($_GET)) {
            $id = $_GET['id'];
            echo "<input type='number' name='id_d' value='$id' class='form-control'>";
            }
            ?>
            
            <div class="form-group">
              <label style="float: left;">Deseja deletar esta publicação?</label>
              <select class="form-control" name="deletar">
                <option value="sim">Sim</option>
                <option value="nao">Não</option>
              </select>
            </div>
          </center>
          <!-- CERTEZA -->
        </div>
        <div class="modal-footer">
          
            <button type="submit" class="btn btn-danger" style="float: left;">Sim</button>
          
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</form>
  <?php 
  include 'dolinho.php';
  include 'areaPrivada.php';
  if (isset($id)) {
    $id_p = $_GET['id'];
    $busca = mysqli_query($link,"SELECT * FROM usuario WHERE usuario_id='$id'");
    $dado = mysqli_fetch_array($busca);
    $seuUsuario = $dado['usuario'];
    include 'header_admin.php';
  }else{
    include 'header.php';
  }
  ?>

  <div id="fd_br">
    <center>
    <div id="post">
        <?php
          $busca_a = mysqli_query($link,"SELECT * FROM publicacao WHERE publicacao_id='$id_p'");
          $dado_a = mysqli_fetch_array($busca_a);

          $titulo = $dado_a['titulo'];
          $descricao = $dado_a['conteudo'];
          $imagem = $dado_a['imagem'];
          $descricao =  nl2br($descricao);
        ?>
    </div>
  </center>   
  <div id="menu_editor">
      <ul class="list-group">
        <a href="editor_u.php">
          <li class="list-group-item">Editar Conta</li>
        </a>
        <a href="publicar.php">
          <li class="list-group-item">Publicar Postagem</li>
        </a>
        <li class="list-group-item active">Editar Postagem</li>
      </ul>
    </div>
  <div id="postagem">
	<form action="editar_p.php" method="POST">

    <div class="form-group">
      <lable for="id-p">Id:</label>
      <?php
        echo "<input name='id-p' type='number' class='form-control' id='id-p' value='$id_p'>";
      ?>
    </div>
    <br>
    <div class="form-group">
      <lable for="titulo-p">Titulo:</label>
      
      <?php
      echo "<input name='titulo-p' type='text' class='form-control' id='titulo-p' value='$titulo'>";
      ?>
    </div>
    <br>
  	<lable>Imagem 1050x600:</label>
  	<?php
      echo "<input name='imagem-p' type='text' class='form-control' value='$imagem'>";
  	?>
    <br>
    <div class="form-group">
      <label for="sel1">Selecione categoria:</label>
      <select class="form-control" id="sel1" name="categoria-p">
        <option value="Anime">Anime</option>
        <option value="Manga">Mangá</option>
        <option value="HQ">HQ</option>
        <option value="Filme">Filme</option>
        <option value="Quadrinhos">Quadrinhos</option>
      </select>
    </div>

    <br><br><br>
    <div class="form-group">
     <lable for="conteudo">Texto da postagem:</lable>
     <br>
     <?php
       $descricao = str_replace('<br />', '',$descricao);
  	   echo "<textarea name='conteudo-p' type='text' class='form-control' id='conteudo' wrap='hard' style='height: 300px;'>$descricao</textarea>";
  	 ?>
    </div>

    <div id="B">
      <button type="submit" class="btn btn-success" >Publicar</button>,
      <a class="btn btn-danger" data-toggle="modal" data-target="#alerta">Deletar</a>
    </div>
    <span id="space"></span>
	</form>
  </div>
</div>
  <?php include 'footer.php';?>
</body>
</html>
