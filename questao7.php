<?php

// números informados pelo o usuário
$val  =   2;
$val1 =   120;
$y = 0;


//alimentar vetor com 100 posições

for ($i=0; $i<99 ;$i++){

$vetor[$i]  = rand($val,$val1) ;
}

//identificar os numeros pares e armazenar em outro vetor
for ($i=0; $i<99 ;$i++){

//verificar se o número é par
if(($vetor[$i] % 2) ==0){
//limitanto numero de indices
    if($y <= 9 ){

($vetor1[$y] = $vetor[$i]);

    $y++;


}
}
}
echo "o valor é".array_sum($vetor1);
?>