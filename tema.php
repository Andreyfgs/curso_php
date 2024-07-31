<?php

//alterar a ordem para descrescente usando outro FOR.
//PELO MENOS 3 VARIAVEIS (AREA DE TRANSFERENCIA, DESTINO )

$vetor = array();
//$tamanho = count($vetor); descobrir o tamanho do vetor.
$somaDosPares = 0;
$somaDosImpares = 0;
$vetorPar = [];
$vetorImpar = [];

for ($i =1; $i < 100; $i++) {
    if ($i % 2 == 0) {
        
        $somaDosPares += $i;
        // $vetorPar = array_push($vetorPar, $i);
        $vetorPar[] = $i;
        
        
    }else {
        
        $somaDosImpares += $i;
        //$vetorImpar = array_push($vetorImpar, $i);
        $vetorImpar[] = $i; // $VetorImpar está adicionando os valores do $i no array.
    } 
    
}  //criar outros 2 for para inverter a ordem.
$t= 0
for($t = 0; $t <= count($vetorPar); $t++) {
    echo $vetorPar[$t];
}
 
for($p = 0; $p < count($vetorImpar); $p++) {}

//METODOS DE ORDENAR UM ARRAY EX:BUBLLE SORT. nome MATUSSTAFURA/BUBBLE
