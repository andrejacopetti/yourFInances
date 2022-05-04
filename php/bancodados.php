<?php
  
  
  
  $emailbd = $_POST["Email"];
  $senhabd = $_POST["Password"];
  $phonebd = $_POST["Phone"];


  $conexao = mysqli_connect("localhost:3307", "root", "root", "bd_seguranca");

  
  
  //mysqli_query($conexao, "INSERT INTO usuario(nome, usuario, senha) VALUES('$nome', '$usuario', '$senha')");


  /*$resultado = mysqli_query($conexao, "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha' ");

  $qtde = mysqli_num_rows($resultado);

  echo $qtde; 
  */

  


?>