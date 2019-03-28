<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Purinime</title>
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">

  <link rel="icon" href="https://i.imgur.com/iPRnZfP.png" sizes="16x16">
  <link rel="stylesheet" href="CSS/cabeca.css"> 
  <link rel="stylesheet" href="CSS/footer.css"> 
  <link rel="stylesheet" href="CSS/editor_u.css"> 

  <link rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">  

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="bootstrap-4.3.1/js/bootstrap.min.js"></script>
</head>

<body background="https://i.imgur.com/uyQCmc4.jpg">

  <?php 
  if (!empty($_GET)) {
    $danger = $_GET['danger'];
    $success = $_GET['success'];
    $tipo = $_GET['tipo'];
  }
  ?>
  <?php 
    if (!empty($success) && $tipo == 'editar_u') { 
      echo "<div class='alert alert-success alert-dismissible'>
              <strong>Parabéns!</strong> $success <a href='editor_u.php' class='close' >&times;</a>
            </div>";
    } 

    if (!empty($danger) && $tipo == 'editar_u') { 
      echo "<div class='alert alert-danger alert-dismissible'>
              <strong>Aviso!</strong> $danger <a href='editor_u.php' class='close' >&times;</a>
            </div>";
    } 
  ?>

 <?php 
  include 'dolinho.php';
  if (isset($id)) {
    if (!empty($_GET)) {
      $id_u = $_GET['id'];
    }
    $busca = mysqli_query($link,"SELECT * FROM usuario WHERE usuario_id='$id'");
    $dado = mysqli_fetch_array($busca);
    $seuUsuario = $dado['usuario'];
    include 'header_admin.php';
  }else{
    include 'header.php';
  }
  ?>
  <div id="fd_br">
    <div id="menu_editor">
      <ul class="list-group">
        
        <li class="list-group-item active">Editar Conta</li>
        
        <a href="publicar.php">
          <li class="list-group-item">Publicar Postagem</li>
        </a>

        <a href="editor_p.php">
          <li class="list-group-item">Editar Postagem</li>
        </a>

      </ul>
    </div>
    <center>
      <?php if (isset($id)) { ?>
      <div id="formulario">
        <br>
        <h4>Só edite as partes que você quiser mudar</h4>
        <br>
        <?php echo "<form action='editar_u.php?id=$id_u' method='POST'>";

           echo "<div class='form-group'>
              <label for='usuario-u'>Usuario:</label>
              <input name='usuario-u' type='text' class='form-control' id='usuario-u' value='$seuUsuario'>
            </div>

            <div class='form-group'>
              <label for='imagem-u'>Imagem de Perfil 512x512 px:</label>
              <input name='imagem-u' type='text' class='form-control' id='imagem-u' value='$imagem'>
            </div>

            <div class='form-group'>
              <label for='email-u'>Email:</label>
              <input name='email-u' type='email' class='form-control' id='email-u' value='$email'>
            </div>
            
            <div class='form-group'>
              <label for='senha-u'>Nova Senha: </label>
              <input name='senha-u' type='password' class='form-control' id='senha-u' value='$senha'>
            </div>

            <div class='form-group'>
              <label for='confSenha-u'>Confirmar Senha:</label>
              <input name='confSenha-u' type='password' class='form-control' id='confSenha-u' value='$senha'>
            </div>";
            
            if($cargo == 'admin'){
              echo "<div class='form-group'>
                <label for='sel1'>Cargo:</label>
                <select class='form-control' id='sel1' name='cargo-u'>
                  <option value='admin'>Admin</option>
                  <option value='leitor'>Leitor</option>
                </select>
              </div>";
            }
            else{
              echo "<div class='form-group'>
                <label for='sel1'>Cargo:</label>
                <select class='form-control' id='sel1' name='cargo-u'>
                  <option value='leitor'>Leitor</option>
                </select>
              </div>";
            }
            echo "<button type='submit' class='btn btn-primary'>Salvar</button>
                 <a data-toggle='modal' data-target='#alerta' class='btn btn-danger'>Deletar</a>";
            ?>
        </form>
      </div>
    </center>   
  <br><br><br><br><br><br><br><br><br><br>
  </div>
</div>
<form action="deletar_u.php" method="GET">
  <div class="modal fade" id="alerta" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4>Tem certeza que deseja deletar este usuario?</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <!-- CERTEZA -->
          <center>
            <img src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fmedia.makeameme.org%2Fcreated%2FTEM-CERTEZA-DISSO.jpg&f=1" style="width: 100%;">
            <label style="float: left;">Usuario:</label>
            <?php
            $id = $_GET['id'];
            
            echo "<input type='text' name='usuario-d' value='$seuUsuario' class='form-control'>";
            echo "<label style='float: left;'>Senha:</label>";
            echo "<input type='password' name='senha-d' value='$senha' class='form-control'>";
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
  <?php include 'footer.php';?>
</body>
</html>
<?php } ?>