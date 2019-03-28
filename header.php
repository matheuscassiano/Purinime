<?php 
if (!empty($_GET)) {
  $danger = $_GET['danger'];
  $success = $_GET['success'];
  $tipo = $_GET['tipo'];
}
?>

<?php if (!empty($danger) && $tipo == 'login') { ?>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#login').modal('show');
    });
  </script>
<?php } ?>
<!--                                            -->
<?php 
  if (!empty($success) && $tipo == 'cadastro') { 
    echo "<div class='alert alert-success alert-dismissible'>
            <strong>Parabéns!</strong> $success <a href='index.php' class='close' >&times;</a>
          </div>";
  } 
?>
<?php if (!empty($danger) && $tipo == 'cadastro') { ?>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#cadastro').modal('show');
    });
  </script>
<?php } ?>

  <!-- Modal PHP -->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <!-- LODIN E CADASTRO-->
          
          <?php if (!empty($danger) && $tipo == 'login') {
            echo "<div class='alert alert-danger'>
                    <strong>Aviso!</strong> $danger
                  </div>";
          } ?>

          <form action="login.php" method="POST">
           
            <div class="form-group">
              <label for="usuario-l">Usuario:</label>
              <input name="usuario-l" type="text" class="form-control" id="usuario-l">
            </div>
           
            <div class="form-group">
              <label for="senha">Password:</label>
              <input name="senha-l" type="password" class="form-control" id="senha">
            </div>
           
            <button type="submit" class="btn btn-primary">Link Start</button>
            <a class="btn btn-danger" data-toggle="modal" data-target="#cadastro" style="color: white" data-dismiss="modal">Cadastrar</a>
          </form>
          <!-- LODIN E CADASTRO-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="cadastro" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <!-- LODIN E CADASTRO-->
          <?php if (!empty($danger) && $tipo == 'cadastro') {
            echo "<div class='alert alert-danger'>
                    <strong>Aviso!</strong> $danger
                  </div>";
          } ?>
          <form action="cadastro.php" method="POST">
            
            <div class="form-group">
              <label for="usuario-c">Usuario:</label>
              <input name="usuario-c" type="text" class="form-control" id="usuario-c">
            </div>

            <div class="form-group">
              <label for="email-c">Email:</label>
              <input name="email-c" type="email" class="form-control" id="email-c">
            </div>
            
            <div class="form-group">
              <label for="senha-c">Senha:</label>
              <input name="senha-c" type="password" class="form-control" id="senha-c">
            </div>

            <div class="form-group">
              <label for="confSenha-c">Confirmar Senha:</label>
              <input name="confSenha-c" type="password" class="form-control" id="confSenha-c">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a class="btn btn-success" data-toggle="modal" data-target="#login" style="color: white" data-dismiss="modal">Possui Cadastro</a>
          </form>
          <!-- LODIN E CADASTRO-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

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

                <a href="">
                    
                  </a>

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
                        <a  data-toggle="modal" class="nav-link" href="#" data-target="#login" id="tx_shd">Login</a>
                      </li>
                      <li>
                        <span data-toggle="modal" class="nav-link" data-target="#login">|</span>
                      </li>
                      <li>
                        <a  data-toggle="modal" class="nav-link" href="#" data-target="#cadastro" id="tx_shd">Cadastro</a>
                      </li>
                    </div>
                </ul>
              </div> 
          </nav>        
    </header>