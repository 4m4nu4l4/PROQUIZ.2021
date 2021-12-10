<?php
include 'include/mysql.php';
    session_start();
    $_SESSION["nome"] = "";
    $_SESSION["email"] = "";
?>      

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" type="text/CSS" href="css/login.css">
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta charset="utf-8">
  <nav class="navbar navbar-expand-lg navbar-light bg-info" style="background-color:#5d7ead !important">         
    <img src="css/semnada.png" width="150" height="100" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar"
      aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="textoNavbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Página Inicial <span class="sr-only">(Página atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sobre_nos.html">Sobre Nós</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="info.html">Informações</a>
        </li>
        <a class="nav-link" href="dicas_novo.html">Dicas</a>
        </li>
        <a class="nav-link" href="teste_novo.php">Teste </a>
        </li>
      </ul>
      <a href="cadast.php" class="btn btn-light">Cadastro</a>
      <!--<button type="button" class="btn btn-light" href="cadast.html">Cadastre-se</button>-->
    </div>
  </nav>
</head>
  <br>
  <br>
    <br>
    <div id="cadastro" class="mx-auto">
      <div class="container mx-auto pt-10 px-10">
      <div class="jumbotron">
            <b>
                <h1>Acesse a sua conta!</h1>
              </b>
              <hr class="my-4">
        <div class="text-lg text-center font-bold mb-4">
        <form action="" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">
                <h4>Email</h4>
              </label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">
                <h4>Senha</h4>
              </label>
              <input type="password" name="senha" class="form-control" id="password" name="senha" required>
            </div>
            <button type="reset" class="btn btn-danger btn-lg">Cancelar</button>
            <button type="submit" name="acao" value="Cadastrar" class="btn btn-success btn-lg" id="btnenviar">Enviar</button>
          </form>
          <div id="erro">

          </div>
        </div>
</div>
      </div>
    </div>
    <br>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
      const btncadastrar = document.getElementById ("btncadastrar");
      btncadastrar.onclick = function(){
        document.location = "Cadastro.php";
      }  
     </script>
  </body>
</html>
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=','root','');
 
    if(isset($_POST['acao'])){
        
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
 
        $sql = $pdo->prepare("SELECT * FROM usuarios
                              WHERE email = ? AND senha = ?");
 
        if ($sql->execute(array($email, $senha))){
            if ($sql->rowCount() > 0){
                $info = $sql->fetchAll(PDO::FETCH_ASSOC);
                foreach($info as $key => $values){
                    $_SESSION["nome"] = $values["nome"];
                    $_SESSION["email"] = $values["email"];
                    
                }
                ?>
                <script>
                document.location = "paglogado.html";
                </script>
                <?php
            }else{
              ?>
                <script>
                   const diverro = document.getElementById ("erro");
                   diverro.innerHTML = "Usuario não cadastrado";
                </script>
                <?php
            }
        }
    }
?>