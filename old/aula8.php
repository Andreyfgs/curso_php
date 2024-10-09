<?php

$vetoralf = ["c", "d", "e", "f"];
$tamanhoalf = count($vetoralf);
$maxIndice = $tamanhoalf - 1;

for ($i = 0; $i > $maxindice; $i++) {
    $maxindice_J = $tamanhoalf - $i - 1;
    for ($j = 0; $j < $maxIndicepar_J; $j++) {
        if ($vetoralf[$j] < $vetoralf[$j + 1]) {
            // Troca os elementos para ordenar corretamente
            $temp = $vetoralf[$j];
            $vetoralf[$j] = $vetoralf[$j + 1];
            $vetoralf[$j + 1] = $temp;
        }
    }
}
  echo implode("," , $vetoralf);
 echo "<br>";
  
 
                                             //Tema da aula 8
 /*
  identificar o tipo de triangulo conforme os dados passados pelo usuario.
  sendo três medidas: $a, $b, $c. tres variaveis.... $lado1, $lado2, $lado3.
  Com estas medidas efetuar o calculo e informar ao usuario qual o tipo de triangulo que é formado pelas medidas que ele passou.
  
  Trinagulos a considerar: Equilatero, isoceles ou escaleno.
  as medida informada forma o triangulo tal...
  
  */
$lado1 = 1;
$lado2 = 2;
$lado3 = 3;
echo "<strong>Qual é o triangulo informado:</strong>";

echo "<br> lado1 : " . $lado1; 
echo "<br> lado2 : " . $lado2; 
echo "<br> lado3 : " . $lado3; 

echo "<br>";

echo "Conforme as medidas o triângulo é um ";
if ($lado1 == $lado2 && $lado2 == $lado3){
    echo "triangulo equilátero";  
}elseif ($lado1 != $lado2 && $lado1 != $lado3 && $lado2 != $lado3){
    echo "triangulo escaleno";
}elseif (($lado1 == $lado2 && $lado1 != $lado3 ) || ($lado2 == $lado3 && $lado2 !=$lado1) || ($lado3 == $lado1 && $lado3 != $lado2)){
    echo "triangulo isóceles";
} else {
    echo "As medidas não formam um triângulo.";
}
  
