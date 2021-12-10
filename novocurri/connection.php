<?php
  $usuario = "root";
  $senha = "";
  try {
    $conn = new PDO('mysql:host=localhost;port=3306;dbname=curriculo', $usuario, $senha);
    //print "Conectado";
  }catch (PDOException $ex){
    print "erro ao conectar ao banco de dados!!";
  }  
?>