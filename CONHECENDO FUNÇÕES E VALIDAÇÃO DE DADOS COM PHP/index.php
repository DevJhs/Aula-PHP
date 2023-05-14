<?php 
//session_start();
include "servicos/servicoMensagemSessao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para Incrição de Competidores</title>
</head>
<body> 
    <p>Formulario para Incrição de Competidores</p>

   <?php
   
      //$mensagemDeSucesso=isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
      $mensagemDeSucesso= obterMensagemSucesso();
      if(!empty($mensagemDeSucesso)){
          echo $mensagemDeSucesso;
        
      };
 
     //$mensagemDeErro=isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
     $mensagemDeErro=obterMensagemErro();
     if(!empty($mensagemDeErro)){
         echo $mensagemDeErro;
     };

   ?>
    
     <form action="script.php" method="post">
         <p>Seu Nome: <input type="text" name="nome"></p>
         <p>Sua Idade: <input type="text" name="idade"></p>
         <input type="submit" value="enviar">
     </form>

</body>
</html>