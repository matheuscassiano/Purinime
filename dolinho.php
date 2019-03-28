<?php
  session_start();
  if (!empty($_SESSION)) {
  	$id = $_SESSION['usuario_id'];
  }
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $database = 'purinime';

  $link = mysqli_connect($host, $user, $pass, $database);
?>
