<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Purinime</title>
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">

  <link rel="icon" href="https://i.imgur.com/iPRnZfP.png" sizes="16x16">

  <link rel="stylesheet" href="CSS/index.css">
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
<?php
  if(!empty($_GET)){
    $categoria = $_GET['categoria'];
    $pesq = $_GET['busca'];

    if ($categoria == 'Anime') {
      $imagem = 'http://images6.fanpop.com/image/photos/35500000/-Kawaii-Clannad-kawaii-anime-35596999-1920-1200.jpg';

    }elseif($categoria == 'HQ'){
      $imagem = 'https://2.bp.blogspot.com/-AQ9sqxSxYA8/Vz5mOy3h8wI/AAAAAAAAPB4/bBzYvXhehOcR-GSM6reM4RSHms8OZ-sEQCKgB/s1600/future-quest-1-p2.jpg';

    }elseif($categoria == 'Quadrinhos'){
      $imagem = 'http://judao.com.br/wp-content/uploads/2015/10/mauricio80.jpg';

    }elseif ($categoria == 'Filme') {
      $imagem = "https://cabanadoleitor.com.br/wp-content/uploads/2018/08/your-name1.png";
    }else{
      $imagem = 'https://i.imgur.com/uyQCmc4.jpg';
    }
  }else{
      $imagem = 'https://i.imgur.com/uyQCmc4.jpg';
    }
  echo "<body background=$imagem>";
  
  include 'dolinho.php';

  if (isset($id)) {
    $busca = mysqli_query($link,"SELECT * FROM usuario WHERE usuario_id='$id'");
    $dado = mysqli_fetch_array($busca);
    
    include 'header_admin.php';
  }else{
    include 'header.php';
#    $cargo = 'admin';
  }
  ?>

  <center>
  <div id="fd_br">
  <div id="slide">
    <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <?php
      $busca_s = mysqli_query($link,"SELECT * FROM slide");
      $dado_s = mysqli_fetch_array($busca_s);
      $linhas = mysqli_num_rows($busca_s);

    for ($x=1; $x < $linhas; $x++) { 

      echo "<li data-target='#demo' data-slide-to='$x'></li>";
    }
    ?>
  </ul>

  <!-- The slideshow -->
  <div id="slimg" class="carousel-inner">
      <?php

        $s_imagem = $dado_s['imagem'];
        $s_titulo = $dado_s['titulo'];
        $s_descricao = $dado_s['descricao'];

        echo "<div class='carousel-item active'>";
        echo "<img src='$s_imagem' alt='$s_titulo'>";

        echo "<div class='carousel-caption'>";
        
        echo "<h3>$s_titulo</h3>";
        echo "<p class='Lead'>$s_descricao</p>";

        echo "</div>";
        echo "</div>";

        $slide_db = mysqli_query($link,"SELECT * FROM slide WHERE slide_id > 1");
        

        foreach ($slide_db as $s_db) {

          $imagem_s = $s_db['imagem'];
          $titulo_s = $s_db['titulo'];
          $descricao_s = $s_db['descricao'];

          echo "<div class='carousel-item'>";
          echo "<img src='$imagem_s' alt='$titulo_s'>";

          echo "<div class='carousel-caption'>";
          
          echo "<h3>$titulo_s</h3>";
          echo "<p class='Lead'>$descricao_s</p>";
          
          echo "</div>";
          echo "</div>";
        }
      ?>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
  </div>



  <section>
      <?php
        $sql = mysqli_query($link,"SELECT * FROM publicacao ORDER BY publicacao_id DESC");

        if(!empty($categoria)){
          $sql_A = mysqli_query($link,"SELECT * FROM publicacao WHERE categoria='$categoria' ORDER BY publicacao_id DESC");

          foreach ( $sql_A as $pubId ) {
            $id_p = $pubId['publicacao_id'];
            $post_A = mysqli_query($link,"SELECT * FROM publicacao WHERE categoria='$categoria' AND publicacao_id='$id_p'");
            $dado_A = mysqli_fetch_array($post_A);

            $imagem = $dado_A['imagem'];
            $titulo = $dado_A['titulo'];
            $descricao = $dado_A['conteudo'];
            $categoria = $dado_A['categoria'];
            $autor = $dado_A['autor'];

            $descricao = substr($descricao, 0, 54)."...";
            $titulo = substr($titulo, 0, 23);

            echo "<div id='post'>";
              echo "<a href='index.php?categoria=$categoria' style='color: inherit;'><div id='categoria'>$categoria</div></a>";
                  echo "<a href='artigo.php?id=$id_p'>";
                    echo "<img src='$imagem'>";
                  echo "</a>";

                  echo "<div id='card'>";
                    echo "<div id='c-txt'>";

                      if (isset($id)){
                        if ($cargo == 'admin'){
                          $titulo = $titulo." <a class='far fa-edit' href='editor_p.php?id=$id_p'></a>";
                        echo "<h3>$titulo</h3>";
                        }elseif ($cargo == 'leitor') {
                          echo "<h3>$titulo</h3>";
                        }  
                      }else{
                        echo "<h3>$titulo</h3>";
                      }
                      echo "<p class='Lead'>$descricao <br> <b>Autor: </b>$autor</p>";
                    echo "</div>";
                  echo "</div>";
                echo "</div>";
            }
        }else{
          if (!empty($pesq)){
              $pesq_res = mysqli_query($link,"SELECT * FROM publicacao WHERE titulo LIKE '%".$pesq."%' ORDER BY titulo");
              foreach ($pesq_res as $resultado) {
                
                $titulo = $resultado['titulo'];
                $imagem = $resultado['imagem'];
                $descricao = $resultado['conteudo'];
                $id_pes = $resultado['publicacao_id'];
                $categoria = $resultado['categoria'];
                $autor = $resultado['autor'];

                $descricao = substr($descricao, 0, 54)."...";
                $titulo = substr($titulo, 0, 23);

                echo "<div id='post'>";
                  echo "<a href='index.php?categoria=$categoria' style='color: inherit;'><div id='categoria'>$categoria</div></a>";
                  echo "<a href='artigo.php?id=$id_pes'>";
                    echo "<img src='$imagem'>";
                  echo "</a>";

                  echo "<div id='card'>";
                    echo "<div id='c-txt'>";

                      if (isset($id)){
                        if ($cargo == 'admin'){
                          $titulo = $titulo." <a class='far fa-edit' href='editor_p.php?id=$id_pes'></a>";
                        echo "<h3>$titulo</h3>";
                        }elseif ($cargo == 'leitor') {
                          echo "<h3>$titulo</h3>";
                        }  
                      }else{
                        echo "<h3>$titulo</h3>";
                      }
                      echo "<p class='Lead'>$descricao <br> <b>Autor: </b>$autor</p>";
                    echo "</div>";
                  echo "</div>";
                echo "</div>";
                }
          }else{
          foreach ( $sql as $pubId ) {
            $id_p = $pubId['publicacao_id'];
            $post_A = mysqli_query($link,"SELECT * FROM publicacao WHERE publicacao_id='$id_p'");
            $dado_A = mysqli_fetch_array($post_A);

            $imagem = $dado_A['imagem'];
            $titulo = $dado_A['titulo'];
            $descricao = $dado_A['conteudo'];
            $categoria = $dado_A['categoria'];
            $autor = $dado_A['autor'];

            $descricao = substr($descricao, 0, 54)."...";
            $titulo = substr($titulo, 0, 23);

            echo "<div id='post'>";
              echo "<a href='index.php?categoria=$categoria' style='color: inherit;'><div id='categoria'>$categoria</div></a>";
              echo "<a href='artigo.php?id=$id_p'>";
                echo "<img src='$imagem'>";
              echo "</a>";
            
              echo "<div id='card'>";
                echo "<div id='c-txt'>";

                  if (isset($id)){
                    if ($cargo == 'admin'){
                      $titulo = $titulo." <a class='far fa-edit' href='editor_p.php?id=$id_p'></a>";
                    echo "<h3>$titulo</h3>";
                    }elseif ($cargo == 'leitor') {
                      echo "<h3>$titulo</h3>";
                    }else{                
                     echo "<h3>$titulo</h3>";
                   }
                  }else{
                    echo "<h3>$titulo</h3>";
                  }
                  echo "<p class='Lead'>$descricao <br> <b>Autor: </b>$autor</p>";
                echo "</div>";
              echo "</div>";
            echo "</div>";
            }
          }
        }
      ?>
</section>   

  <?php include 'ads.php'; ?>
  </center>
  <?php include 'footer.php';?>
</body>
</html>