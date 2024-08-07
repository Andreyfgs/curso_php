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

  /*
  identificar o tipo de triangulo conforme os dados passados pelo usuario.
  sendo três medidas: $a, $b, $c. tres variaveis.... $lado1, $lado2, $lado3.
  Com estas medidas efetuar o calculo e informar ao usuario qual o tipo de triangulo que é formado pelas medidas que ele passou.
  
  Trinagulos a considerar: Equilatero, isoceles ou escaleno.
  as medida informada forma o triangulo tal...
  
  */
$lado1 = 0;
$lado2 = 5;
$lado3 = 0;
$lados = 0;
if($lados == $lado1 && $lado2 && $lado3){
    echo "É um triângulo Equilatero";
}else {
    echo "Não é um Trinângulo Equilatero";
}
  