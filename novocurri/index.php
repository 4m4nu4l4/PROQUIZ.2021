<?php 
include("connection.php");
session_start();
 if(empty($_SESSION))
    header('Location: login.php');   
 if (isset($_POST["logout"])){
   session_destroy();
   header('Location: login.php');   
 }
 $id = 1;
    if (isset($_GET["id"])) {
      $id = $_GET["id"];
    };
     if($_POST){
      $id = $_POST["select"];    
    }
  $sql = 'SELECT nome, cargo, experiencia, formacao, contato, imagem FROM dados WHERE id = ' . $id;
  $dados = $conn->query($sql);
    foreach ($dados as $row) {
        $nome = utf8_encode($row["nome"]);
        $cargo = utf8_encode($row["cargo"]);
        $experiencia = utf8_encode($row["experiencia"]);
        $ferramentas = "";
        $formacao = utf8_encode($row["formacao"]);
        $contato = utf8_encode($row["contato"]);
        $imagem = $row["imagem"];
    }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="sortcut icon" href="favicon.ico" type="image/x-icon" />
  <title><?php echo " " . $nome ?> </title>
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
</head>
<body>
  <form method="post"> 
    <select id="select" name="select" style="height: 21px; margin-left: 15%; margin-top: 1%; margin-bottom: 1%">
        <?php
          $filtro = 'SELECT id, nome FROM dados';
          $filtro = $conn->query($filtro);          
          foreach ($filtro as $row){ ?>
            <option <?=$id == $row["id"] ? 'selected' : '' ?> value="<?=$row["id"]?>"><?=utf8_encode($row["nome"])?></option>
        <?php  }
        ?>        
    </select>
    <input type="submit" value="Busca CV">    
    <?php
        if($_SESSION["permissao"] == 1) {
    ?>
      <button><a style="color: black; text-decoration: none" rate="button" href="cadastro.php"> Cadastro </a> </button>    
    <?php 
      } 
    ?>    
    <input style="margin-left: 35%;" type="submit" name="logout" id="logout" value="Sair">
    Olá, <?=$_SESSION["usuario"]?>!  
  </form>
  <main>
    <div class="leftCol m_box">
      <section style="background-image:url(<?=$imagem?>)" class="perfil"></section>
      <section class="contacts">
        <div class="section-headline">
          <?php echo $contato ?>
        </div>
      </section>
      <section class="skills">
        <div class="section-headline">
        <?php echo $ferramentas ?>
        </div>    
      </section>
    </div>
    <div class="rightCol">
      <section>
        <div class="title">
          <h2><?php echo $nome ?></h2>
          <div><?php echo $cargo ?></div>
        </div>
      </section>
      <section class="experience">
        <div class="section-headline"><?php echo $experiencia ?></div>
      </section>
      <!--educação!!-->
      <section class="education">
        <div class="section-headline"><?php echo $formacao ?></div>
    </div>
    </section>
  </main>
</body>
</html>
