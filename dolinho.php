<?php
  session_start();
  if (!empty($_SESSION)) {
  	$id = $_SESSION['usuario_id'];
  }
  $host = 'sql107.epizy.com';
  $user = 'epiz_23522042';
  $pass = '8kI1TAjfwSo6xt';
  $database = 'epiz_23522042_purinime';

  $link = mysqli_connect($host, $user, $pass, $database);
?>