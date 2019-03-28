<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Purinime</title>
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">

  <link rel="icon" href="https://i.imgur.com/iPRnZfP.png" sizes="16x16">

  <link rel="stylesheet" href="CSS/index.css">
  <link rel="stylesheet" href="CSS/cabeca.css"> 
  <link rel="stylesheet" href="CSS/footer.css"> 

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
  <center>

  <?php 
  include 'areaPrivada.php';
  ?>

  <div class="container">
  <h2>Administrar usuários</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Usuário</th>
        <th>ID</th>
        <th>Email</th>
        <th>Cargo</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>1</td>
        <td>john@example.com</td>
        <td>Usuário</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>2</td>
        <td>mary@example.com</td>
        <td>Usuário</td>
      </tr>
      <tr>
        <td>July</td>
        <td>3</td>
        <td>july@example.com</td>
        <td>Usuário</td>
      </tr>
      <tr>
        <td>July</td>
        <td>4</td>
        <td>july@example.com</td>
        <td>Usuário</td>
      </tr>
    </tbody>
  </table>
</div>
  </center>
  <?php include 'footer.php';?>
</body>
</html>
