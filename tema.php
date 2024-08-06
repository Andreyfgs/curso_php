<?php

/*//alterar a ordem para descrescente usando outro FOR.
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

//METODOS DE ORDENAR UM ARRAY EX:BUBLLE SORT. nome MATUSSTAFURA/BUBBLE*/

$pares = 0;
$impares = 0;
$vetorPar = [];
$vetorImpar = [];


for ($i = 0; $i < 100; $i++) {
    if ($i % 2 == 0) {
        $pares += $i;
        $vetorPar[] = $i;
    } else {
        $impares += $i;
        $vetorImpar[] = $i; 
    } 
}

$vetorPar = []; 
for ($i = 100; $i >= 0; $i -= 2) { // ou $i = $i - 2
    $vetorPar[] = $i;  //adicionando o valor $i no $vetorPar[]
} 

echo "<strong>Números pares do 100 ao 0;</strong> ";
for ($p = 0; $p < count($vetorPar); $p++) {
    echo $vetorPar[$p] . ",";  // mostrando os valores do $p no $vetorPar[]
} //for para mostrar os numeros pares.

$vetorImpar = [];
for ($i= 99; $i >= 0; $i -= 2) {
    $vetorImpar[] = $i;
}

echo "<br><strong>Números Impares do 100 ao 0</strong> ";
for ($y = 0; $y <= count($vetorImpar); $y++){
    echo $vetorImpar[$y]. ",";
} //for para mostrar os números ímpares.

