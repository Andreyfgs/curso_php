<?php
/*$numero = 8;
$i = 1;
while ($i <=9){
    $resultado= $numero * $i;
    echo $numero . " x " . $i . " = " . $resultado;
    echo "<br>";
    $i++;
                                  WHILE
}*/


/*$numero = 8;                   DO WHILE
$i = 9;
do{
    $resultado = $numero * $i;
    echo $numero . " x " . $i . " = ". $resultado;
    echo "<br>"; 
    $i++;
}while ($i <= 10);*/

/*calcular os numeros pares de 2 ate 20;
utilizando os laços WHILE e For;*/

echo "for";
echo "<br>";
$numero = 20;
for ($i=0; $i <=20 ; $i = $i + 2){
 echo $i;
 echo "<br>";
} /*outro exemplo
    
    for ($i = 2; $i <=20; $i++){
    $resto = $i % 2;
    
    if ($resto == 0){
    
    echo $i . "<br>";
    } else {
    //impares 
    }
*/


echo "<br>";
echo "WHILE";
echo "<br>";

$i = 0;
while($i <= 20){
    
    echo $i;
    $i = $i + 2;
    echo "<br>";
}

/* Somar todos os numeros de 1 - 100
    Utilizando o laço de repetição WHILE após, mostrar o resultado de soma;*/ 
 echo "<hr>";
    
    $i = 1;
    $soma = 0;
    while($i <=100){

        $soma += $i;// mesmo que: $soma = $soma + $i; 
        $i++;
    } echo "A soma de 1 até 100 é ". $soma;


    /*
    Somar todos os números Pares de 1-100 
    Somar todos os números IMPARES de 1-100
    Utilizando o laço de repetiçao  While 
    apos, mostrar o resultado da soma desses números;
    ex..:
    Soma Pares = 123211123
    Soma Impares = 545455424
    
    
    */
