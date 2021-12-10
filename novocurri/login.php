<!--
usuario com permissao = 1 é adminstrador
usario com permissao  = 2 é leitura
-->
<?php 
  // faz a conexão
  include("connection.php");
  session_start();
  $mensagem = "";
  if($_POST){
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $sql = "SELECT permissao FROM login WHERE nome = '" . $usuario . "' and senha = '" . $senha . "'";
    $res = $conn->query($sql);
    $count = $res->fetchColumn();
    if ($count == 1){
      //admin
      $_SESSION["usuario"] = $usuario;
      $_SESSION["permissao"] = $count;
      header('Location: index.php');
    } else if ($count == 2){
      //leitura
      $_SESSION["usuario"] = $usuario;
      $_SESSION["permissao"] = $count;
      header('Location: index.php');
    }else{
      //nao foi autenticado
      $mensagem = "Usuário ou Senha inexistente";
    }
  }
?>
<link rel="stylesheet" href="css/login.css">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <div class="fadeIn first">
    </div>
    <form method="post">
      <input type="text" id="usuario" class="fadeIn second" name="usuario" placeholder="login">
      <input type="text" id="senha" class="fadeIn third" name="senha" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
      <div><?=$mensagem?></div>
    </form>
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>
  </div>
</div>