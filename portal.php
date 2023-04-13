<?php
  session_start();
  if(empty($_SESSION)){
    echo"<script> location.href='index.php'; </script>"; 
  }
  ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal - Usuário Identificado</title>
</head>

<body>
    <h1>PORTAL DO ASSINANTE</h1>
    <?php
        echo " Olá," . $_SESSION["nome"];
        echo " Seu e-mail é: " . $_SESSION["email"];
        
       echo"<h3>Quer sair do sistema?<a href='logout.php'>[SAIR] </a></h3>";
       echo"<h3>Gostaria de editar seu perfil?<a href='perfil.php'>[EDITAR] </a></h3>";
    ?>
</body>

</html>
