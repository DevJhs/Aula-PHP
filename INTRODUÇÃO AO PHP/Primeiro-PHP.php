



<?php 
 //php sempre se inicia com <?php 

 //Criando Arrays no php $nomedaArray[] = 'NOMEDOCONTEUDO'; 
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

//print_r() ira trazer todas a informaçoes daquele conteundo, desde quantidade tipo e o conteudo.
print_r($categorias);

//Criando Variaveis no php usamo o dolar $nomedavariavel;
$nome = 'Eduardo';
$idade = 6;

//var_dump() ira trazer o valor o tipo e a quantidade/tamanho.
//var_dump($nome);
//var_dump($idade);

//echo ira escreve o seu conteudo echo "testando";


//if(){} elseif(){} else{} sitemas de condições, if=se elseif=senãose else=senão
if($idade>=6 && $idade <= 12){
//echo "infantil";

  //for laço de repetição repita se ou enquanto 
for($i=0; $i <= count($categorias); $i++){

    if($categorias[$i] == 'infantil'){
      echo "O nadador ",$nome," compete na categoria ".$categorias[$i]; 
      };
    };

}elseif($idade >= 13 && $idade <= 18){
//echo "adolecente";

for($i=0; $i <= count($categorias); $i++){

    if($categorias[$i] == 'adolecente'){
      echo "O nadador ".$nome." compete na categoria ".$categorias[$i]; 
      };
    };

}elseif($idade>=19 && $idade <=39){
//echo "adulto";
for($i=0; $i <= count($categorias); $i++){

    if($categorias[$i] == 'adulto'){
      echo "O nadador ",$nome," compete na categoria ".$categorias[$i]; 
      };
    };

}elseif($idade >= 40 && $idade <=60){

 for($i=0; $i <= count($categorias); $i++){

     if($categorias[$i] == 'idoso'){
       echo "O nadador ",$nome," compete na categoria ".$categorias[$i]; 
       };
    };

}
else{
    echo "erro 64 disk log 344";

};
?>