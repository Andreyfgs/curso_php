<?php

$vetor = array();
//$tamanho = count($vetor); descobrir o tamanho do vetor.
$somaDosPares = 0;
$somaDosImpares = 0;
$vetorPar = [];
$vetorImpar = [];

for ($i =0; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        
        $somaDosPares += $i;
                                    // $vetorPar = array_push($vetorPar, $i);
        $vetorPar[] = $i;
        
        
    }else {
        
        $somaDosImpares += $i;
        //$vetorImpar = array_push($vetorImpar, $i);
        $vetorImpar[] = $i; // $VetorImpar está adicionando o $i no array.
    } 
    
}  
//$tamanhoPar = count($tamanhoPar); da para trocar a condição por essa fica mais claro.

for($p = 0; $p < count($vetorPar); $p++) {

    echo $vetorPar[$p] . ","."<br>";

}

for($p = 0; $p < count($vetorImpar); $p++) {
echo "<br>";
    echo $vetorImpar[$p] . ",";

}
echo "<hr>";
echo "LAÇO WHILE";
echo "<br>";
echo "PAR". "<br>";

$i = 0;
while($i < count($vetorPar)) {

    echo $vetorPar[$i]. ",";
    $i++;
} 

echo "<br>";
echo "IMPAR" . "<br>";

$t = 0;
while($t < count($vetorImpar)) {

    echo $vetorImpar[$t] . ",";
    $t++;
}