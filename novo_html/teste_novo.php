<?php
   include 'include/mysql.php';

   $mensagem="";
    if(isset($_POST['acao'])){
        
        $codigo_usuario = 1; //colocar o login do usuario
        $pergunta1 = $_POST['grupo1'];
        $pergunta2 = $_POST['grupo2'];
        $pergunta3 = $_POST['grupo3'];
        $pergunta4 = $_POST['grupo4'];
        $pergunta5 = $_POST['grupo5'];
        $pergunta6 = $_POST['grupo6'];
        $pergunta7 = $_POST['grupo7'];
        $pergunta8 = $_POST['grupo8'];
        $pergunta9 = $_POST['grupo9'];
        $pergunta10 = $_POST['grupo10'];
        $pergunta11 = $_POST['grupo11'];
        $pergunta12 = $_POST['grupo12'];
        $pergunta13 = $_POST['grupo13'];
        $pergunta14 = $_POST['grupo14'];
        $pergunta15 = $_POST['grupo15'];
        $pergunta16 = $_POST['grupo16'];
        $pergunta17 = $_POST['grupo17'];


        $sql = $pdo->prepare("INSERT INTO questionario (cod_pergunta, cod_usuario, pergunta1, pergunta2, pergunta3, pergunta4, pergunta5, 
        pergunta6, pergunta7, pergunta8, pergunta9, pergunta10, pergunta11, pergunta12, pergunta13, pergunta14, pergunta15, pergunta16, pergunta17)
                                            values (null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        if ($sql->execute(array($codigo_usuario,$pergunta1,$pergunta2,$pergunta3,$pergunta4,$pergunta5,$pergunta6,$pergunta7,$pergunta8,$pergunta9,$pergunta10,$pergunta11,$pergunta12,$pergunta13,$pergunta14,$pergunta15,$pergunta16,$pergunta17))){
          echo 'Cadastro com sucesso';
        } else{
          echo 'Erro ao cadastrar';
        }


        //Ultimo registor inserido
        $codigo=0;
        $sql = $pdo->prepare("SELECT cod_pergunta FROM questionario ORDER BY cod_pergunta DESC limit 1");
        if ($sql->execute(array())){
          $info = $sql->fetchAll(PDO::FETCH_ASSOC);
          if (count($info) > 0) { 
            foreach($info as $key => $values){
              $codigo= $values['cod_pergunta'];
            }  
          } 

          $A=0;
          $B=0;
          $C=0;
          $D=0;
          $E=0;
          $sql = $pdo->prepare("SELECT * FROM questionario Where cod_pergunta = ?");
          if ($sql->execute(array($codigo))){
            $info = $sql->fetchAll(PDO::FETCH_ASSOC);
            if (count($info) > 0) { 
                foreach($info as $key => $values){
                  if ($values['pergunta1'] == 'A')
                      $A++;
                  else if ($values['pergunta1'] == 'B')
                      $B++;    
                  else if ($values['pergunta1'] == 'C')
                      $C++;    
                  else if ($values['pergunta1'] == 'D')
                      $D++;    
                  else if ($values['pergunta1'] == 'E')
                      $E++;    

                  if ($values['pergunta2'] == 'A')
                      $A++;
                  else if ($values['pergunta2'] == 'B')
                      $B++;    
                  else if ($values['pergunta2'] == 'C')
                      $C++;    
                  else if ($values['pergunta2'] == 'D')
                      $D++;    
                  else if ($values['pergunta2'] == 'E')
                      $E++; 

                  if ($values['pergunta3'] == 'A')
                      $A++;
                  else if ($values['pergunta3'] == 'B')
                      $B++;    
                  else if ($values['pergunta3'] == 'C')
                      $C++;    
                  else if ($values['pergunta3'] == 'D')
                      $D++;    
                  else if ($values['pergunta3'] == 'E')
                      $E++;  

                  if ($values['pergunta4'] == 'A')
                      $A++;
                  else if ($values['pergunta4'] == 'B')
                      $B++;    
                  else if ($values['pergunta4'] == 'C')
                      $C++;    
                  else if ($values['pergunta4'] == 'D')
                      $D++;    
                  else if ($values['pergunta4'] == 'E')
                      $E++;
                      
                  if ($values['pergunta5'] == 'A')
                      $A++;
                  else if ($values['pergunta5'] == 'B')
                      $B++;    
                  else if ($values['pergunta5'] == 'C')
                      $C++;    
                  else if ($values['pergunta5'] == 'D')
                      $D++;    
                  else if ($values['pergunta5'] == 'E')
                      $E++; 
                      
                  if ($values['pergunta6'] == 'A')
                      $A++;
                  else if ($values['pergunta6'] == 'B')
                      $B++;    
                  else if ($values['pergunta6'] == 'C')
                      $C++;    
                  else if ($values['pergunta6'] == 'D')
                      $D++;    
                  else if ($values['pergunta6'] == 'E')
                      $E++;
                      
                  if ($values['pergunta7'] == 'A')
                      $A++;
                  else if ($values['pergunta7'] == 'B')
                      $B++;    
                  else if ($values['pergunta7'] == 'C')
                      $C++;    
                  else if ($values['pergunta7'] == 'D')
                      $D++;    
                  else if ($values['pergunta7'] == 'E')
                      $E++; 
                      
                  if ($values['pergunta8'] == 'A')
                      $A++;
                  else if ($values['pergunta8'] == 'B')
                      $B++;    
                  else if ($values['pergunta8'] == 'C')
                      $C++;    
                  else if ($values['pergunta8'] == 'D')
                      $D++;    
                  else if ($values['pergunta8'] == 'E')
                      $E++;    

                  if ($values['pergunta9'] == 'A')
                      $A++;
                  else if ($values['pergunta9'] == 'B')
                      $B++;    
                  else if ($values['pergunta9'] == 'C')
                      $C++;    
                  else if ($values['pergunta9'] == 'D')
                      $D++;    
                  else if ($values['pergunta9'] == 'E')
                      $E++; 
                      
                  if ($values['pergunta10'] == 'A')
                      $A++;
                  else if ($values['pergunta10'] == 'B')
                      $B++;    
                  else if ($values['pergunta10'] == 'C')
                      $C++;    
                  else if ($values['pergunta10'] == 'D')
                      $D++;    
                  else if ($values['pergunta10'] == 'E')
                      $E++;  
                      
                  if ($values['pergunta11'] == 'A')
                      $A++;
                  else if ($values['pergunta11'] == 'B')
                      $B++;    
                  else if ($values['pergunta11'] == 'C')
                      $C++;    
                  else if ($values['pergunta11'] == 'D')
                      $D++;    
                  else if ($values['pergunta11'] == 'E')
                      $E++;    
                      
                  if ($values['pergunta12'] == 'A')
                      $A++;
                  else if ($values['pergunta12'] == 'B')
                      $B++;    
                  else if ($values['pergunta12'] == 'C')
                      $C++;    
                  else if ($values['pergunta12'] == 'D')
                      $D++;    
                  else if ($values['pergunta12'] == 'E')
                      $E++;    
                      
                  if ($values['pergunta13'] == 'A')
                      $A++;
                  else if ($values['pergunta13'] == 'B')
                      $B++;    
                  else if ($values['pergunta13'] == 'C')
                      $C++;    
                  else if ($values['pergunta13'] == 'D')
                      $D++;    
                  else if ($values['pergunta13'] == 'E')
                      $E++;    
                      
                  if ($values['pergunta14'] == 'A')
                      $A++;
                  else if ($values['pergunta14'] == 'B')
                      $B++;    
                  else if ($values['pergunta14'] == 'C')
                      $C++;    
                  else if ($values['pergunta14'] == 'D')
                      $D++;    
                  else if ($values['pergunta14'] == 'E')
                      $E++;    
                      
                  if ($values['pergunta15'] == 'A')
                      $A++;
                  else if ($values['pergunta15'] == 'B')
                      $B++;    
                  else if ($values['pergunta15'] == 'C')
                      $C++;    
                  else if ($values['pergunta15'] == 'D')
                      $D++;    
                  else if ($values['pergunta15'] == 'E')
                      $E++;    
                      
                  if ($values['pergunta16'] == 'A')
                      $A++;
                  else if ($values['pergunta16'] == 'B')
                      $B++;    
                  else if ($values['pergunta16'] == 'C')
                      $C++;    
                  else if ($values['pergunta16'] == 'D')
                      $D++;    
                  else if ($values['pergunta16'] == 'E')
                      $E++;    
              
                  if ($values['pergunta17'] == 'A')
                      $A++;
                  else if ($values['pergunta17'] == 'B')
                      $B++;    
                  else if ($values['pergunta17'] == 'C')
                      $C++;    
                  else if ($values['pergunta17'] == 'D')
                      $D++;    
                  else if ($values['pergunta17'] == 'E')
                      $E++;    

                      echo "<br>";
                  // vari??veis da diferen??a salarial 
                  $saldev[0] = $A;
                  $saldev[1] = $B;
                  $saldev[2] = $C;
                  $saldev[3] = $D;
                  $saldev[4] = $E;
                  $saldev2 = max($saldev);
                  $mensagem = "<p>Total de Respostas A: ".$A."</p>";
                  $mensagem = $mensagem."<p>Total de Respostas B: ".$B."</p>";
                  $mensagem = $mensagem."<p>Total de Respostas C: ".$C."</p>";
                  $mensagem = $mensagem."<p>Total de Respostas D: ".$D."</p>";
                  $mensagem = $mensagem."<p>Total de Respostas E: ".$E."</p>";


                  if ($saldev2 == $A)
                    $mensagem  = $mensagem."<p> A:Voc?? valoriza o sucesso profissional. Profiss??es relacionadas: Arquitetura, Artes C??nicas, Artes Pl??sticas, Astronomia, Ci??ncias Biol??gicas (Biologia), Cinema, Engenharia Mec??nica, Esporte, Filosofia, Jornalismo, Matem??tica, Publicidade, R??dio e TV, Turismo, Veterin??ria, Educa????o F??sica, Meteorologia, Oceanografia, Engenharia Ambiental, Engenharia Florestal e Arqueologia.</p>";
                  if ($saldev2 == $B)
                    $mensagem = $mensagem."<p> B: Voc?? valoriza a ascens??o social. Profiss??es relacionadas: Medicina, Direito, Artes C??nicas, Arquitetura, Cinema, Editora????o, Engenharia Aeron??utica, Jornalismo, Odontologia, Biomedicina, Farm??cia, Artes Pl??sticas, Artes Visuais, Gastronomia, Rela????es Internacionais e Rela????es P??blicas.</p>";
                  if ($saldev2 == $C)
                    $mensagem = $mensagem."<p> C: Voc?? valoriza a seguran??a. Profiss??es relacionadas: Medicina, Odontologia, Engenharia Civil, Engenharia da Computa????o, Letras, Nutri????o, Pedagogia, Psicologia, Veterin??ria, Biomedicina, Hist??ria, Pedagogia, Ci??ncia da Computa????o, Engenharia de Controle e Automa????o, Engenharia Nuclear e Engenharia de Materiais.</p>";
                  if ($saldev2 == $D)
                    $mensagem = $mensagem."<p> D: Voc?? valoriza a qualidade de vida. Profiss??es relacionadas: Administra????o, Ci??ncias Cont??beis, An??lise de Sistemas, Economia, Engenharia da Computa????o, Farm??cia, F??sica, Com??rcio Exterior, Engenharia Mec??nica, Engenharia Eletr??nica, Engenharia El??trica, Engenharia de Produ????o, Engenharia de Agrimensura e Biblioteconomia.</p>";
                  if ($saldev2 == $E)
                    $mensagem = $mensagem."<p> E: Voc?? valoriza a solidariedade. Profiss??es relacionadas: Ci??ncias Sociais, Enfermagem, Fonoaudiologia, Engenharia de Alimentos, Jornalismo, Nutri????o, Terapia Ocupacional, Psicologia, Servi??o Social, Fisioterapia, Odontologia, Decora????o, Moda, Fonoaudiologia e Farm??cia.</p>";
          
                }
                
            } else {
                echo '<h6>Email de Usu??rio n??o cadastrado</h6>';
            }
          }    
      }


  }     
 ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigat??rias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/estilo.css">
</head>
<title>Teste</title>

<body>
  
 
  <nav class="navbar navbar-expand-lg navbar-light bg-info" style="background-color:#5d7ead !important">
    <img src="css/semnada.png" width="150" height="100" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar"
      aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navega????o">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="textoNavbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
        <li class="nav-item">
          <a class="nav-link" href="index.html">P??gina Inicial</a>
        </li>
        <li cflass="nav-item">
          <a class="nav-link" href="sobre_nos.html">Sobre N??s </a>
        </li>
        <a class="nav-link" href="info.html">Informa????es</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dicas_novo.html">Dicas</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="teste_novo.html">Teste</a>
        </li>
        <li>
      </ul>
      <a href="cadast.php" class="btn btn-light">Cadastro</a>
</li>
<li>
      <a href="login.php" class="btn btn-light">Login</a>
</li>
    </div>
  </nav>
  <div class="alert alert-danger" role="alert">
    Leia atentamente as perguntas a baixo e seja sincero com voc?? mesmo.
  </div>
  <br>
  <div class="container">
  <div class="jumbotron">
    <div class="row">
      <div class="col">
        <b><i>Fa??a no seu tempo! a pressa ?? a inimiga da perfei????o.<br>
            <u>Anote suas respostas para poder conferir o resultado ao t??rmino!!</u></b></i>
      </div>
    </div>
    <br>
    <b>1) Quando penso numa profiss??o, o mais importante para mim ??:</b><br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo1" type="radio" id="grupox11" value="A">
      <label class="form-check-label" for="inlineradio">a) Obter um bom retorno financeiro e ser bem sucedido;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo1" type="radio" id="grupox12" value="B">
      <label class="form-check-label" for="inlineradio">b) Trabalhar em algo que esteja em evid??ncia no mercado;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo1" type="radio" id="grupox13" value="C">
      <label class="form-check-label" for="inlineradio">c) Fazer algo que gosto, independente do retorno
        financeiro;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo1" type="radio" id="grupox14" value="D">
      <label class="form-check-label" for="inlineradio">d) Ser muito bem sucedido financeiramente;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo1" type="radio" id="grupox15" value="E">
      <label class="form-check-label" for="inlineradio">e) Poder atuar na minha comunidade.</label>
    </div>
    <br>
    <br>
    <b>2) Das viagens abaixo, qual seria considerada por voc?? como a viagem perfeita?</b>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo2" type="radio" id="grupox21" value="A">
      <label class="form-check-label" for="inlineradio">a) Conhecer os castelos antigos da Europa e visitar os
        museus;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo2" type="radio" id="grupox22" value="B">
      <label class="form-check-label" for="inlineradio">b) Surf e aventuras radicais na Austr??lia;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo2" type="radio" id="grupox23" value="C">
      <label class="form-check-label" for="inlineradio">c) Compras e conforto, viajando pelo Estados Unidos;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo2" type="radio" id="grupox24" value="D">
      <label class="form-check-label" for="inlineradio">d) Ser muito bem sucedido financeiramente;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo2" type="radio" id="grupox25" value="E">
      <label class="form-check-label" for="inlineradio">e) Descansar com a fam??lia em uma ilha paradis??aca.</label>
    </div>
    <br>
    <br>
    <b>3) A pessoa da sua fam??lia que voc?? mais admira:</b>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo3" type="radio" id="grupox31" value="A">
      <label class="form-check-label" for="inlineradio">a) Estudou bastante e possui uma posi????o de destaque no mercado
        de trabalho;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo3" type="radio" id="grupox32" value="B">
      <label class="form-check-label" for="inlineradio">b) ?? aventureira e viaja bastante;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo3" type="radio" id="grupox33" value="C">
      <label class="form-check-label" for="inlineradio">c) Curte a vida e est?? sempre com novidades;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo3" type="radio" id="grupox34" value="D">
      <label class="form-check-label" for="inlineradio">d) ?? bastante criativa e est?? sempre com novidades;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo3" type="radio" id="grupox35" value="E">
      <label class="form-check-label" for="inlineradio">e) Se dedica a algum trabalho de ajuda ao pr??ximo.</label>
    </div>
    <br>
    <br>
    <b>4) Se eu tivesse que montar uma empresa hoje, esta empresa seria:</b>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo4" type="radio" id="grupox41" value="A">
      <label class="form-check-label" for="inlineradio">a) Uma empresa baseada em algo do seu interesse pessoal como um
        passatempo ou atividade pr??tico;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo4" type="radio" id="grupox42" value="B">
      <label class="form-check-label" for="inlineradio">b) Uma empresa direcionada as tend??ncias atuais do mercado
        independentemente da ??rea de atividade;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo4" type="radio" id="grupox43" value="C">
      <label class="form-check-label" for="inlineradio">c) Uma empresa familiar, onde eu pudesse trabalhar perto dos
        meus amigos e familiares;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo4" type="radio" id="grupox44" value="D">
      <label class="form-check-label" for="inlineradio">d) Uma empresa tradicional, com protudos ou servi??os
        conservadores e de f??cil comercializa????o;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo4" type="radio" id="grupox45" value="E">
      <label class="form-check-label" for="inlineradio">e) Uma empresa criativa, onde eu pudesse arriscar e desenvolver
        novas ideias.</label>
    </div>
    <br>
    <br>
    <b>5) Qual pa??s abaixo voc?? desejaria conhecer?</b>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo5" type="radio" id="grupox51" value="A">
      <label class="form-check-label" for="inlineradio">a) Egito;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo5" type="radio" id="grupox52" value="B">
      <label class="form-check-label" for="inlineradio">b) Israel;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo5" type="radio" id="grupox53" value="C">
      <label class="form-check-label" for="inlineradio">c) Nova Zel??ndia;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo5"  type="radio" id="grupox54" value="D">
      <label class="form-check-label" for="inlineradio">d) Tail??ndia;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo5"  type="radio" id="grupox55" value="E">
      <label class="form-check-label" for="inlineradio">e) ??frica do Sul.</label>
    </div>
    <br>
    <br>
    <b>6) Qual dos esportes abaixo voc?? mais se identifica?</b>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo6" type="radio" id="grupox61" value="A">
      <label class="form-check-label" for="inlineradio">a) Futebol;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo6" type="radio" id="grupox62" value="B">
      <label class="form-check-label" for="inlineradio">b) Lutas;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo6" type="radio" id="grupox63" value="C">
      <label class="form-check-label" for="inlineradio">c) Nata????o;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo6" type="radio" id="grupox64" value="D">
      <label class="form-check-label" for="inlineradio">d) T??nis;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo6" type="radio" id="grupox65" value="E">
      <label class="form-check-label" for="inlineradio">e) N??o gosto de esportes.</label>
    </div>
    <br>
    <br>
    <b>7) Em um ambiente onde voc?? n??o conhece ningu??m, voc?? costuma:</b>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo7" type="radio" id="grupox71" value="A">
      <label class="form-check-label" for="inlineradio">a) Ficar em um lugar isolado;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo7" type="radio" id="grupox72" value="B">
      <label class="form-check-label" for="inlineradio">b) Conversar com algu??m que possa lhe introduzir a um
        grupo;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo7" type="radio" id="grupox73" value="C">
      <label class="form-check-label" for="inlineradio">c) Curtir sozinho;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo7" type="radio" id="grupox74" value="D">
      <label class="form-check-label" for="inlineCheckbox3">d) Se socializar e conquistar amigos;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo7" type="radio" id="grupox75" value="E">
      <label class="form-check-label" for="inlineradio">e) Se sentir incomodado por estar sozinho e vai embora.</label>
    </div>
    <br>
    <br>
    <b>8) Em quais destes ambientes voc?? se sente mais a vontade?</b>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo8" type="radio" id="grupox81" value="A">
      <label class="form-check-label" for="inlineradio">a) Em um hospital;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo8" type="radio" id="grupox82" value="B">
      <label class="form-check-label" for="inlineradio">b) Em centros esportivos;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo8" type="radio" id="grupox83" value="C">
      <label class="form-check-label" for="inlineCheckbox3">c) Em uma floresta;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo8" type="radio" id="grupox84" value="D">
      <label class="form-check-label" for="inlineradio">d) Em shoppings;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo8" type="radio" id="grupox85" value="E">
      <label class="form-check-label" for="inlineradio">e) Em lugares isolados.</label>
    </div>
    <br>
    <br>
    <b>9) Dentre estas personalidades, a que mais admiro ??:</b>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo9" type="radio" id="grupox91" value="A">
      <label class="form-check-label" for="inlineCheckbox1">a) Bill Gates;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo9" type="radio" id="grupox92" value="B">
      <label class="form-check-label" for="inlineradio">b) Steve Jobs;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo9" type="radio" id="grupox93" value="C">
      <label class="form-check-label" for="inlineradio">c) Ronaldo;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo9" type="radio" id="grupox94" value="D">
      <label class="form-check-label" for="inlineradio">d) Angelina Jolie;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo9" type="radio" id="grupox95" value="E">
      <label class="form-check-label" for="inlineradio">e) Madre Tereza.</label>
    </div>
    <br>
    <br>
    <b>10) Estou fazendo este teste vocacional pois:</b>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo10" type="radio" id="grupox101" value="A">
      <label class="form-check-label" for="inlineradio">a) N??o tenho ideia de qual profiss??o escolher;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo10" type="radio" id="grupox102" value="B">
      <label class="form-check-label" for="inlineradio">b) Estou na d??vida entre duas profiss??es;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo10" type="radio" id="grupox103" value="C">
      <label class="form-check-label" for="inlineradio">c) Estou na d??vida entre 3 profiss??es ou mais;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo10" type="radio" id="grupox104" value="D">
      <label class="form-check-label" for="inlineradio">d) Sei qual profiss??o me interessa, mas n??o tenho
        certeza;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo10" type="radio" id="grupox105" value="E">
      <label class="form-check-label" for="inlineradio">e) Estou certo de qual profiss??o eu quero, apenas pretendo
        conferir</label>
    </div>
    <br>
    <br>
    <b>11) Procuro fazer amigos que:</b>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo11" type="radio" id="grupox111" value="A">
      <label class="form-check-label" for="inlineradio">a) Possuem status e s??o influentes;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo11" type="radio" id="grupox112" value="B">
      <label class="form-check-label" for="inlineradio">b) Possuem os mesmos interesses que eu;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo11" type="radio" id="grupox113" value="C">
      <label class="form-check-label" for="inlineradio">c) Compartilham das mesmas ideias;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo11" type="radio" id="grupox114" value="D">
      <label class="form-check-label" for="inlineradio">d) S??o bastante diferentes de mim;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo11" type="radio" id="grupox115" value="E">
      <label class="form-check-label" for="inlineCheckbox3">e) N??o me preocupo com caracter??sticas quando procuro uma
        amizade.</label>
    </div>
    <br>
    <br>
    <b>12) Na escola eu geralmente me destacava por: </b>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo12" type="radio" id="grupox121" value="A">
      <label class="form-check-label" for="inlineradio">a) Ser um aluno dedicado e tirar notas boas;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo12" type="radio" id="grupox122" value="B">
      <label class="form-check-label" for="inlineradio">b) Ser atencioso e ajudar meus colegas;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo12" type="radio" id="grupox123" value="C">
      <label class="form-check-label" for="inlineradio">c) Ser bastante dedicado aos esportes;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo12" type="radio" id="grupox124" value="D">
      <label class="form-check-label" for="inlineCheckbox3">d) N??o prestar aten????o nas aulas e ser repreendido;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo12" type="radio" id="grupox125" value="E">
      <label class="form-check-label" for="inlineradio">e) Ser engra??ado e contar piadas.</label>
    </div>
    <br>
    <br>
    <b>13) Se eu ganhasse na loteria eu:</b>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo13" type="radio" id="grupox131" value="A">
      <label class="form-check-label" for="inlineradio">a) Guardaria parte do dinheiro e investiria em um
        neg??cio;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo13" type="radio" id="grupox132" value="B">
      <label class="form-check-label" for="inlineradio">b) Dividiria meu dinheiro entre diversas op????es de
        investimento;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo13" type="radio" id="grupox133" value="C">
      <label class="form-check-label" for="inlineradio">c) Guardaria o dinheiro e me dedicaria a atividades que me
        interessam;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo13" type="radio" id="grupox134" value="D">
      <label class="form-check-label" for="inlineradio">d) Usaria o dinheiro para uma causa nobre;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo13" type="radio" id="grupox135" value="E">
      <label class="form-check-label" for="inlineradio">e) Aposentaria e viveria viajando.</label>
    </div>
    <br>
    <br>
    <b>14) Se eu tivesse que escolher uma atividade para exercer por 6 meses seria:</b>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo14" type="radio" id="grupox141" value="A">
      <label class="form-check-label" for="inlineradio">a) Reformar uma casa;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo14" type="radio" id="grupox142" value="B">
      <label class="form-check-label" for="inlineradio">b) Me colocar em contato com pessoas bem-sucedidas;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo14" type="radio" id="grupox143" value="C">
      <label class="form-check-label" for="inlineradio">c) Algo que pudesse ser realizado em equipe;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo14" type="radio" id="grupox144" value="D">
      <label class="form-check-label" for="inlineradio">d) Uma atividade com boa remunera????o;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo14" type="radio" id="grupox145" value="E">
      <label class="form-check-label" for="inlineradio">e) Uma atividade volunt??ria e com a qual eu pudesse ajudar o
        maior n??mero de pessoas.</label>
    </div>
    <br>
    <br>
    <b>15) Eu certamente gastaria uma boa parte do meu primeiro sal??rio com:</b>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo15" type="radio" id="grupox151" value="A">
      <label class="form-check-label" for="inlineradio">a) Um jantar para a(o) namorada(o) ou familiares;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo15" type="radio" id="grupox152" value="B">
      <label class="form-check-label" for="inlineradio">b) Investiria em meu desenvolvimento profissional;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo15" type="radio" id="grupox153" value="C">
      <label class="form-check-label" for="inlineradio">c) Uma viagem;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo15" type="radio" id="grupox154" value="D">
      <label class="form-check-label" for="inlineradio">d) Gastaria o m??nimo poss??vel;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo15" type="radio" id="grupox155" value="E">
      <label class="form-check-label" for="inlineradio">e) Compraria algum produto caro de meu interesse.</label>
    </div>
    <br>
    <br>
    <b>16) Se eu tivesse que abrir um destes neg??cios seria:</b>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo16" type="radio" id="grupox161" value="A">
      <label class="form-check-label" for="inlineradio">a) Uma empresa de internet;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo16" type="radio" id="grupox162" value="B">
      <label class="form-check-label" for="inlineradio">b) Uma f??brica de computadores;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo16" type="radio" id="grupox163" value="C">
      <label class="form-check-label" for="inlineradio">c) Um restaurante;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo16" type="radio" id="grupox164" value="D">
      <label class="form-check-label" for="inlineradio">d) Uma academia;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo16" type="radio" id="grupox165" value="E">
      <label class="form-check-label" for="inlineradio">e) Uma cl??nica m??dica.</label>
    </div>
    <br>
    <br>
    <b>17) Minha maior frustra????o seria:</b>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo17" type="radio" id="grupox171" value="A">
      <label class="form-check-label" for="inlineradio">a) N??o ser bem sucedido profissionalmente;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo17" type="radio" id="grupox172" value="B">
      <label class="form-check-label" for="inlineradio">b) N??o me destacar em minha ??rea de atua????o;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo17" type="radio" id="grupox173" value="C">
      <label class="form-check-label" for="inlineradio">c) N??o construir uma fam??lia;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo17" type="radio" id="grupox174" value="D">
      <label class="form-check-label" for="inlineradio">d) N??o ter muito tempo para curtir a vida;</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="grupo17" type="radio" id="grupox175" value="E">
      <label class="form-check-label" for="inlineradio">e) Escolher a carreira errada e ter que mudar depois.</label>
    </div>
    </div>
    <input type="submit" name="acao" class="btn btn-outline-blue" value="Resultado">

    </form> 
    
    <?php echo $mensagem ?>
<br>
<br>
<br>
</div>
<br>
<br>
<br>
<!--
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <b>
            <p>Se entre suas respostas a mais marcada foi a:</p>
          </b>
        </div>
        <br>
        <div class="col-sm-12 col-md-8">
          <p><b>Leia com calma todas as perguntas feitas a seguir<br>
              Anote suas respostas para poder conferir o resultado ao t??rmino</p></b>
        </div>
      </div>
      <div class="col-sm-12 col-md-12">
        <br>A:Voc?? valoriza o sucesso profissional.
        <br> <b>Profiss??es relacionadas: </b>
        <br>Arquitetura, Artes C??nicas, Artes Pl??sticas, Astronomia, Ci??ncias Biol??gicas (Biologia), Cinema,
        Engenharia
        Mec??nica, Esporte, Filosofia, Jornalismo, Matem??tica, Publicidade, R??dio e TV, Turismo, Veterin??ria,
        Educa????o
        F??sica, Meteorologia, Oceanografia, Engenharia Ambiental, Engenharia Florestal e Arqueologia.
      </div>
      <br>
      <div class="col-sm-12 col-md-6">
        <br>B: Voc?? valoriza a ascens??o social.
        <br><b>Profiss??es relacionadas:</b>
        <br>Medicina, Direito, Artes C??nicas, Arquitetura, Cinema, Editora????o, Engenharia Aeron??utica, Jornalismo,
        Odontologia, Biomedicina, Farm??cia, Artes Pl??sticas, Artes Visuais, Gastronomia, Rela????es Internacionais e
        Rela????es P??blicas.
      </div>
      <div class="col-sm-12 col-md-6">
        <br>C: Voc?? valoriza a seguran??a.
        <br><b>Profiss??es relacionadas:</b>
        <br>Medicina, Odontologia, Engenharia Civil, Engenharia da Computa????o, Letras, Nutri????o, Pedagogia,
        Psicologia,
        Veterin??ria, Biomedicina, Hist??ria, Pedagogia, Ci??ncia da Computa????o, Engenharia de Controle e Automa????o,
        Engenharia Nuclear e Engenharia de Materiais.
      </div>
      <div class="col-sm-12 col-md-6">
        <br>D: Voc?? valoriza a qualidade de vida.
        <br><b>Profiss??es relacionadas:</b>
        <br>Administra????o, Ci??ncias Cont??beis, An??lise de Sistemas, Economia, Engenharia da Computa????o, Farm??cia,
        F??sica, Com??rcio Exterior, Engenharia Mec??nica, Engenharia Eletr??nica, Engenharia El??trica, Engenharia de
        Produ????o, Engenharia de Agrimensura e Biblioteconomia.
      </div>
      <div class="col-sm-12 col-md-6">
        <br>E: Voc?? valoriza a solidariedade.
        <br><b>Profiss??es relacionadas:</b>
        <br>Ci??ncias Sociais, Enfermagem, Fonoaudiologia, Engenharia de Alimentos, Jornalismo, Nutri????o, Terapia
        Ocupacional, Psicologia, Servi??o Social, Fisioterapia, Odontologia, Decora????o, Moda, Fonoaudiologia e
        Farm??cia.
      </div>
    </div>
    <br>
    <br>
    -->
    <footer class="footer fixed-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
          </div>
    </footer>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"></script>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
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