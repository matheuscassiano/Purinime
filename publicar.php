<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Purinime</title>
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">

  <link rel="icon" href="https://i.imgur.com/iPRnZfP.png" sizes="16x16">
  <link rel="stylesheet" href="CSS/post.css">
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

  <div class="modal fade" id="s-publicar" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <!-- LODIN E CADASTRO-->
          <form action="slide.php" method="POST">
            <div class="form-group">
              <label for="titulo-s">Titulo:</label>
              <input name="titulo-s" type="text" class="form-control" id="titulo-s">
            </div>
            <div class="form-group">
              <label for="imagem-s">Imagem do Slide:</label>
              <br>
              <input name="imagem-s" type="text" class="form-control" id="imagem-s">
            </div>
            <div class="form-group">
              <label for="descricao-s">Breve Descrição:</label>
              <input name="descricao-s" type="text" class="form-control" id="descricao-s">
            </div>
            <button type="submit" class="btn btn-primary">Publicar Slide</button>
          </form>
          <!-- LODIN E CADASTRO-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <?php include 'areaPrivada.php';
        include 'header_admin.php';?>
  <div id="fd_br">
    
    <div id="menu_editor">
      <ul class="list-group">
        
        <a href="http://localhost/purinime.ga/editor_u.php">
          <li class="list-group-item">Editar Conta</li>
        </a>
        
        <li class="list-group-item active">Publicar Postagem</li>
        
        <a href="editor_p.php">
          <li class="list-group-item">Editar Postagem</li>
        </a>
      </ul>
    </div>

    <div id="postagem">
  	<form action="publicacao.php" method="POST" style="margin-left: 15%;">

     	<div class="form-group">
        <lable for="titulo-p">Titulo:</label>
     	  <input name="titulo-p" type="text" class="form-control" id="titulo-p">
    	</div>

      <br>
    	<lable>Imagem 1050x600:</label>
    	<input name="imagem-p" type="text" class="form-control">
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
    	 <textarea name="conteudo-p" type="text" class="form-control" id="conteudo" wrap="hard"></textarea>	
    	</div>

      <div id="B">
        <button type="submit" class="btn btn-success">Publicar</button>
        <a class="btn btn-success" data-toggle="modal" data-target="#s-publicar">Publicar Slide</a>
      </div>
  	</form>
    <br><br><br>
    </div>
  </div>
  <?php include 'footer.php';?>
</body>
</html>
