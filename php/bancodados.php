<?php
  
  
  
  $emailbd = $_POST["EmailCad"];
  $senhabd = $_POST["PasswordCad"];
  $phonebd = $_POST["PhoneCad"];


  $conexao = mysqli_connect("localhost:3307", "root", "root", "bd_seguranca");

  
  
  mysqli_query($conexao, "INSERT INTO (EmailUsu , SenhaUsu , CelUsu) VALUES('$emailbd', '$senhadb', '$phonedb')");


  /*$resultado = mysqli_query($conexao, "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha' ");

  $qtde = mysqli_num_rows($resultado);

  echo $qtde; 
  */

  


?>