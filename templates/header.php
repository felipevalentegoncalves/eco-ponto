<?php
  include_once("config/url.php");
  include_once("process.php");

  // limpa a mensagem
  if(isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = "";
  }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eco.ponto Curitiba</title>
  <!-- Bootstrap cdnjs -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
  <!-- Font awesome cdnjs -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <!-- CSS -->
  <link rel="stylesheet" href="<?php $BASE_URL?>css/styles.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg custom-navbar">
      <a class="navbar-brand" href="<?php $BASE_URL?>index.php">
        <img src="<?php $BASE_URL?>img\logo.png" alt="logo-ecoponto">
      </a>
      <div>
        <div class="navbar-nav ml-auto">
          <a class="nav-link active" id="home-link" href="<?php $BASE_URL?>index.php">Home</a>
          <a class="nav-link active" id="home-link" href="<?php $BASE_URL?>sobre.php">Sobre</a>
          <a class="nav-link active" href="<?php $BASE_URL?>create.php">Adicionar Ecoponto</a>
        </div>
      </div>
    </nav>
  </header>