
<?php 
  
session_start();

include "servicos/servicosValidacao.php";
include "servicos/servicoMensagemSessao.php";
include "servicos/servicoCategoriaCompetido.php";

$nome=$_POST['nome'];
$idade=$_POST['idade'];

defineCategoriaCompetidor($nome,$idade);

header('location: index.php');