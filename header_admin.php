<?php 
if (!empty($_GET)) {
  $success = $_GET['success'];
  $tipo = $_GET['tipo'];

  if (!empty($success) && !empty($tipo)) { 
    echo "<div class='alert alert-success alert-dismissible'>
            <strong>Parabéns!</strong> $success <a href='index.php' class='close' >&times;</a>
          </div>";
  }
}
?>

    <header>
      <div id="data">
        <?php 
          date_default_timezone_set('America/Sao_Paulo');
          $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');
          $date = date('d-m-Y');
          $diasemana_numero = date('w', strtotime($date));

          $hoje = $diasemana[$diasemana_numero];
          $date = str_replace('-', '/', $date);
          echo "<p><span class='fas fa-calendar-alt' id='cor-1'></span> Hoje é $hoje <span id='cor-1'>$date</span>"; 
        
          echo "<i class='fab fa-facebook'></i>";
          echo "<i class='fab fa-instagram'></i>";
          echo "<i class='fab fa-twitter'></i>";
          echo "<i class='fab fa-discord'></i>";
          echo "</p>";

          $cargo = $dado['cargo'];
          $seuUsuario = $dado['usuario'];
          $email = $dado['email'];
          $senha = $dado['senha'];
          $id_u = $dado['usuario_id'];
          $imagem = $dado['usuario_img'];
        ?>
      </div>
      <input type="checkbox" id="control-nav" style="display: none" />
      <label for="control-nav" class="control-nav"></label>
      <label for="control-nav" class="control-nav-close"></label>

      <nav id="nav">
        <a href="index.php">
          <img id="logo" src="https://i.imgur.com/C3Isynu.png">
        </a>

         <div class="menu-nav">
        <div id="divBusca" id="nnn">
          <img src="https://i.imgur.com/zqT0FIn.png"/>

          <form method="GET" action="index.php">
            <input type="text" id="txtBusca" placeholder="Pesquisar" name="busca">
            <button type="submit" class="btn"><i class="fa fa-search"></i></button>
          </form>


          
        </div>

              <ul id="menu">
                  <div id="nnn">

                    <li class="nav-item">
                      <a class="nav-link" href="index.php?categoria=Anime">
                        <span id="tx_shd">Animes</span>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="index.php?categoria=Manga">
                        <span id="tx_shd">Mangás</span>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="index.php?categoria=HQ">
                        <span id="tx_shd">HQ's</span>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="index.php?categoria=Filme">
                        <span id="tx_shd">Filmes</span>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="index.php?categoria=Quadrinhos">
                        <span id="tx_shd">Quadrinhos</span>
                      </a>
                    </li>

                    

                    </div>
                </ul>
                <ul id="usuario">
                  <div>
                      <li>
                        <?php include 'login.php';?>
                          <div class="dropdown dropright">
                            <a class='nav-link' id='tx_shd' class="dropdown-toggle" data-toggle="dropdown" href="#">
                              <?php 
                                echo "<img src='$imagem' style='width: 40px; margin-top: 5px; margin-right: 10px; padding: 1px; float: left; border-radius: 100%; background-color: white;'>";
                                echo $seuUsuario
                              ?>
                            </a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="index.php"><i class="fas fa-home"></i> Home</a>
                              <a class="dropdown-item" href="editor_u.php"><i class="fas fa-address-card"></i> Editar Conta</a>

                              <?php if($cargo == 'admin'){?>
                                <a class="dropdown-item" href="administar_u.php"><i class="fas fa-user"></i> Administrar Usuarios</a>
                                <a class="dropdown-item" href="publicar.php"><i class="fas fa-file-alt"></i> Publicar</a>
                                <a class="dropdown-item" href="editor_p.php"><i class="fas fa-edit"></i> Editar</a>
                                <?php } ?>
                              <a class="dropdown-item" href="sair.php"><i class="fas fa-hand-spock"></i> Sair</a>
                              
                            </div>
                          </div>
                       
                      </li>
                      <li>
                        <a class="nav-link" href="sair.php" id="tx_shd">Sair</a>
                      </li>
                    </div>
                </ul>
              </div> 
          </nav>        
    </header>
