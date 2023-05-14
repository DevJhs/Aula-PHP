


<?php 
  
 //php sempre se inicia com <?php 

/*Criando Arrays no PHP 
$NOMEDAARRAY=array( |indice|=>|conteudo/valor| 
                       1    => 'infantil',
                       2    => 'adulto'  
);
                         
Outra forma de Criar Arrays no php $nomedaArray[] = 'NOMEDOCONTEUDO'; 

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente'; 
$categorias[] = 'adulto';
$categorias[] = 'idoso';

*/

$categorias = array( 
  
  //'infanti','adolecente','adulto','idoso'
  1 => "infantil",
  2 => "adolecente",
  3 => "adulto",
  4 => "idoso"

);

/*print_r() ira trazer todas a informaçoes daquele conteundo, desde quantidade tipo e o conteudo,
 porem de variaveis.*/
//print_r($categorias);

//Criando Variaveis no php usamo o dolar $nomedavariavel;
//$nome = 'Eduardo';
//$idade = 6;

//Metodo $_GET[] esté metodo irá passar informações atracés da URL.
//$nome=$_GET['nome'];
//$idade=$_GET['idade'];

/* 
Metodo $_POST[] Esté metodo irá passar informações, ele criara 
nome/valor que serão passados quando enviados. */
$nome=$_POST['nome'];
$idade=$_POST['idade'];


//var_dump() ira trazer o valor o tipo e a quantidade/tamanho.
//var_dump($nome,' Olá Mundo!',27);
//var_dump($idade);

//echo ira escreve o seu conteudo echo "testando";


//if(){} elseif(){} else{} sitemas de condições, if=se elseif=senãose else=senão

if(empty($nome)){
 echo 'O nome nao pode ser vazio';
 return;

}
if(strlen($nome)<3){
  echo 'O nome deve conter mais que 3 caracteres';
  return;
}
if(strlen($nome)>30){
 echo 'O Nome e Muito Grande.';
 return;
}
if(!is_numeric($idade)){
    echo 'Insira Apenas Números.';
    return;
}
if(strlen($idade)>2){
      echo 'A Idade Deve Conter Apenas Dois Digitos.';
      return;
}
if($idade>=6 && $idade <= 12){
//echo "infantil";

  //for laço de repetição repita se ou enquanto 
for($i=1; $i <= count($categorias); $i++){

    if($categorias[$i] == 'infantil'){
      echo "O nadador/a ".$nome." compete na categoria ".$categorias[$i]; 
      };
    };

}elseif($idade >= 13 && $idade <= 18){
//echo "adolecente";

for($i=1; $i <= count($categorias); $i++){

    if($categorias[$i] == 'adolecente'){
      echo "O nadador/a ".$nome." compete na categoria ".$categorias[$i]; 
      };
    };

}elseif($idade>=19 && $idade <=39){
//echo "adulto";
for($i=1; $i <= count($categorias); $i++){

    if($categorias[$i] == 'adulto'){
      echo "O nadador/a ".$nome." compete na categoria ".$categorias[$i]; 
      };
    };

}elseif($idade >= 40 && $idade <=60){

 for($i=1; $i <= count($categorias); $i++){

     if($categorias[$i] == 'idoso'){
       echo "O nadador/a ".$nome." compete na categoria ".$categorias[$i]; 
       };
    };

}
else{
    echo "Muito Novo/a";

};
