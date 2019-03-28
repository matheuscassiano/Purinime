<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Purinime</title>
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">

  <link rel="icon" href="https://i.imgur.com/iPRnZfP.png" sizes="16x16">

  <link rel='stylesheet' href='CSS/artigo.css'>
  <link rel="stylesheet" href="CSS/cabeca.css"> 
  <link rel="stylesheet" href="CSS/ads.css"> 
  <link rel="stylesheet" href="CSS/footer.css"> 
   
  <link rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">  

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="bootstrap-4.3.1/js/bootstrap.min.js"></script>
</head>

<body background="https://i.imgur.com/uyQCmc4.jpg">
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2"></script>
  <?php 
  include 'dolinho.php';

  if (isset($id)) {
    $busca = mysqli_query($link,"SELECT * FROM usuario WHERE usuario_id='$id'");
    $dado = mysqli_fetch_array($busca);
    $seuUsuario = $dado['usuario'];
    $cargo = $dado['cargo'];

    include 'header_admin.php';
  }else{
    include 'header.php';
  }
  ?>
  <div id="fd_br" style="border-radius: 0;">
    <center>
    <div id="post">
        <?php
          $id_a = $_GET['id'];
          $busca_a = mysqli_query($link,"SELECT * FROM publicacao WHERE publicacao_id='$id_a'");
          $dado_a = mysqli_fetch_array($busca_a);

          $titulo = $dado_a['titulo'];
          $descricao = $dado_a['conteudo'];
          $imagem = $dado_a['imagem'];
          $autor = $dado_a['autor'];
          $data = $dado_a['data'];
          $views = $dado_a['views'];

          if ($views == Null) {
            $vws_0 = mysqli_query($link,"UPDATE publicacao SET views = 0 WHERE publicacao_id='$id_a'");
          }

          $views++;
          if (!empty($cargo) && $cargo == 'leitor') {
            $vws = mysqli_query($link,"UPDATE publicacao SET views = $views WHERE publicacao_id='$id_a'");
          }
          
          

          $descricao =  nl2br($descricao);

          echo "<h1>$titulo</h1>";
          echo "<img src='$imagem' id='capa' style='border-radius:20px;'>";
          echo "<p><span id='autor'><b>Autor:</b> $autor</span> <span id='data_a'>$data</span></p>";
          echo "<center>";
          echo "<p class='lead' class='text-capitalize'>$descricao</p>";
          echo "</center>";
        ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <hr>
        <?php 
          echo "<div class='fb-comments' data-href='http://purinime.ga/artigo.php?id=$id_a' data-width='700' data-numposts='5'></div>";
        ?>
    </div>
    <?php include 'ads.php'; ?>
</center>

  <?php include 'footer.php';?>

</body>
</html>
