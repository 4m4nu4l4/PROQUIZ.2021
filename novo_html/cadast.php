<?php
  /*-S localhost:8000;*/
  include 'include/mysql.php';
  /*include 'include/connection.php';*/
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="css/cadast.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Cadastro</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info" style="background-color:#5d7ead !important">   
        <img src="css/semnada.png" width="150" height="100" alt="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="textoNavbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Página Inicial</a>  
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobre_nos.html">Sobre Nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="info.html">Informações</a>
            </li>
            <li class="nav-item ">
            <a class="nav-link" href="dicas_novo.html">Dicas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="teste_novo.php">Teste </a>
            </li>
          </ul>
          <a href="login.php" class="btn btn-light">Login</a>
         <!--<button type="button" class="btn btn-light" href="cadast.html">Cadastre-se</button>-->
        </div>
      </nav>
    </div>
</nav>
<!--<div class="container">
  <div class="row">
    <b>
      <h1>Cadastro:</h1>
    </b>
  </div>
</div>
-->
<br>
<div class="container">
  <div class="row">
    <div class="col">
        <div class="jumbotron">
            <b>
                <h1>Cadastre-se!</h1>
              </b>
              <hr class="my-4">
      <form>
        <div class="form-row">
          <div class="col">
            <label for="exampleInputEmail1">Nome</label>
            <input type="text" class="form-control" placeholder="Nome">
          </div>
          <div class="col">
            <label for="exampleInputEmail1">Sobrenome</label>
            <input type="text" class="form-control" placeholder="Sobrenome">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Endereço de Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Seu email">
            <br>
          <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Confirmação do Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Confirmação do Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Senha</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
          <br>
          <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar sua senha, com ninguém.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Confirmação da Senha</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmação da Senha">
        </div>
        <div class="col-sm-12 col-md-12">
          <button type="button" class="btn btn-success">Enviar</button>
          <button type="button" class="btn btn-danger">Cancelar</button>
        </div>
        </div>
    </div>
  </div>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
crossorigin="anonymous"></script>
</body>
</html>
