<?php 
/*
    Somar todos os números Pares de 1-100 
    Somar todos os números IMPARES de 1-100
    Utilizando o laço de repetiçao  While 
    apos, mostrar o resultado da soma desses números;
    ex..:
    Soma Pares = 123211123
    Soma Impares = 545455424
*/

$i = 1;
$soma = 0;
    while ($i <= 100){ 
       $resto = $i % 2;  
    if ($resto == 0){  //se for 0 é par 
    $soma = $soma + $i;
    } $i++;
} echo "A soma de todos os números pares é ". $soma;
echo "<hr>";

$i = 1;

$resultado = 0; 

echo $i % 2;

echo "<hr>";

$i = 1;
$resultado = 0;

while ($i <= 100){
    $resto = $i % 2;
    if ($resto == 1){ //se sobrar 1 é ímpar
     $resultado = $resultado + $i;
    } $i++;

} echo " A soma de todos os números ímpares é ". $resultado;
