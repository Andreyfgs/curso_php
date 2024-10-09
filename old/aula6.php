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

// Usando o laço While

// Soma dos PARES
/*echo "<strong>Exercício usando o laço WHILE</strong>";
echo "<br>";
$i = 1;
$soma = 0;
    
    while ($i <= 100){ 
    $resto = $i % 2;  //$resto vai armazenar o resultado da divisão $ por 2
    if ($resto == 0){  //se for 0 é par 
    $soma = $soma + $i;
    } $i++;
} echo "A soma de todos os números pares é = ". $soma;

echo "<br>";
// Soma dos ímpares
$i = 1;
$resultado = 0;

    while ($i <= 100){
    $resto = $i % 2; //$resto vai armazenar o resultado da divisão $i por 2
    if ($resto == 1){ //se sobrar 1 é ímpar
    $resultado = $resultado + $i;
    } $i++;
} echo " A soma de todos os números ímpares é = ". $resultado."<br>";

echo "<br>";

// Usando o laço FOR
echo "<strong>Exercício usando o laço FOR</strong>";
echo "<br>";

$somaDosPares = 0;
$somaDosImpares = 0;

    for($i = 1; $i <= 100; $i++){
    $imparoupar = $i % 2;
    if($imparoupar == 0){
    $somaDosPares = $somaDosPares + $i; 
    }else{
    $somaDosImpares += $i;
    }
} 
echo "A soma do par é $somaDosPares<br>";   
echo "A soma dos Impares é $somaDosImpares<br>";
echo "<br>";
//Outra forma
/* 
$somadospares = 0;
$somadosimpares = 0;
    
    While($i <= 100){
    if($i % 2 ==0){
    $somadospares += $i;
    }else {
    $somadosimpares += $i;
    }*/

    echo "<strong>Tabuada legal</strong>";
    
    for($tabuada=1; $tabuada <= 10; $tabuada++) {
        echo "<br> Tabuada do $tabuada <br>";
     // Inicia o laço interno para multiplicar a tabuada por 0-10   
    for($n=0; $n <=10; $n++){
        echo "$tabuada x $n = " . $tabuada*$n . "<br>";
        }
    
    }  

    

